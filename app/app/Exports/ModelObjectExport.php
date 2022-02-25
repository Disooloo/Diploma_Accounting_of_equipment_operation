<?php

namespace App\Exports;

use App\Models\ModelObject;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ModelObjectExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.model_object', [
            'models' => ModelObject::all()
        ]);
    }
}
