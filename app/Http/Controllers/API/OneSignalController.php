<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Ladumor\OneSignal\OneSignal;
use App\Http\Controllers\Controller;

class OneSignalController extends Controller
{
    public function sendPushNotification()
    {
        $fields['include_player_ids'] = ['2c544994-17d8-460f-9cc6-20182c9cb6fb', 'f45cd617-164a-46d4-9aa3-35e15701d214'];
        $notificationMsg = 'Attention: Walang Pasok dahil sa bagyo manatiling mag stay sa bahay.';
        $data = OneSignal::sendPush($fields, $notificationMsg);
        return $data;
    }
}
