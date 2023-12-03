<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeArea extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'types_of_areas';
    protected $fillable = [
        'name'
    ];

    public function hasManyCommunities() {
        return $this->hasMany(Community::class, 'type_of_area_id', 'id');
    }
}
