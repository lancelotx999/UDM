<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;

class FileTransferController extends Controller
{
	public function UploadtoDB(Request $request)
	{
        $file = $request->file('file');
        Storage::putFileAs('DB.csv', $request->file('file'),'');

		$file = $request->file('file');
		$raw = Excel::load($file, function($reader) {})->get();
		$headers = $raw->first()->first()->keys()->toArray();


		if (in_array("roomid",$headers))
        {
            if (in_array("date",$headers))
            {
                if (in_array("transaction_quantity",$headers))
                {
                    return redirect()->action('DBUploaderController@uploadSecurity');
                }
            }
        }
        if (in_array("roomid",$headers))
        {
            if (in_array("date",$headers))
            {
                if (in_array("temperature",$headers))
                {
                    return redirect()->action('DBUploaderController@uploadHeatmap');
                }
            }
        }
        if (in_array("year",$headers))
        {
            if (in_array("semester",$headers))
            {
                if (in_array("club_name",$headers))
                {
                    if (in_array("number_of_members",$headers))
                    {
                        return redirect()->action('DBUploaderController@uploadClubRecruitment');
                    }
                }
            }
        }
        if (in_array("year",$headers))
        {
            if (in_array("semester",$headers))
            {
                if (in_array("computing",$headers))
                {
                    if (in_array("design",$headers))
                    {
                        if (in_array("engineering",$headers))
                        {
                            if (in_array("business",$headers))
                            {
                                return redirect()->action('DBUploaderController@uploadEnrollment');
                            }
                        }
                    }
                }
            }
        }
        else
        {
        	dd("FILE DOES NOT MATCH EXISTING TABLES");
        }

	}
}
