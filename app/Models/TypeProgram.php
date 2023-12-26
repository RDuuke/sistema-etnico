<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeProgram extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'types_of_programs';
    protected $fillable = [
        'name'
    ];

    public function hasManyPrograms() {
        return $this->hasMany(Programs::class, 'type_program_id', 'id');
    }
}
