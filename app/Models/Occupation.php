<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Occupation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'occupations';
    protected $fillable = [
        'name'
    ];

    public function hasManyCommunityUsers() {
        return $this->hasMany(CommunityUser::class, 'occupation_id', 'id');
    }
}
