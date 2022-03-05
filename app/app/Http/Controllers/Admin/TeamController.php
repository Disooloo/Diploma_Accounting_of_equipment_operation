<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\notification;
use App\Models\Team;
use Illuminate\Http\Request;


class TeamController extends Controller
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

        $teams = Team::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.team.index', compact('teams', 'notifications', 'notifications_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notifications = notification::orderBy('id', 'desc')->paginate(30);
        $notifications_count = notification::all()->count();

        $teams = Team::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.team.create', compact('teams', 'notifications', 'notifications_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teams = new Team();
        $teams->FirstName = $request->FirstName;
        $teams->LastName = $request->LastName;
        $teams->Patronymic = $request->Patronymic;
        $teams->Post = $request->Post;
        $teams->Description = $request->Description;
        $teams->Adress = $request->Adress;
        $teams->phone = $request->phone;
        $teams->ServeseNumber = $request->ServeseNumber;
        $teams->Department = $request->Department;
        $teams->Company = $request->Company;
        $teams->Branch = $request->Branch;
        $teams->Education = $request->Education;
        $teams->Skill = $request->Skill;
        $teams->email = $request->email;
        $teams->save();
        return redirect('/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $notifications = notification::orderBy('id', 'desc')->paginate(30);
        $notifications_count = notification::all()->count();

        return view('admin.team.show', compact(
            'team',
            'notifications',
            'notifications_count'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->Dismissed_team = $request->Dismissed_team;
        $team->Dismissed = $request->Dismissed;

        $team->update();

        return view('admin.team.show', compact('team'));
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
