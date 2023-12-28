<?php

namespace App\Repository;

use App\Models\Community;
use Exception;

final class CommunityRepository {
    private $model = Community::class;

    public function create(Community $data) : Community {
        try {
        return $this->model::create([
            'name'                      => ucfirst(strtolower($data['name'])),
            'type_community'            => $data['type_community'],           
            'contact_phone'             => $data['contact_phone'],           
            'contact_email'             => $data['contact_email'],           
            'type_of_area_id'           => $data['type_of_area_id'],           
            'occupied_area'             => $data['occupied_area'],           
            'longitude'                 => $data['longitude'],       
            'latitude'                  => $data['latitude'],       
            'territorial_id'            => $data['territorial_id'],           
            'subregion_id'              => $data['subregion_id'],       
            'hamlet_id'                 => $data['hamlet_id'],       
            'district_id'               => $data['district_id'],       
            'municipality_id'           => $data['municipality_id'],           
            'collective_title'          => $data['collective_title'],           
            'reservation_name'          => ucfirst(strtolower($data['reservation_name'])),           
            'indigenous_village_id'                 => ucfirst(strtolower($data['indigenous_village_id'])),       
        ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

    }

    public function update(string|int $id, Community $data): Community {
        $community = Community::findOrFail($id);
        $community->update(['name'      => ucfirst(strtolower($data['name'])),
            'type_community'            => $data['type_community'],           
            'contact_phone'             => $data['contact_phone'],
            'contact_email'             => $data['contact_email'],
            'type_of_area_id'           => $data['type_of_area_id'],
            'occupied_area'             => $data['occupied_area'],
            'longitude'                 => $data['longitude'],
            'latitude'                  => $data['latitude'],
            'territorial_id'            => $data['territorial_id'],
            'subregion_id'              => $data['subregion_id'],
            'hamlet_id'                 => $data['hamlet_id'],
            'district_id'               => $data['district_id'],
            'municipality_id'           => $data['municipality_id'],
            'collective_title'          => $data['collective_title'],
            'reservation_name'          => ucfirst(strtolower($data['reservation_name'])),
            'indigenous_village_id'                 => ucfirst(strtolower($data['indigenous_village_id'])),       
        ]);
        $community->refresh();
        return $community;
    }
}
