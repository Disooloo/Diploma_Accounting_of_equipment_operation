<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gparams;
use App\Models\Mons;
use App\Models\notification;
use App\Models\Team;
use App\Models\WorkTime;
use Illuminate\Http\Request;

class WorkTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = notification::orderBy('id', 'desc')->paginate(30);
        $notifications_count = notification::all()->count();

        $wTime = WorkTime::orderBy('created_at', 'DESC')->paginate(15);

        $mon = Mons::orderBy('created_at', 'DESC')->paginate(12);

        $team = Team::orderBy('created_at', 'DESC')->paginate(12);
        $gparams = Gparams::all();


        return view('admin.workTime.index', compact('wTime', 'gparams','team', 'mon', 'notifications', 'notifications_count'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wTime = new WorkTime();

        $wTime->name_team = $request->name_team;
        $wTime->dop1 = $request->dop1;
        $wTime->general_manager = $request->general_manager;
        $wTime->save();

        return redirect('/work_time');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notifications = notification::orderBy('id', 'desc')->paginate(30);
        $notifications_count = notification::all()->count();

        $wTime = WorkTime::orderBy('created_at', 'DESC')->paginate(15);

        $mon = Mons::orderBy('created_at', 'DESC')->paginate(12);
        $team = Team::orderBy('created_at', 'DESC')->paginate(15);
        $gparams = Gparams::all();


        return view('admin.workTime.update', compact('wTime', 'gparams','team',
            'mon', 'notifications', 'notifications_count'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
