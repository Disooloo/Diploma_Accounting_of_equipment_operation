<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stats;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function statusStore(Request $request)
    {
        $stats = new Stats();
        $stats->title = $request->title;
        $stats->description = $request->description;
        $stats->save();
        return redirect('/status');
    }

}
