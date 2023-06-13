<?php

namespace App\Models;
class listing
{
    public static function all()
    {
        return  [
            [
                'id'=> 10,
                 'title'=> 'title1',
                 'description'=> 'this is description'            
            ],
            [
                'id'=> 20,
                 'title'=> 'title2',
                 'description'=> 'this is description'            
            ],
            [
                'id'=> 30,
                 'title'=> 'title3',
                 'description'=> 'this is description'            
            ]
            ];
    }

    public static function search($id)
    {
        $listings = self::all();
        foreach($listings as $listing)
        {
            if ($listing['id']==$id) {
                return $listing;
            }
        }
    }
}