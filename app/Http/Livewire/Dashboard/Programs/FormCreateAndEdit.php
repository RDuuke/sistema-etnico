<?php

declare(strict_types=1);

namespace App\Http\Livewire\Dashboard\Programs;

use App\Http\Requests\Dashboard\Programs\ProgramRequest;
use App\Models\Community;
use App\Models\Programs;
use App\Models\TypeProgram;
use App\Repository\ProgramsRepository;
use Exception;
use Livewire\Component;

final class FormCreateAndEdit extends Component
{
    public $add_program = false;
    public $edit_program = false;
    public $administrator;
    public $community;
    public $program;
    public $program_id;
    public $programs;
    public $types_programs;

    protected array $rules;
    protected $messages;
    protected $repository;

    public function __construct()
    {
        $this->repository = new ProgramsRepository;
        $this->rules    = ProgramRequest::rules();
        $this->messages = ProgramRequest::messages();
    }

    public function render()
    {
        return view('livewire.dashboard.programs.form_create_and_edit');
    }

    public function mount(string $community_id, $program_id)
    {
        
        $this->administrator = auth()->user();
        $this->community = Community::find($community_id);
        $this->add_program   = true;
        $this->program       = new Programs();
        $this->programs         = Programs::where('community_id', $community_id)->get();
        $this->types_programs   = TypeProgram::whereNotIn('id', $this->programs->pluck('type_program_id'))->get();

        $this->program_id    = $program_id;

        if ($this->program_id) {
            $this->add_program  = false;
            $this->edit_program = true;
            $this->program       = Programs::find($this->program_id);
            
        }

    }

    public function save() {
        $this->validate();

        try {
            $this->program->community_id = $this->community->id;
            $this->repository->create($this->program);
            return redirect(route('dashboard.programs.index', ['community_id' => $this->community->id]))->with('processResult', [
                'status' => 1,
                'message' => __('app.program_create_successfully')
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.program_create_failure')
            ]);
        }
    }
}
