<?php

namespace App\Exports;


use App\Models\Location;
//use Maatwebsite\Excel\Concerns\FromCollection;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LocationsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.location', [
            'location' => Location::all()
        ]);
    }
}
