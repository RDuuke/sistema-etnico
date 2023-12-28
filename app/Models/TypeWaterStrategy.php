<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeWaterStrategy extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'types_of_water_strategies';
    protected $fillable = [
        'name'
    ];

    public function hasManyWaterStrategies() {
        return $this->hasMany(WaterStrategy::class, 'types_water_strategy_id', 'id');
    }
}
