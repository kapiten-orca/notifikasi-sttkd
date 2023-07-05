<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\NotifController;
use App\Models\PushSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/data-dumy', function () {
    return view('data-dumy');
});

Route::get('/index', [homeController::class, 'index']);

Route::get('/admin/notify',[NotifController::class, 'admin']);
Route::post('/data-dumy',[NotifController::class, 'storeDumy']);
Route::get('/admin/webhookNotif',[NotifController::class, 'webhook']);
Route::delete('/destroy',[NotifController::class, 'destroy']);
Route::post("admin/sendNotif/{sub}",[NotifController::class, 'notif']);
Route::get('/testapi',[NotifController::class, 'dataPtb']);
Route::post('/admin/push-subscribe', function(Request $request) {
    PushSubscription::create([
        'data' => $request->getContent()
    ]);
});
