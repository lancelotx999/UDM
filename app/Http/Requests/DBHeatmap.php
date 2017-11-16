<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class DBHeatmap extends \Maatwebsite\Excel\Files\ExcelFile
{
    public function getFile()
    {
        $file = Input::file('file');
        $filename = $file->getPathName();

        $raw = Excel::load($file, function($reader) {})->get();
        $headers = $raw->first()->first()->keys()->toArray();

        if (in_array("roomid",$headers))
        {
            if (in_array("date",$headers))
            {
                if (in_array("temperature",$headers))
                {
                    return $filename;
                }
            }
        }
        else
        {
          dd("INVALID HEADERS FOR HEATMAP CSV FILE");
          return 1;  
        }    
    }

}
