<?php

declare(strict_types=1);

namespace App\Http\Livewire\Dashboard\Communities;

use App\Http\Requests\Dashboard\Communities\CommunityRequest;
use App\Models\Community;
use App\Models\District;
use App\Models\Hamlet;
use App\Models\Municipality;
use App\Models\Subregion;
use App\Models\Territorial;
use App\Models\TypeArea;
use Livewire\Component;

final class IndexCommunity extends Component {

    public $add_community;
    public $edit_community;
    public $municipalities;
    public $districts;
    public $hamlets;
    public $subregions;
    public $territorials;
    public $types_of_ares;
    public Community $community;


    protected array $rules;
    protected $messages;

    public function __construct()
    {
        $this->rules    = CommunityRequest::rules();
        $this->messages = CommunityRequest::messages();
    }


    public function render() {
        return view('livewire.dashboard.communities.index-community');
    }

    public function mount() {
        $this->add_community    = false;
        $this->edit_community   = false;

        $this->municipalities = Municipality::all();
        $this->districts      = District::all();
        $this->hamlets        = Hamlet::all();
        $this->subregions     = Subregion::all();
        $this->territorials   = Territorial::all();
        $this->types_of_ares  = TypeArea::all();

        $this->community      = new Community();
    }

    public function add() {
        $this->add_community = true;
    }
    
    public function preview() {
        $this->add_community = false;
    }

    public function save() {
        $this->validate();
        dd('entre');
    }
}
