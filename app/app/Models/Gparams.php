<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gparams extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ["general_manager", "city", "img_general_manager", "company_name", "company_adress", "company_INN", "company_KPP", "company_chet", "company_bink", "dop1", "dop2", "link"];

}
