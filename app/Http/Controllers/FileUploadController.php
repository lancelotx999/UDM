<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
	private $file;
	private $fileext;

    public function UploadtoServer(Request $request)
    {
    	dd($request->file->getClientMimeType());
        
        $this->validate($request,[

    		'file' => 'required|mimes:json,geojson'

    	]);

        $this->file = $request->file('file');
        $this->file->storeAs('',$this->file->getClientOriginalName());
    }

    public function ExtensionValidation(Request $request)
    {
    	$ValidatedExtension = $request->validate([

    		'file' => 'mimetypes:application/geo+json,application/json,text/csv,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel'

    	]);
    }


}
