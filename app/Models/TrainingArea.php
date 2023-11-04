<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingArea extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'training_areas';
    protected $fillable = [
        'name'
    ];

    public function hasManyCommunityUsers() {
        return $this->hasMany(CommunityUser::class, 'training_area_id', 'id');
    }
}
