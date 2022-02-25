<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ModelObjectExport;
use App\Http\Controllers\Controller;
use App\Exports\LocationsExport;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{
    public function export_location()
    {
        return Excel::download(new LocationsExport, 'invoices.xlsx');
    }

    public function model_object()
    {
        return Excel::download(new ModelObjectExport(), 'model_object.xlsx');
    }

    public function export()
    {
    }

}
