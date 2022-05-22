<?php

namespace App\Http\Controllers;

use App\Helpers\Telegram;
use App\Http\Controllers\Controller;
use App\Models\Gparams;
use App\Models\ModelObject;
use App\Models\notification;
use App\Models\Team;
use App\Models\tobject;
use App\Models\vobject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function test()
    {

        return view('admin.test');
    }

    public function index()
    {

        $notifications = notification::orderBy('id', 'desc');
        $notifications_count = notification::all()->count();

        $teams = Team::orderBy('id', 'desc')->paginate(15);
        $team_count = "asd";


        return view('admin.index', compact('notifications', 'notifications_count',
            'team_count', 'teams'));
    }


    public function mode_object()
    {
        $notifications = notification::orderBy('id', 'desc');
        $notifications_count = notification::all()->count();

        return view('admin.model_object.index', compact('notifications',
        'notifications_count'));
    }

    public function mode_object_create(Request $request)
    {
        $mObject = new ModelObject();

        $mObject->title_view = $request->title_view;
        $mObject->title_type = $request->title_type;
        $mObject->title_teams = $request->title_teams;
        $mObject->title_model = $request->title_model;
        $mObject->object_img = $request->object_img;
        $mObject->title_description = $request->title_description;
        $mObject->title_company = $request->title_company;
        $mObject->title_branch = $request->title_branch;
        $mObject->title_status = $request->title_status;
        $mObject->number_system = $request->number_system;
        $mObject->number_individual = $request->number_individual;
        $mObject->number_individual_bix = $request->number_individual_bix;
        $mObject->number_parties = $request->number_parties;
        $mObject->title_spawn = $request->title_spawn;
        $mObject->code_product = $request->code_product;
        $mObject->code_activation = $request->code_activation;
        $mObject->number_Quantity = $request->number_Quantity;
        $mObject->money_cost = $request->money_cost;
        $mObject->money_sum = $request->money_sum;
        $mObject->title_seller = $request->title_seller;
        $mObject->service_organization = $request->service_organization;
        $mObject->data_inventory = $request->data_inventory;
        $mObject->data_inventory = $request->data_inventory;
        $mObject->warranty_do = $request->warranty_do;
        $mObject->license_do = $request->license_do;
        $mObject->title_wrote = $request->title_wrote;
        $mObject->id_order = $request->id_order;
        $mObject->title_domain = $request->title_domain;
        $mObject->system_name = $request->system_name;
        $mObject->ip_address = $request->ip_address;
        $mObject->MAC_address = $request->MAC_address;


//        $mObject->dateBreakdown = 'test';
//        $mObject->dateDispatch = 'test';
//        $mObject->dateReceipt = 'test';
//        $mObject->statusRepair = 'test';
//        $mObject->noteRepair = 'test';
//        $mObject->sum = 'test';
//        $mObject->servesOrganization = 'test';
//        $mObject->teamCreate = 'test';
//        $mObject->teamSent = 'test';
//        $mObject->teamReceived ='test';
//        $mObject->repairPosition = 'test';
//        $mObject->secretKey = 'test';


        $mObject->save();
        return redirect('/model-object');
    }

    public function modelObjectFormRepairEdit(ModelObject $modelObject)
    {

        dd($modelObject);
        return view('admin.model_object.repairForm', compact('modelObject'));

    }

    public function modelObjectFormRepair(ModelObject $modelObject, Request $request, Telegram $telegram)
    {
        $key = base64_encode(md5(uniqid()));


        dd($modelObject->id);
//
//        $modelObject->title_view = "asdasd";
//        $modelObject->title_type = "asdasd";
//        $modelObject->title_teams = "asdasd";
//        $modelObject->title_model = "asdasd";
//        $modelObject->object_img = "asdasd";
//        $modelObject->title_description ="asdasd";
//        $modelObject->title_company = "asdasd";
//        $modelObject->title_branch = "asdasd";
//        $modelObject->title_status = "asdasd";
//
//
//
//        $modelObject->number_system = '123123';
//        $modelObject->number_individual = '123123';
//        $modelObject->number_individual_bix = '123123';
//        $modelObject->number_parties = '123123';
//        $modelObject->title_spawn = '123123';
//        $modelObject->code_product = '123123';
//        $modelObject->code_activation = '123123';
//        $modelObject->number_Quantity = '123123';
//        $modelObject->money_cost = '123123';
//        $modelObject->money_sum = '123123';
//        $modelObject->title_seller = '123123';
//        $modelObject->service_organization = '123123';
//        $modelObject->data_inventory = "2022-05-22";
//        $modelObject->warranty_do = '2022-05-22';
//        $modelObject->license_do = '2022-05-22';
//        $modelObject->title_wrote = '123123';
//        $modelObject->id_order = '123123';
//        $modelObject->title_domain = '123123';
//        $modelObject->system_name = '123123';
//        $modelObject->ip_address = '123123';
//        $modelObject->MAC_address = '123123';
//
//



        $modelObject->teamSent = $request->teamSent;
        $modelObject->dateBreakdown = $request->dateBreakdown;
        $modelObject->dateDispatch = $request->dateDispatch;
        $modelObject->statusRepair = $request->statusRepair;
        $modelObject->statusRepair = $request->statusRepair;
        $modelObject->sum = $request->sum;
        $modelObject->service_organization = $request->service_organization;
        $modelObject->repairPosition = 1;
        $modelObject->secretKey = $key;
        $modelObject->save();

        $data = [
            'id' => $modelObject->id,
            'teamSent' => $modelObject->teamSent,
            'dateDispatch' => $modelObject->dateDispatch,
            'statusRepair' => $modelObject->statusRepair,
            'sum' => $modelObject->sum,
            'service_organization' => $modelObject->service_organization,
            'secretKey' => $modelObject->secretKey,
            'repairPosition' => $modelObject->repairPosition,

        ];

        $reply_markup = [
            'inline_keyboard' =>
            [
                [
                    [
                        'test' => 'Принять',
                        'callback_data' => '1|'.$key
                    ],
                    [
                        'test' => 'Отклонить',
                        'callback_data' => '2|'.$key
                    ]
                ]
            ]
        ];

        $telegram->sendMessage(env('CHAT_TELEGRAM_REPAIR_ID'), (string)view('bots.repaerFormOne', $data), $reply_markup );
    }


    public function my_profiles()
    {
//
//        $notifications = notification::orderBy('id', 'desc');
//        $notifications_count = notification::all()->count();
//
//
//        return view('admin.index', compact('notifications',
//            'notifications_count'));
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

        return view('admin.team.show', compact('team', 'notifications_count', 'notifications'));
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
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();
        return view('admin.news.index', compact('notifications', 'notifications_count'));
    }
    public function local()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('admin.location.index', compact('notifications', 'notifications_count'));
    }
//    public function stats()
//    {
//        return view('admin.stats.index');
//    }
    public function view_object()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('admin.view_objects.index', compact('notifications', 'notifications_count'));
    }
    public function type_object($CatId = 0)
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        $t_obj = tobject::latest();
        $t_obj_view = vobject::get();


        return view('admin.type_objects.index',[
            't_obj' => $t_obj->get(),
            'v_obj' => $t_obj_view,
            'CatId' => $CatId,

            'notifications' => $notifications,
            'notifications_count' => $notifications_count
        ]);

    }




    public function type_work()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('admin.type_work.index', compact('notifications', 'notifications_count'));
    }
    public function full_user_adm()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();
        return view('admin.full_user_adm.index', compact('notifications', 'notifications_count'));
    }
    public function history()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('admin.history.index', compact('notifications', 'notifications_count '));
    }
    public function repair()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();
        return view('admin.repair.index', compact('notifications', 'notifications_count'));
    }
    public function objectMain()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();
        return view('admin.objectMain.index', compact('notifications', 'notifications_count'));
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

        return view('admin.global_set.index', compact('params', 'notifications',
            'notifications_count'));
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


    public function NotFind()
    {
        return view('admin.404');
    }

    public function BlockedLogin()
    {
        return view('admin.403');
    }



}
