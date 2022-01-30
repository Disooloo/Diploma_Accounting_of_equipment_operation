<?php

namespace App\Http\Controllers;

use App\Models\notification;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notifications = notification::orderBy('id', 'desc');
        $notifications_count = notification::all()->count();

        $teams = Team::orderBy('id', 'desc')->paginate(8);
        $team_count = Team::all()->count();

        return view('admin.index', compact('notifications', 'notifications_count',
            'team_count', 'teams'));

    }
}
