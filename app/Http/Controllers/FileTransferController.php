<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use Input;

class FileTransferController extends Controller
{
	public static function getFileName(Request $request)
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
				$reader->formatDates(true, 'Y-m-d');

				$reader->each(function($sheet)
				{
					$sheet->each(function($row)
					{
						$dbdata['roomId'] = $row['roomid'];

						$dbdata['date'] = date('Y-m-d',strtotime($row['date']));
						$dbdata['transactionQuantity'] = $row['transaction_quantity'];

						
						DB::table('security')->insert($dbdata);

					});
				});	
			});

	}
	
}
