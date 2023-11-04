<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Community extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'communities';
    protected $fillable = [
        'name'
    ];

    public function hasManyCommunityUsers() {
        return $this->hasMany(CommunityUser::class, 'community_id', 'id');
    }
}
