<?php

declare(strict_types=1);

namespace App\Http\Livewire\Dashboard\water_strategy;

use App\Http\Requests\Dashboard\WaterStrategies\WaterStrategyRequest;
use App\Models\Community;
use App\Models\TypeWaterStrategy;
use App\Models\WaterStrategy;
use App\Repository\WaterStrategiesRepository;
use Exception;
use Livewire\Component;

final class FormCreateAndEdit extends Component
{
    public $add_water_strategy = false;
    public $edit_water_strategy = false;
    public $administrator;
    public $community;
    public $water_strategy;
    public $water_strategy_id;
    public $types_water_strategies;

    protected array $rules;
    protected $messages;
    protected $repository;

    public function __construct()
    {
        $this->repository = new WaterStrategiesRepository;
        $this->rules    = WaterStrategyRequest::rules();
        $this->messages = WaterStrategyRequest::messages();
    }

    public function render()
    {
        return view('livewire.dashboard.water_strategy.form_create_and_edit');
    }

    public function mount(string $community_id, $water_strategy_id)
    {
        $this->administrator = auth()->user();
        $this->community = Community::find($community_id);
        $this->add_water_strategy   = true;
        $this->water_strategy       = new WaterStrategy();
        $this->water_strategy_id    = $water_strategy_id;

        if ($this->water_strategy_id) {
            $this->add_water_strategy           = false;
            $this->edit_water_strategy          = true;
            $this->water_strategy               = WaterStrategy::find($this->water_strategy_id);
        }
        $this->types_water_strategies    = TypeWaterStrategy::all();
           
    }

    public function save() {
        $this->validate();
        try {
            if ($this->add_water_strategy) {
                $this->water_strategy->community_id = $this->community->id;

                $this->repository->create($this->water_strategy);
                return redirect(route('dashboard.water.index', ['community_id' => $this->community->id]))->with('processResult', [
                    'status' => 1,
                    'message' => __('app.water_strategy_create_successfully')
                ]);
            }

            $this->repository->update($this->water_strategy_id, $this->water_strategy);
            return redirect(route('dashboard.water.index', ['community_id' => $this->community->id]))->with('processResult', [
                'status' => 1,
                'message' => __('app.water_strategy_update_successfully')
            ]);
        } catch (Exception $e) {
            if ($this->add_water_strategy) {
                return redirect()->back()->with('processResult', [
                    'status' => 0,
                    'message' => __('app.water_strategy_create_failure')
                ]);
            }
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.water_strategy_update_failure')
            ]);
        }
    }
}
