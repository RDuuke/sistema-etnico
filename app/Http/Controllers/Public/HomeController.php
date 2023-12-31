<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;

final class HomeController 
{
    public function __invoke()
    {
        session(['actualSection' => 'presentation']);
        return view('publics.home');
    }
}
