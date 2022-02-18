<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gparams;
use App\Models\notification;
use App\Models\Team;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $notifications = notification::orderBy('id', 'desc');
        $notifications_count = notification::all()->count();

        $teams = Team::orderBy('id', 'desc')->paginate(8);
        $team_count = Team::all()->count();

        return view('admin.index', compact('notifications', 'notifications_count',
            'team_count', 'teams'));
    }
    public function my_profiles()
    {

        $notifications = notification::orderBy('id', 'desc');
        $notifications_count = notification::all()->count();


        return view('admin.index', compact('notifications',
            'notifications_count',));
    }
    public function comp()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('admin.company.index', compact('notifications', 'notifications_count'));
    }
    public function organizations()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('admin.organizations.index' , compact('notifications', 'notifications_count'));
    }

    public function dop1team(Request $request, Team $team)
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();
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
        $team->Avatar = $request->Avatar;


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
    public function local()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('admin.location.index', compact('notifications', 'notifications_count'));
    }
    public function stats()
    {
        return view('admin.stats.index');
    }
    public function view_object()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('admin.view_objects.index', compact('notifications', 'notifications_count'));
    }
    public function type_object()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();


        return view('admin.type_objects.index', compact('notifications', 'notifications_count'));
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
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();
        return view('admin.objectMain.index', compact('notifications', 'notifications_count'));
    }
    public function workTime_update()
    {

    }
    public function crm()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();
        return view('admin.crm.index', compact('notifications', 'notifications_count'));
    }
    public function movements()
    {
        return view('admin.movements.index');
    }
    public function global_settings()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        $params = Gparams::orderBy('created_at', 'DESC')->paginate(1);

        return view('admin.global_set.index', compact('params', 'notifications', 'notifications_count'));
    }

    public function notification_full()
    {
        $notifications = notification::orderBy('id', 'desc')->paginate(30);
        $notifications_count = notification::all()->count();
        return view('admin.notificationFC.index', compact('notifications', 'notifications_count'));
    }

    public function notification_destroy($id)
    {
        $notifications = notification::findOrFail($id);
        $notifications->delete();
        return redirect()->back();
    }

    public function tesst123123()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('test', compact('notifications', 'notifications_count'));

    }




}
