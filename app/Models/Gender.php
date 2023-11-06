<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gender extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'genders';
    protected $fillable = [
        'name'
    ];

    public function hasManyCommunityUsers() {
        return $this->hasMany(CommunityUser::class, 'gender_id', 'id');
    }
}
