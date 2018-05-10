<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


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


		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		$filemime = finfo_file($finfo,$filepath);

		if (($filemime == "text/plain" ) || ($filemime == "text/csv"))
		{
			return $this->importCSV($filepath,$filename);
		}

    }

    public function importCSV($filepath, $filename)
    {
    	$chunkSize = 100;

    	$filehandle = fopen($filepath, "r");
    	if ($filehandle === FALSE)
    	{
    		dd("File doesn't exist/ can't be accessed");
    	}

    	//Get Headers
    	fseek($filehandle,0);
    	$headers = (fgetcsv($filehandle));

    	$offset = 0;
    	while(!feof($filehandle))
		{
    		fseek($filehandle, $offset);

    		$i = 0;
    			while (($currRow = fgetcsv($filehandle)) !== FALSE)
    			{
        			$i++; 
        			print implode(', ', $currRow)."\n";
        			if($i >= $chunkSize)
        			{
            			$offset = ftell($filehandle);
            			break;
        			}
    			}
		}

		fclose($filehandle);

    }



}
 