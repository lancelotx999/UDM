<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use Input;

class FileTransferController extends Controller
{

	public function uploadFile(Request $request)
	{		
			$file = $request->file('file');
			
			Excel::load($file, function($reader) 
			{
				$reader->each(function($sheet)
				{
					$sheet->each(function($row)
					{
						$dbdata['roomId'] = $row['roomid'];
						$dbdata['date'] = date('Y-m-d',strtotime(str_replace('/', '-',$row['date'])));
						$dbdata['transactionQuantity'] = $row['transaction_quantity'];

						DB::table('security')->insert($dbdata);

					});
				});	
			});

	}
	
}
