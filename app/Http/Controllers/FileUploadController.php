<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function UploadtoServer(Request $request)
    {
    	if ($request->file('file')->isValid())
    	{
    		$file = $request->file('file');
  			$mime = $file->getClientMimeType();

  			$request->validate([
    			'file' => 'required|mimes:csv,txt,geojson,json,xls,xlsx'
    		]);

    		$file->storeAs('',$file->getClientOriginalName());
    	} 	
    }

}
 