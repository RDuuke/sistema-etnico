<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'districts';
    protected $fillable = [
        'name',
        'municipality_id'
    ];

    public function belongsToMunicipality() {
        return $this->belongsTo(Municipality::class, 'municipality_id', 'id');
    }

    public function hasManyHamlets() {
        return $this->hasMany(Hamlet::class, 'district_id', 'id');
    }

    public function hasManyCommunities() {
        return $this->hasMany(Community::class, 'district_id', 'id');
    }
   
}
