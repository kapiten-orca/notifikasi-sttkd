<?php

namespace App\Http\Controllers;

use App\Events\TarunaRegister;
use App\Listeners\SendNotification;
use App\Models\dataDumy;
use App\Models\PushSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Http;
use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;

class NotifController extends Controller
{
    function admin(){
        $dataSubs = PushSubscription::all();
        return view('notify', [
            'subscriptions' => PushSubscription::all()
        ]);
    }

    function notif(PushSubscription $sub, Request $request){
        $this->sendNotif($sub->data, $request->input());
    }
    function sendNotif($sub, $dataNotif){
        $webPush = new WebPush([
            "VAPID" => [
                "publicKey" => "BC5zel9JoqeOY2yVTJjDhiE1IisJTVHq-_p4rxC3zd60gQSqXzra_7_m7B12axwI42tZIUXYGXhIJ-t5MolKjNY",
                "privateKey" => "YpOYF6OwLXH8PDW24E4Eu_kk7uOuSyApvC0NJhYNwa4",
                "subject" => "http://127.0.0.1"
            ]
        ]);
        
        
        echo json_encode($dataNotif);
        
        $result = $webPush->sendOneNotification(
            Subscription::create(json_decode($sub ,true)),
            json_encode($dataNotif)
        );
    }
  
    public function storeDumy(Request $request){

        $data = [
            'nim'=> $request->nim,
            'nama'=> $request->nama,
        ];
        $dataModel = dataDumy::create($data);

        // $event=(new TarunaRegister($dataModel));
        // event($event);
        return view('data-dumy',['data' => $dataModel]);
    }

    function webhook() {
        // run trigger to send notif to all subscribers
        $dataSubs = PushSubscription::all();

        // TODO: get data from query sql
        $totalDaftarApi = Http::post('https://api.sttkd.ac.id/ptb/stats/', [
            'Token' => '1WCauSysRTroh0roH42Wprr9b9ssaTZGYVWyu6k7vcg',
            'Request' => 'pendaftaran'
        ]);
        $totalHeregApi = Http::post('https://api.sttkd.ac.id/ptb/stats/', [
            'Token' => '1WCauSysRTroh0roH42Wprr9b9ssaTZGYVWyu6k7vcg',
            'Request' => 'hereg'
        ]);
        $totalSppApi = Http::post('https://api.sttkd.ac.id/ptb/stats/', [
            'Token' => '1WCauSysRTroh0roH42Wprr9b9ssaTZGYVWyu6k7vcg',
            'Request' => 'spp'
        ]);
        
        
        $totalDaftar = $totalDaftarApi->json();
        $totalHereg = $totalHeregApi->json();
        $totalSPP = $totalSppApi->json();

        $totalDaftarString = json_encode($totalDaftar);
        $totalHeregString = json_encode($totalHereg);
        $totalSPPString = json_encode($totalSPP);

        $totalPendaftar =json_decode($totalDaftarString,true)['message']['jumlah']; 
        $totalHeregristasi =json_decode($totalHeregString,true)['message']['total']; 
        $totalSpp =json_decode($totalSPPString,true)['message']['jumlah_uang_masuk']; 
       
    // prepare data notif
        $dataNotif = [];
        $dataNotif["title"] = "NOTIF PTB";
        $dataNotif["body"] = "Total Taruna Daftar : " .  $totalPendaftar . "\n" . "Total Taruna Bayar Heregistrasi : " . $totalHeregristasi . "\n" . "Total Taruna Bayar SPP : " .  $totalSpp . "\n";
        $dataNotif["url"] = "https://ptb.sttkd.ac.id";
        $dataNotif["_token"] = csrf_token();

    // loop through all subscribers and send notifications
         foreach ($dataSubs as $sub) {
             $this->sendNotif($sub->data, $dataNotif);
         }
         echo "send";
    return redirect('/');
    }

    public function destroy(){
        DB::table('push_subscriptions')->where('created_at', '>', '2023-01-01 10:53:05')->delete();
        return redirect('/');
    }

}

//menghitung jumlah pendaftar


