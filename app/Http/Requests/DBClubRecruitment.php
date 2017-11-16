<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class DBClubRecruitment extends \Maatwebsite\Excel\Files\ExcelFile
{
    public function getFile()
    {
        $filename = storage_path("app/DB.csv");
        $raw = Excel::load($filename, function($reader) {})->get();
        $headers = $raw->first()->first()->keys()->toArray();

        if (in_array("year",$headers))
        {
            if (in_array("semester",$headers))
            {
                if (in_array("club_name",$headers))
                {
                    if (in_array("number_of_members",$headers))
                    {
                        return $filename;
                    }
                }
            }
        }
        else
        {
          dd("INVALID HEADERS FOR CLUB RECRUITMENT CSV FILE");
          return 2;  
        }    
    }

}
