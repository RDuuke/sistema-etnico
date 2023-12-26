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
use App\Repository\CommunityRepository;
use Exception;
use Livewire\Component;

final class IndexCommunity extends Component {
<<<<<<< HEAD
=======
//TODO recordar que debo organizar los select dependientes de la ubicación
>>>>>>> bitbcuket/main
    public $add_community;
    public $edit_community;
    public $municipalities;
    public $districts;
    public $hamlets;
    public $subregions;
    public $territorials;
    public $types_of_ares;
    public $checkCollectiveTitle = false;
    public $checkNameCommunityCouncil = false;
    public $checkReservationName = false;
    public $checkTownName = false;
    public $editMode = false;
    public $community_id = null;
    public Community $community;
<<<<<<< HEAD
    public $administrator;
=======
>>>>>>> bitbcuket/main


    protected array $rules;
    protected $messages;
    protected $repository;

    public function __construct() {
        $this->repository = new CommunityRepository;
        $this->rules    = CommunityRequest::rules();
        $this->messages = CommunityRequest::messages();
    }

    protected $listeners = [
        'update-community'  => 'update',
    ];

    public function render() {
        return view('livewire.dashboard.communities.index-community');
    }

    public function mount() {
<<<<<<< HEAD
        $this->administrator = auth()->user();
=======
>>>>>>> bitbcuket/main
        $this->add_community    = false;
        $this->edit_community   = false;

        $this->municipalities = Municipality::all();
        $this->districts      = District::all();
        $this->hamlets        = Hamlet::all();
        $this->subregions     = Subregion::all();
        $this->territorials   = Territorial::all();
        $this->types_of_ares  = TypeArea::all();

        $this->community      = new Community();
        $this->emit('my-event');

    }

    public function save() {
<<<<<<< HEAD

=======
        
>>>>>>> bitbcuket/main
        if ($this->add_community) {
            $this->validate(array_merge(
                $this->rules,['community.name' => 'required|unique:communities,name']
            ));
        } else {
            $this->validate(array_merge(
                $this->rules,['community.name' => 'required|unique:communities,name,' . $this->community_id]
            ));
        }

        try {

            if ($this->edit_community) {
                $this->repository->update($this->community_id, $this->community);
                $this->add_community = false;
                return redirect(route('dashboard.communities.index'))->with('processResult', [
                    'status' => 1,
                    'message' => __('app.community_update_successfully')
                ]);
            }

            $this->repository->create($this->community);
            $this->add_community = false;
            return redirect(route('dashboard.communities.index'))->with('processResult', [
                'status' => 1,
                'message' => __('app.community_create_successfully')
            ]);

        } catch (Exception $e) {
                return redirect()->back()->with('processResult', [
                    'status' => 0,
                    'message' => __('app.community_management_failure')
                ]);
            }
    }

    public function update($id) {
        $this->add_community = false;
        $this->edit_community = true;
        $this->community_id = $id;
        $this->community = Community::find($id);
<<<<<<< HEAD
=======
        $this->resetChecks();
        if ($this->community->name_community_council != "") $this->checkNameCommunityCouncil = true;
        if (!is_null($this->community->collective_title))   $this->checkCollectiveTitle = true;
        if ($this->community->reservation_name  != "")      $this->checkReservationName = true;
        if ($this->community->town_name  != "")             $this->checkTownName = true;
    }

    public function resetChecks() {
        $this->checkNameCommunityCouncil = false;
        $this->checkCollectiveTitle      = false;
        $this->checkReservationName      = false;
        $this->checkTownName             = false;
>>>>>>> bitbcuket/main
    }

    public function add() {
        $this->edit_community = false;
        $this->add_community = true;
    }
    
    public function preview() {
        $this->add_community = false;
        $this->edit_community = false;
<<<<<<< HEAD
=======
        $this->checkNameCommunityCouncil = false;
        $this->checkCollectiveTitle      = false;
        $this->checkReservationName      = false;
        $this->checkTownName             = false;
        $this->resetChecks();
>>>>>>> bitbcuket/main
        $this->mount();
    }
}
