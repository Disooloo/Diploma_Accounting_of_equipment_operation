<?php

namespace App\Http\Livewire;

use App\Models\Gparams;
use Livewire\Component;

class GlobalSettings extends Component
{
    public $general_manager, $city, $img_general_manager, $company_name, $company_adress, $company_INN,
        $company_KPP, $company_chet, $company_bink,  $dop1, $dop2, $link, $phone;

    public $visibility = false;

    public function render()
    {
        $setOny = Gparams::all()->count() >= 1;

        $params = Gparams::all();



        return view('livewire.global-settings', compact('setOny', 'params'));
    }

    public function store()
    {
        $data = $this->validate([
            "general_manager" => "required",
            "city" => "required",
            "img_general_manager" => "required",
            "company_name" => "required",
            "company_adress" => "required",
            "company_INN" => "required",
            "company_KPP" => "required",
            "company_chet" => "required",
            "company_bink" => "required",
            "phone" => "required",
        ]);

        Gparams::create($data);

        return redirect('/global_settings');




    }



}
