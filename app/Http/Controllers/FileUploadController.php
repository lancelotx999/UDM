<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class FileUploadController extends Controller 
{
    public function UploadtoServer(Request $request)
    {
    	if ($request->file('file')->isValid())
    	{
	    	$file = $request->file('file');
	        $filepath = $file->getPathName();
	        $filename = $file->getClientOriginalName();

	        $fileinfo = pathinfo($filename);
	        $fileext = $fileinfo['extension'];
	        
			if ($fileext == "csv")
			{
				$filename = basename($filename, ".csv");
				return $this->importCSV($filepath,$filename);
			}
			else if ($fileext = "geojson")
			{
				$filename = basename($filename, ".geojson");
				return $this->importGEOJSON($filepath,$filename);
			}
			else
			{
				dd("INVALID FILE FORMAT");
			}
    	}
    	else
    	{
    		dd("INVALID FILE");
    	}


    }

    public function importCSV($filepath, $filename)
    {
        Schema::dropIfExists($filename);

    	$filehandle = fopen($filepath, "r");
    	if ($filehandle === FALSE)
    	{
    		dd("File doesn't exist/ can't be accessed");
    	}
    	
    	//Get Headers
    	fseek($filehandle,0);
    	$headers = (fgetcsv($filehandle));

        foreach ($headers as $header)
        {
            $header = str_replace(' ', '', $header);
        }
        $headers = array_map('trim',$headers);


    	// Use headers to create a table
    	Schema::create($filename, function (Blueprint $table) use ($headers)
    	{
            foreach ($headers as $header)
            {
                $table->string($header)->nullable();
            }
		});

		while(!feof($filehandle))
		{
    		if (($currRow = fgetcsv($filehandle)) !== FALSE)
    		{
    			$data = array_combine($headers, $currRow);
    			DB::table($filename)->insert($data);
    		}
		}

		fclose($filehandle);
        return view('dbManager/UploadDB');
    }

    public function importGEOJSON($filepath, $filename)
    {
    	Schema::dropIfExists($filename);

    	$data = file_get_contents($filepath);

    	$decoded = json_decode($data,true);
    	dd($decoded);
    }
}
 