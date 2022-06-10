<?php

namespace App\Http\Controllers\Admin;

use App\Events\ModelObjectOrderStore;
use App\Helpers\Telegram;
use App\Http\Controllers\Controller;
use App\Models\ModelObject;
use App\Models\notification;
use App\Models\Oganizations;
use Illuminate\Http\Request;


use TelegramBot\Api\Client;

// подключение библиотеки Telegram API
use TelegramBot\Api\Types\ReplyKeyboardMarkup;

// использование ReplyKeyboardMarkup (основное меню)
use TelegramBot\Api\Types\Inline\InlineKeyboardMarkup;

// использование InlineKeyboardMarkup (кнопки под сообщением)


class ModelObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = notification::orderBy('id', 'desc');
        $notifications_count = notification::all()->count();

        $modelObject = ModelObject::all();
//        $bot = new \TelegramBot\Api\Client(config('bots.botTelegramRepair'));
//
//        $key = 'asdasdsdfd432';
//
//
//
//        $testKey = new InlineKeyboardMarkup(
//            [
//                [
//                    [
//                        'callback_data' => '1|'.$key,
//                        'text' => 'Тестовая кнопка'
//                    ]
//                ]
//            ]
//        );
//
//        $bot->sendMessage(env('CHAT_TELEGRAM_REPAIR_ID'),'200' , 'html',
//            null, null, $testKey);

        return view('admin.model_object.index', compact('notifications',
            'notifications_count', 'modelObject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $mObject = new \App\Models\ModelObject();

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

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(ModelObject $modelObject)
    {
        $notifications = notification::orderBy('id', 'desc');
        $notifications_count = notification::all()->count();

        $oganizations = Oganizations::all();
        return view('admin.model_object.repairForm', compact('modelObject',
            'oganizations', 'notifications', 'notifications_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelObject $modelObject)
    {
        $key = base64_encode(md5(uniqid()));

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
        $modelObject->sum = $request->sum;
        $modelObject->service_organization = $request->service_organization;
        $modelObject->repairPosition = 0;
        $modelObject->secretKey = $key;
        $modelObject->save();
//
        $data = [
            'id' => $modelObject->id,
            'teamSent' => $modelObject->teamSent,
            'dateDispatch' => $modelObject->dateDispatch,
            'statusRepair' => $modelObject->statusRepair,
            'sum' => $modelObject->sum,
            'service_organization' => $modelObject->service_organization,
            'secretKey' => $modelObject->secretKey,
            'repairPosition' => $modelObject->repairPosition,
            'title_type' => $modelObject->title_type,
            'title_model' => $modelObject->title_model,
            'title_description' => $modelObject->title_description,

        ];

        $_id = $modelObject->id;



        $bot = new \TelegramBot\Api\BotApi(config('bots.botTelegramRepair'));

        $keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup(
            [
                [
                    ['text' => 'link', 'url' => 'https://core.telegram.org']
                ]
            ]
        );

        $url = "http://127.0.0.1:8000/api/model_repair/";


        $reply_markup = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup(
            [
                [
                    [
                        'text' => 'Принять',
                        'url' => $url.$_id
                    ],
                    [
                        'text' => 'Отклонить',
                        'url' => $url.$_id
                    ]
                ]

            ]
        );


//        $testKey = new InlineKeyboardMarkup(
//            [
//                [
//                    [
//                        'callback_data' => '0|'.$secret_key,
//                        'text' => 'Прянять'
//                    ],
//                    [
//                        'callback_data' => '1|'.$secret_key,
//                        'text' => 'Отклонить'
//                    ]
//                ]
//            ]
//        );


        $bot->sendMessage(env('CHAT_TELEGRAM_REPAIR_ID'), (string)view('bots.repaerFormOne', $data), 'html',
            null, null, $reply_markup);
//
//        event(new ModelObjectOrderStore($modelObject));
//
        return response()->redirectTo('model-object');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return null;
    }

}
