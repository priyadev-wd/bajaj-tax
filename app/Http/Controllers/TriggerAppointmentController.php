<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;  // You can use Laravel's HTTP client or Guzzle directly
use GuzzleHttp\Client;
use App\Models\GoogleToken;
use App\Models\GoogleCalenderEvent;
use Illuminate\Support\Facades\File;
use DateTime;
use DateTimeZone;
class TriggerAppointmentController extends Controller
{
    public function triggerAppointmentUpdate(Request $request)
    {
        \Log::info("Received Data");
        \Log::info(json_encode($request->all(), true));
    }

}
