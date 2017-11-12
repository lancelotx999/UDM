<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use Input;
use App\EnrollmentCSV;
use App\SecurityCSV;

class FileTransferController extends Controller
{
	public function getFileName(Request $request)
	{
		$file = $request->file('file');
		$roomID = basename($file->getClientOriginalName(),'.csv');
		return $roomID;
	}


	public function securityDBupdate(Request $request)
	{

	}

	public function uploadFile(Request $request)
	{		
			$file = $request->file('file');
			$roomID = basename($file->getClientOriginalName(),'.csv');

			
			Excel::load($file, function($reader) 
			{
				$reader->each(function($sheet)
				{
					$sheet->each(function($row)
					{
						$dbdata['date'] = $row['date'];
						$dbdata['transaction_quantity'] = $row['transaction_quantity'];

					});
				});	
			});

	}
	
}
