<?php

use App\Mail\TicketPurchasedSuccessfully;
use Carbon\Carbon;
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
    return view('welcome');
});

Route::get('/test-template', function () {

    $post = [
        0 => ['firstname' => 'melvin',
            'email_address' => 'ochieng088@gmail.com',
            'ticketNumber' => 'TICKE-34354-53',
            'SeatNo' => 'A56',
            'Price' => '34',
            'StartTime' => '09:34',
            'Endtime' => '10:30',
            'MovieName' => 'Atlas',
            'ShowTimeDate' => Carbon::now()->format('l m-d-Y'),
            'CinemaName' => 'Anga Cinemas',
            'MovieTitle' => 'Avatar',
            'image' => '/moviepic/avatar.jpg',
            'PurchaseDate' => Carbon::now()->format('Y-m-d H:i')],

        1 => ['firstname' => 'melvin',
            'email_address' => 'ochieng088@gmail.com',
            'ticketNumber' => 'TICKE-34354-53',
            'SeatNo' => 'A56',
            'Price' => '34',
            'StartTime' => '09:34',
            'Endtime' => '10:30',
            'MovieName' => 'Atlas',
            'ShowTimeDate' => Carbon::now()->format('l m-d-Y'),
            'CinemaName' => 'Anga Cinemas',
            'MovieTitle' => 'Avatar',
            'image' => '/moviepic/avatar.jpg',
            'PurchaseDate' => Carbon::now()->format('Y-m-d H:i')
        ]];

    Mail::to('ochiengccc088@gmail.com')->send(new TicketPurchasedSuccessfully());

//    return view('emails.tickets.purchase', ['ticketdetails' => $post]);
});
