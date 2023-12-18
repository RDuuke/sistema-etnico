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
        'drinking_water',
        'drinking_water_date',
        'drinking_water_status',
        'water_purification_system',
        'water_purification_system_date',
        'water_purification_system_status',
        'families_with_drinking_water',
        'aqueduct',
        'aqueduct_date',
        'aqueduct_status',
        'septic_tank_sewer',
        'septic_tank_date',
        'septic_tank_status',
        'families_with_sewer',
    ];

    public function belongsToCommunity() {
        return $this->belongsTo(Community::class, 'community_id', 'id');
    }

}

