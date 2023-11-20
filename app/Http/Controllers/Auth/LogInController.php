<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $credentials = $request->validated();


        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        if (Auth::guard('community')->attempt($credentials)) {
            if(Auth::guard('community')->user()->enable == 0) {
                return redirect(route('form-login'))->with('processResult', [
                    'status' => 0,
                    'message' => __('app.disabled_community_user')
                ]);
            };
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'incorrect-credentials' => __('app.incorrect_username_and_or_password'),
        ])->onlyInput('email');
    }
}
