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
}
