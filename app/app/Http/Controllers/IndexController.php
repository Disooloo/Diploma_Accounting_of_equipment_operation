<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
    public function team()
    {
        return view('admin.team.index');
    }
    public function team1()
    {
        return view('admin.team.show');
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


}
