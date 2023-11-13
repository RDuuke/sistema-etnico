<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeCommunity extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'type_of_communities';
    protected $fillable = [
        'name'
    ];

    // public function hasManyCommunityUsers() { //TODO relación con comunidades
        // return $this->hasMany(Com::class, 'community_id', 'id');
    // }
}
