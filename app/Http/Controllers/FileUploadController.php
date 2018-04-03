<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;

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

		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		$filemime = finfo_file($finfo,$filepath);

		//dd($filemime);

		if (($filemime == "text/plain" ) || ($filemime == "text/csv"))
		{
			return $this->readCSV($filepath);
		}
		else if (($filemime == "application/vnd.ms-excel") || ($filemime == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"))
		{
			return $this->readXLSX($filepath);
		}


        
       // $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filepath);
       // $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    }

    public function readCSV($filepath)
    {
    	$inputFileType = 'Csv';
    	$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);

    	$spreadsheet = $reader->load($filepath);
    	dd($spreadsheet);


    }

    public function readXLSX($filepath)
    {
    	dd("swag3");
    }

}
 