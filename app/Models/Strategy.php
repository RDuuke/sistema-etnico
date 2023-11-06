<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Strategy extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'strategies';
    protected $fillable = [
        'name'
    ];

    public function hasManyCommunityUsers() {
        return $this->hasMany(CommunityUser::class, 'strategy_id', 'id');
    }
}
