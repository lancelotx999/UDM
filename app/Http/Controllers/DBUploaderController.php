<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use DB;

use App\Http\Requests\DBSecurity;
use App\Http\Requests\DBHeatmap;
use App\Http\Requests\DBClubRecruitment;
use App\Http\Requests\DBEnrollment;


class DBUploaderController extends Controller
{
	public function uploadHeatmap(DBHeatmap $request)
	{		
		$data = $request->get();
		$data->each(function($sheet)
			{
				$sheet->each(function($row)
					{
						$dbdata['roomId'] = $row['roomid'];
						$dbdata['date'] = date('Y-m-d',strtotime(str_replace('/', '-',$row['date'])));
						$dbdata['temperature'] = $row['temperature'];

						DB::table('heatmap')->insert($dbdata);

					});
			});
		Storage::delete($data);
	}

	public function uploadSecurity(DBSecurity $request)
	{
		$data = $request->get();
		$data->each(function($sheet)
			{
				$sheet->each(function($row)
					{
						$dbdata['roomId'] = $row['roomid'];
						$dbdata['date'] = date('Y-m-d',strtotime(str_replace('/', '-',$row['date'])));
						$dbdata['transactionQuantity'] = $row['transaction_quantity'];

						DB::table('security')->insert($dbdata);

					});
			});

			Storage::delete($data);
	}

	public function uploadClubRecruitment(DBClubRecruitment $request)
	{
		$data = $request->get();
		$data->each(function($sheet)
			{
				$sheet->each(function($row)
					{
						$dbdata['year'] = $row['year'];
						$dbdata['semester'] = $row['semester'];
						$dbdata['clubName'] = $row['clubname'];
						$dbdata['numberOfMembers'] = $row['number_of_members'];

						DB::table('clubRecruitment')->insert($dbdata);

					});
			});

			Storage::delete($data);	
	}

	public function uploadEnrollment(DBEnrollment $request)
	{
		$data = $request->get();
		$data->each(function($sheet)
			{
				$sheet->each(function($row)
					{
						$dbdata['year'] = $row['year'];
						$dbdata['semester'] = $row['semester'];
						$dbdata['computing'] = $row['computing'];
						$dbdata['design'] = $row['design'];
						$dbdata['engineering'] = $row['engineering'];
						$dbdata['business'] = $row['business'];

						DB::table('enrollment')->insert($dbdata);

					});
			});

		Storage::delete($data);	
	}
	
}
