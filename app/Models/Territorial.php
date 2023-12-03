<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Territorial extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'territorials';
    protected $fillable = [
        'name',
        'subregion_id'
    ];

    public function belongsToSubregion() {
        return $this->belongsTo(Subregion::class, 'subregion_id', 'id');
    }
   
}
