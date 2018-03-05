<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;

class FileTransferController extends Controller
{
    public function UploadtoServer(Request $request)
    {
        $filepath = $request->file('file');
        $filepath->storeAs('',$filepath->getClientOriginalName());
    }

}
