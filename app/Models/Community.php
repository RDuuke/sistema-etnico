<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $table = 'communities';
    protected $fillable = [
        'name',
        'type_community',
        'contact_phone',
        'contact_email',
        'type_of_area_id',
        'occupied_area',
        'longitude',
        'latitude',
        'territorial_id',
        'subregion_id',
        'hamlet_id',
        'district_id',
        'municipality_id',

        /**Optionals */
        'collective_title',
        'reservation_name',
        'indigenous_village_id',

    ];

    public function communityUsersPivot() {
        return $this->belongsToMany(CommunityUser::class)
            ->withPivot('id', 'community_id', 'community_name', 'user_id', 'user_name', 'user_document', 'user_email');
    }

    public function belongsToTypeArea() {
        return $this->belongsTo(TypeArea::class, 'type_of_area_id', 'id');
    }

    public function belongsToTerritorial() {
        return $this->belongsTo(Territorial::class, 'territorial_id', 'id');
    }

    public function belongsToSubregion() {
        return $this->belongsTo(Subregion::class, 'subregion_id', 'id');
    }

    public function belongsToHamlet() {
        return $this->belongsTo(Hamlet::class, 'hamlet_id', 'id');
    }

    public function belongsToDistrict() {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function belongsToMunicipality() {
        return $this->belongsTo(Municipality::class, 'municipality_id', 'id');
    }

    public function hasManyCensus() {
        return $this->hasMany(Census::class, 'community_id', 'id');
    }

    public function hasManyPrograms() {
        return $this->hasMany(Programs::class, 'community_id', 'id');
    }

    public function hasManyWaterStrategies() {
        return $this->hasMany(WaterStrategy::class, 'community_id', 'id');
    }

    public function hasManyProtectedAreas() {
        return $this->hasMany(ProtectedArea::class, 'community_id', 'id');
    }

    public function belongsToIndigenousVillage() {
        return $this->belongsTo(IndigenousVillage::class, 'indigenous_village_id', 'id');
    }
    
}
