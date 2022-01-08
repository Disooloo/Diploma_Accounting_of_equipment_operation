<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function comp()
    {
        return view('admin.company.index');
    }
    public function org()
    {
        return view('admin.organizations.index');
    }



    public function team1(Request $request, Team $team)
    {
        $team->dop1_id = $request->dop1_id;
        $team->save();

        return view('admin.team.show', compact('team'));
    }
    public function news()
    {
        return view('admin.news.index');
    }
    public function branches()
    {
        return view('admin.branches.index');
    }
    public function local()
    {
        return view('admin.location.index');
    }
    public function stats()
    {
        return view('admin.stats.index');
    }
    public function view_object()
    {
        return view('admin.view_objects.index');
    }
    public function type_object()
    {
        return view('admin.type_objects.index');
    }
    public function model_object()
    {
        return view('admin.model_object.index');
    }
    public function type_work()
    {
        return view('admin.type_work.index');
    }
    public function full_user_adm()
    {
        return view('admin.full_user_adm.index');
    }
    public function history()
    {
        return view('admin.history.index');
    }
    public function repair()
    {
        return view('admin.repair.index');
    }
    public function objectMain()
    {
        return view('admin.objectMain.index');
    }
    public function workTime()
    {
        return view('admin.workTime.index');
    }
    public function crm()
    {
        return view('admin.crm.index');
    }
    public function movements()
    {
        return view('admin.movements.index');
    }


}
