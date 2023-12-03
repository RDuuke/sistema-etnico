<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Territorial extends Model
{
    use HasFactory;

    protected $table = 'territorials';
    protected $fillable = [
        'name',
        'subregion_id'
    ];

    public function belongsToSubregion() {
        return $this->belongsTo(Subregion::class, 'subregion_id', 'id');
    }

    public function hasManyCommunities() {
        return $this->hasMany(Community::class, 'territorial_id', 'id');
    }
   
}
