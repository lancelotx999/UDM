<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class DBEnrollment extends \Maatwebsite\Excel\Files\ExcelFile
{
    public function getFile()
    {
        $file = Input::file('file');
        $filename = $file->getPathName();

        $raw = Excel::load($file, function($reader) {})->get();
        $headers = $raw->first()->first()->keys()->toArray();

        if (in_array("year",$headers))
        {
            if (in_array("semester",$headers))
            {
                if (in_array("computing",$headers))
                {
                    if (in_array("design",$headers))
                    {
                        if (in_array("engineering",$headers))
                        {
                            if (in_array("business",$headers))
                            {
                                return $filename;
                            }
                        }
                    }
                }
            }
        }
        else
        {
          dd("INVALID HEADERS FOR ENROLLMENT CSV FILE");
          return 3;  
        }    
    }

}
