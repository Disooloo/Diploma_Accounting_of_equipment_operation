<?php

namespace App\Http\Controllers;

use App\Models\ModelObject;
use App\Models\notification;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

//        $model_online_count = DB::table('model_objects')->where('В работе')->value('title_status');

//         = DB::table('model_objects')->where('title_status', '')->count();

//        $user = DB::table('model_objects')
//            ->select('В работе', 'title_status')
//            ->count();

        $model_stats_job = ModelObject::where('title_status','LIKE',  '%В работе%')->count();
        $model_stats_warehouse = ModelObject::where('title_status','LIKE',  '%На складе%')->count();



        $model_count = ModelObject::all()->count();

        return view('admin.index', compact('notifications', 'notifications_count',
            'team_count', 'teams', 'model_count', 'model_stats_job', 'model_stats_warehouse'));

    }
}
