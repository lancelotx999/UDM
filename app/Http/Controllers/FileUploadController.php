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
    		$file = $request->file('file');
            $filepath = $file->getPathName();

  			$request->validate([
    			'file' => 'required|mimes:csv,txt,xlsx'
    		]);

            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filepath);
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            dd($sheetData);

        //    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        //    $spreadsheet = $reader->load($file);



    		
    	} 	
    }

}
 