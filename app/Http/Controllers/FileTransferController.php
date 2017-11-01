<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileTransferController extends Controller
{
	public function UploadVerification()
	{
		if (Input::hasFile('file'))
		{
    		echo "Swag";
		}
	}
}
