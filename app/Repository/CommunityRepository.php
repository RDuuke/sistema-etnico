<?php

namespace App\Repository;

use App\Models\Community;

final class CommunityRepository {
    private $model = Community::class;

    public function create(Community $data) : Community {
        return $this->model::create([
            'name'                      => ucfirst(strtolower($data['name'])),
<<<<<<< HEAD
            'type_community'            => $data['type_community'],           
=======
>>>>>>> bitbcuket/main
            'contact_phone'             => $data['contact_phone'],           
            'contact_email'             => $data['contact_email'],           
            'type_of_area_id'           => $data['type_of_area_id'],           
            'occupied_area'             => $data['occupied_area'],           
            'coordinates'               => $data['coordinates'],       
            'territorial_id'            => $data['territorial_id'],           
            'subregion_id'              => $data['subregion_id'],       
            'hamlet_id'                 => $data['hamlet_id'],       
            'district_id'               => $data['district_id'],       
            'municipality_id'           => $data['municipality_id'],           
<<<<<<< HEAD
=======
            'name_community_council'    => ucfirst(strtolower($data['name_community_council'])),                   
>>>>>>> bitbcuket/main
            'collective_title'          => $data['collective_title'],           
            'reservation_name'          => ucfirst(strtolower($data['reservation_name'])),           
            'town_name'                 => ucfirst(strtolower($data['town_name'])),       
        ]);
    }

    public function update(string|int $id, Community $data): Community {
        $community = Community::findOrFail($id);
        $community->update(['name'      => ucfirst(strtolower($data['name'])),
<<<<<<< HEAD
            'type_community'            => $data['type_community'],           
=======
>>>>>>> bitbcuket/main
            'contact_phone'             => $data['contact_phone'],
            'contact_email'             => $data['contact_email'],
            'type_of_area_id'           => $data['type_of_area_id'],
            'occupied_area'             => $data['occupied_area'],
            'coordinates'               => $data['coordinates'],
            'territorial_id'            => $data['territorial_id'],
            'subregion_id'              => $data['subregion_id'],
            'hamlet_id'                 => $data['hamlet_id'],
            'district_id'               => $data['district_id'],
            'municipality_id'           => $data['municipality_id'],
<<<<<<< HEAD
=======
            'name_community_council'    => ucfirst(strtolower($data['name_community_council'])),
>>>>>>> bitbcuket/main
            'collective_title'          => $data['collective_title'],
            'reservation_name'          => ucfirst(strtolower($data['reservation_name'])),
            'town_name'                 => ucfirst(strtolower($data['town_name'])),       
        ]);
        $community->refresh();
        return $community;
    }
}
