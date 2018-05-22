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
  			$request->validate([
    			'file' => 'required|mimes:csv,txt,xlsx'
    		]);
    	}

    	$file = $request->file('file');
        $filepath = $file->getPathName();
        $filename = $file->getClientOriginalName();
        $filename = basename($filename, '.csv');

		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		$filemime = finfo_file($finfo,$filepath);

		if (($filemime == "text/plain" ) || ($filemime == "text/csv"))
		{
			return $this->importCSV($filepath,$filename);
		}
		else
		{
			dd("INVALID FILE FORMAT");
		}

    }

    public function importCSV($filepath, $filename)
    {
        $chunkSize = 100;
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
}
 