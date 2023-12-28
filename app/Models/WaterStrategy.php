<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WaterStrategy extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'water_strategies';
    protected $fillable = [
        'community_id',
        'types_water_strategy_id',
        'year',
        'state',
        'housing_with_service',
    ];

    public function belongsToCommunity() {
        return $this->belongsTo(Community::class, 'community_id', 'id');
    }

    public function belongsToTypeWaterStrategy() {
        return $this->belongsTo(TypeWaterStrategy::class, 'types_water_strategy_id', 'id');
    }

}

