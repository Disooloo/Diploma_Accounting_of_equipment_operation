<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Exports\LocationsExport;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{
    public function export_location()
    {
        return Excel::download(new LocationsExport, 'invoices.xlsx');
    }
    public function export()
    {
    }

}
