<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditorController extends Controller
{
    public function saveFile (Request $request) 
    {
    	try 
    	{
            if ($request->ajax()) 
            {
        		Storage::disk('local')->put('data.geojson', $request);
	        }
        } 
        catch (Exception $e) 
        {
            return ['error' => true, 'message' => $e->getMessage()];
        }
    }
}
