<?php
namespace App\Helpers;


class AppArrayData
{

    private static array $typesCommunity = [
        [
            'id' => 1,
            'value' => 'app.indigenous'
            ],
         [
            'id' => 2,
            'value' => 'app.Afro'
        ]
    ];

    public static function getTypesCommunities(): array
    {
        return self::$typesCommunity;
    }


    public static function getTypeCommunityById(int $id): array|null
    {
        foreach (self::getTypesCommunities() as $typeCommunity) {
            if ($typeCommunity['id'] == $id) {
                return $typeCommunity;
            }
        }
        return null;
    }

}
