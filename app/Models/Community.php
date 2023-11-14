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
        'name',
        'type_community_id'
    ];

    public function communityUsersPivot() {
        return $this->belongsToMany(CommunityUser::class)
            ->withPivot('id', 'community_id', 'community_name', 'user_id', 'user_name', 'user_document', 'user_email');
    }
    
}
