<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Census extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'census';
    protected $fillable = [
        'number_of_families',
        'number_of_people',
        'year',
        'community_id'
    ];

    public function belongsToCommunityId() {
        return $this->belongsTo(Community::class, 'community_id', 'id');
    }
}
