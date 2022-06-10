<?php

namespace App\Listeners;

use App\Events\ModelObjectOrderStore;
use App\Helpers\Telegram;
use TelegramBot\Api\Types\Inline\InlineKeyboardMarkup;

class TelegramSubscriber
{

    protected $telegram;

    public function __construct(Telegram $telegram)
    {
        $this->telegram = $telegram;
    }

    /**
     * @param ModelObjectOrderStore $event
     * @return array
     */
//    public function orderStore($event)
//    {
//
//        $data = [
//            'id' => $event->modelObject->id,
//            'teamSent' => $event->modelObject->teamSent,
//            'dateDispatch' => $event->modelObject->dateDispatch,
//            'statusRepair' => $event->modelObject->statusRepair,
//            'sum' => $event->modelObject->sum,
//            'service_organization' => $event->odelObject->service_organization,
//            'secretKey' => $event->modelObject->secretKey,
//            'repairPosition' => $event->modelObject->repairPosition,
//            'title_type' => $event->modelObject->title_type,
//            'title_model' => $event->modelObject->title_model,
//            'title_description' => $event->modelObject->title_description,
//
//        ];
//
//
////        $public = explode('|', $request->input('callback_query')['data'])[0];
////        $secret_key = explode('|', $request->input('callback_query')['data'])[1];
//
//        $testKey = new InlineKeyboardMarkup(
//            [
//                [
//                    [
//                        'callback_data' => '0|' . $event->modelObject->secretKey,
//                        'text' => 'Кнопка 1'
//                    ],
//                    [
//                        'callback_data' => '1|' . $event->modelObject->secretKey,
//                        'text' => 'Кнопка 2'
//                    ]
//                ]
//            ]
//        );
//
//
//        $this->telegram->sendButtons(env('CHAT_TELEGRAM_REPAIR_ID'),
//            (string)view('bots.repaerFormOne', $data), $testKey);
//    }

    /**
     * @param \Illuminate\Events\Dispatcher $events
     * @return array
     */
//    public function Subscriber($events)
//    {
//        $events->listen(
//            ModelObjectOrderStore::class, [
//                TelegramSubscriber::class, 'orderStore'
//            ]
//        );
//    }
}
