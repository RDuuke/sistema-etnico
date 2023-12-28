<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndigenousVillage extends Model
{
    use HasFactory;

    protected $table = 'indigenous_villages';
    protected $fillable = [
        'name',
    ];

    public function hasManyCommunities() {
        return $this->hasMany(Community::class, 'indigenous_village_id', 'id');
    }
  
}
