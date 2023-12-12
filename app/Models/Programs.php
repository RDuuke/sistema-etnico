<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programs extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'programs';
    protected $fillable = [
        'apply',
        'unit_of_measurement',
        'amount_of_participants',
        'community_id',
        'type_program_id',
    ];

    public function belongsToCommunity() {
        return $this->belongsTo(Community::class, 'community_id', 'id');
    }

    public function belongsToTypeProgram() {
        return $this->belongsTo(TypeProgram::class, 'type_program_id', 'id');
    }
}
