<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hamlet extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'hamlets';
    protected $fillable = [
        'name',
        'district_id'
    ];

    public function belongsToDistricts() {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function hasManySubregions() {
        return $this->hasMany(Subregion::class, 'hamlet_id', 'id');
    }

    public function hasManyCommunities() {
        return $this->hasMany(Community::class, 'hamlet_id', 'id');
    }
   
}
