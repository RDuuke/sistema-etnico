<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProtectedArea extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'protected_areas';
    protected $fillable = [
        'year',
        'protected_hectares',
        'payments_environmental_services',
        'community_id'
    ];

    public function belongsToCommunityId() {
        return $this->belongsTo(Community::class, 'community_id', 'id');
    }
}
