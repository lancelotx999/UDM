<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;


class FileTransferController extends Controller
{
	public function UploadVerification(Request $request)
	{
		dd($request->get("file"));
	}
}
