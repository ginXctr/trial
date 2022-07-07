<?php

use App\Http\Controllers\MembersController;
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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/Registration', function () {
    return view('Registration', [
        "title" => "Registration"
    ]);
});

Route::get('/RacePack', function () {
    return view('RacePack', [
        "title" => "RacePack"
    ]);
});

//Route::get('/Members', function () {
//    return view('Members', [
//        "title" => "Members"
//    ]);
//});

route::get('/Members',[MembersController::class, 'index'])->name('members');
route::get('/tambahdata',[MembersController::class, 'tambahdata'])->name('tambahdata');
route::post('/insertdata',[MembersController::class, 'insertdata'])->name('insertdata');