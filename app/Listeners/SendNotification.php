<?php

namespace App\Listeners;

use App\Events\TarunaRegister;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log as FacadesLog;
use Log;

class SendNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TarunaRegister $event): void
    {
        $newData = $event->data;

        // Make an HTTP GET request to the desired link
       $response=Http::timeout(2)->get('http://127.0.0.1:8000/admin/webhookNotif');
       if ($response->successful()) {
        FacadesLog::info('Notification request was successful.');
    } else {
        FacadesLog::error('Notification request failed.');
    }
    }
}
