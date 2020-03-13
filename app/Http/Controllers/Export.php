<?php

namespace App\Http\Controllers;

use App\Exports\CsvExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class Export extends Controller
{
    public function csv_export()
    {

        return Excel::download(new CsvExport, 'sample.csv');
    }
}
