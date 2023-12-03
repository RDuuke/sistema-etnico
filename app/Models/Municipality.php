<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Municipality extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'municipalities';
    protected $fillable = [
        'name'
    ];

    public function hasManyDistricts() {
        return $this->hasMany(District::class, 'municipality_id', 'id');
    }

    public function hasManyCommunities() {
        return $this->hasMany(Community::class, 'municipality_id', 'id');
    }
   
}
