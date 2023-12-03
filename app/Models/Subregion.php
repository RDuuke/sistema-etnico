<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subregion extends Model
{
    use HasFactory;

    protected $table = 'subregions';
    protected $fillable = [
        'name',
        'hamlet_id'
    ];

    public function belongsToHamlet() {
        return $this->belongsTo(Hamlet::class, 'hamlet_id', 'id');
    }

    public function hasManyTerritorials() {
        return $this->hasMany(Territorial::class, 'subregion_id', 'id');
    }

    public function hasManyCommunities() {
        return $this->hasMany(Community::class, 'subregion_id', 'id');
    }
   
}
