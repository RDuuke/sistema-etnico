<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CommunityUser extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard_name = 'community';
    protected $table = 'community_users';
    protected $fillable = [
        'names',
        'surnames',
        'type_document_id',
        'document',
        'age',
        'gender_id',
        'phone_1',
        'phone_2',
        'email',
        'community_id',
        'educational_level_id',
        'training_area_id',
        'occupation_id',
        'strategy_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
    public function getFullNameAttribute() {
        return "{$this->names} {$this->surnames}";
    }

    public function belongsToTypeDocument() {
        return $this->belongsTo(TypeDocument::class, 'type_document_id', 'id');
    }

    public function belongsToGender() {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }
    
    public function belongsToCommunity() {
        return $this->belongsTo(Community::class, 'community_id', 'id');
    }

    public function belongsToEducationalLevel() {
        return $this->belongsTo(Community::class, 'educational_level_id', 'id');
    }
    
    public function belongsToTrainingArea() {
        return $this->belongsTo(TrainingArea::class, 'training_area_id', 'id');
    }

    public function belongsToOccupation() {
        return $this->belongsTo(Occupation::class, 'occupation_id', 'id');
    }
    
    public function belongsToStrategy() {
        return $this->belongsTo(Strategy::class, 'strategy_id', 'id');
    }
}
