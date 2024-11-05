<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\MapController;
$mainMap =array(
    1=>"first thing",
    2=>"Second thing",
    3=>"Third Thing"

);
Route::get('/', function () {
    return view('welcome');
});


Route::get('/start', function () {

    return view('hello',['mainMap'=>$mainMap]);
});

Route::get('/todo/add', [MapController::class, 'insertReq']);
Route::get('/todo/del', [MapController::class, 'deleteReq']);
