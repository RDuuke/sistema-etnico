<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotCommunityUser extends Model
{
    use HasFactory;

    protected $table = 'community_community_user';
    protected $fillable = [
        'community_id',
        'community_name',
        'user_id',
        'user_name',
        'user_document',
        'user_email',

    ];
}
