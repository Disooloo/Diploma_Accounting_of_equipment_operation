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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function dop1team(Request $request, Team $team)
    {
        $team->dop1_id = $request->dop1_id;
        $team->update();

        return view('admin.team.show', compact('team'));
    }
    public function teamSettings(Request $request, Team $team)
    {
        $team->FirstName = $request->FirstName;
        $team->LastName = $request->LastName;
        $team->Patronymic = $request->Patronymic;
        $team->email = $request->email;
        $team->Skill = $request->Skill;
        $team->Education = $request->Education;
        $team->Description = $request->Description;
        $team->update();

        return view('admin.team.show', compact('team'));
    }


    public function team_test(Request $request, Team $team)
    {

        $res = Team::create(['FirstName' => $request->FirstName, 'LastName' => $request->LastName, 'Patronymic' => $request->Patronymic, 'email' => $request->email, 'Skill' => $request->Skill, 'Education' => $request->Education, 'Description' => $request->Description]);



        $data = ['FirstName' => $request->FirstName, 'LastName' => $request->LastName, 'Patronymic' => $request->Patronymic, 'email' => $request->email, 'Skill' => $request->Skill, 'Education' => $request->Education, 'Description' => $request->Description];

        return $data;


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
