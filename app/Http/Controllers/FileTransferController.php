<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CSV;
use Storage;


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

	public function fileExtension(Request $request)
	{
		$file = $request->file('file');
		$file_extension = $file->getClientOriginalExtension();

		return $file_extension;
	}

	public function fileName(Request $request)
	{
		$file = $request->file('file');
		$filename = $file->getClientOriginalName();

		return  $filename;
	}

	public function uploadFile(CSV $request)
	{
		return "swag";
	}

	
}
