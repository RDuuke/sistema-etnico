<?php

declare(strict_types=1);

namespace App\Http\Livewire\Dashboard\Communities;

use App\Http\Requests\Dashboard\Communities\CommunityRequest;
use App\Models\Community;
use App\Models\District;
use App\Models\Hamlet;
use App\Models\IndigenousVillage;
use App\Models\Municipality;
use App\Models\Subregion;
use App\Models\Territorial;
use App\Models\TypeArea;
use App\Repository\CommunityRepository;
use Exception;
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
    public $checkCollectiveTitle = false;
    public $checkNameCommunityCouncil = false;
    public $checkReservationName = false;
    public $checkTownName = false;
    public $editMode = false;
    public $community_id = null;
    public Community $community;
    public $administrator;
    public $indigenousVillages;


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
        $this->administrator = auth()->user();
        $this->add_community    = false;
        $this->edit_community   = false;

        $this->municipalities = Municipality::all();
        $this->districts      = District::all();
        $this->hamlets        = Hamlet::all();
        $this->subregions     = Subregion::all();
        $this->territorials   = Territorial::all();
        $this->types_of_ares  = TypeArea::all();
        $this->indigenousVillages = IndigenousVillage::all();

        $this->community      = new Community();
        $this->emit('my-event');

    }

    public function save() {

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
    }

    public function add() {
        $this->edit_community = false;
        $this->add_community = true;
    }
    
    public function preview() {
        $this->add_community = false;
        $this->edit_community = false;
        $this->mount();
    }
}
