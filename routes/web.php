<?php

use App\Http\Controllers\GithubDeploymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('services', function () {
    return view('services');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('reservation', function () {
    return view('reservation');
});

Route::post('reservation/submit', function (Request $request){

    $input = $request->all();

    $data = [
        'name' => $input['name'],
        'email' => $input['email'],
        'date' => $input['date'],
        'description' => $input['description'],
    ];

    Mail::send('emails.reservation', $data, static function ($message) use ($data) {
        $message->from($data['email'], $data['name']);
        $message->to('Simplyelegant2013@yahoo.com');
        $message->replyTo(env('MAIL_FROM_ADDRESS'), env('app_name'));
        $message->subject('Reservation from '.$data['name']);
    });

//    Session::flash('success', 'Deleted');
    return redirect('reservation')->with('success', 'Your reservation has been sent');
})->name('reservation.submit');

Route::get('contact', function () {
    return view('contact');
});

//Github Deployment
// Remember to include url in csrf exemption
Route::post('github/deploy', [GithubDeploymentController::class, 'deploy']);
