<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;


class FileTransferController extends Controller
{
	public function UploadVerification(Request $request)
	{
		$file = $request->file('file');
		$filename = $file->getClientOriginalName();
		echo $filename;
	}
}
