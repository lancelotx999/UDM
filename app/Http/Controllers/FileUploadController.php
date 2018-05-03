<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


class FileUploadController extends Controller implements IReadFilter 
{
	private $startRow = 0;
	private $endRow = 0;

    public function UploadtoServer(Request $request)
    {
    	if ($request->file('file')->isValid())
    	{
  			$request->validate([
    			'file' => 'required|mimes:csv,txt,xlsx'
    		]);
    	}

    	$file = $request->file('file');
        $filepath = $file->getPathName();
        $filename = $file->getClientOriginalName();


		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		$filemime = finfo_file($finfo,$filepath);

		if (($filemime == "text/plain" ) || ($filemime == "text/csv"))
		{
			return $this->readCSV($filepath);
		}
		else if (($filemime == "application/vnd.ms-excel") || ($filemime == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"))
		{
			return $this->readXLSX($filepath);
		}
    }

    public function setRows($startRow, $chunkSize)
    {
        $this->startRow = $startRow;
        $this->endRow = $startRow + $chunkSize;
    }

    public function readCell($column, $row, $worksheetName = '')
    {
        if (($row == 1) || ($row >= $this->startRow && $row < $this->endRow))
        {
            return true;
        }
        return false;
    }

    public function readCSV($filepath)
    {
    	$inputFileType = 'Csv';
    	$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
    	$chunkSize = 100;
    	$chunkFilter = new FileUploadController();
    	$reader->setReadFilter($chunkFilter)->setContiguous(true);

    	$spreadsheet = new Spreadsheet();
    	$sheet = 0;

    	for ($startRow = 2; $startRow <= 240; $startRow += $chunkSize) 
    	{
       		$chunkFilter->setRows($startRow, $chunkSize);

    		$reader->setSheetIndex($sheet);
    		$reader->loadIntoExisting($filepath, $spreadsheet);
    		$spreadsheet->getActiveSheet()->setTitle('Sheet #' . (++$sheet));
		}

		$loadedSheetNames = $spreadsheet->getSheetNames();

		
		foreach ($loadedSheetNames as $sheetIndex => $loadedSheetName) 
		{
    		$spreadsheet->setActiveSheetIndexByName($loadedSheetName);
    		$sheetData = $spreadsheet->getActiveSheet()->toArray(null, false, false, true);

    		if ($sheetIndex == 0)
    		{
    			$headers = array_values($sheetData)[0];
    		}

		}

		if (Schema::hasTable($filepath)) 
    	{
    		dd("swag1");
		}
		else
		{
    		Schema::create($filepath, function (Blueprint $table) use ($headers)
    		{
    			foreach ($headers as $header)
    			{
    				$table->string($header);
    			}
			});
		}

    }

    public function readXLSX($filepath)
    {
    	dd("swag3");
    }


}
 