<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PivotCommunityUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'community_user';
    protected $fillable = [
        'community_id',
        'community_name',
        'community_user_id',
        'user_name',
        'user_document',
        'user_email',

    ];
}
