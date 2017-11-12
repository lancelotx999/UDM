<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FileTransferController extends Controller
{
	public function fileExists(Request $request)
	{
		if ($request->hasFile('file'))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function uploadFile(Request $request)
	{
		$file = $request->file('file');
		$results = Excel::load($file , function($reader) {})->get()->toArray();
		$results = array_filter($results);
		dd($results);

		foreach ($results as $sheet)
		{
			foreach ($sheet as $row)
			{
				
			}
		}

	}
	
}
