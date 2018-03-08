<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    // $geoJson = File::get("/data/states.geojson");
    $string = file_get_contents("../public/data/states.geojson");
    dd($string);


    echo $string;
}
