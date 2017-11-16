<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class DBSecurity extends \Maatwebsite\Excel\Files\ExcelFile
{
    public function getFile()
    {
        $fileurl = ("/storage/app/public/DB.csv");
        $file = file($fileurl);
        dd($file);
        
        $filename = $file->getPathName();
  

        $raw = Excel::load($file, function($reader) {})->get();
        $headers = $file->first()->first()->keys()->toArray();

        if (in_array("roomid",$headers))
        {
            if (in_array("date",$headers))
            {
                if (in_array("transaction_quantity",$headers))
                {
                   return $filename;
                }
            }
        }
        else
        {
          dd("INVALID HEADERS FOR SECURITY CSV FILE");
          return 0;  
        }    
    }

}
