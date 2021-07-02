<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;

use App\Http\Controllers\UserChartController;

use App\Http\Controllers\ChartJsController;

//Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');

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
    return view('dashboard');
})->middleware('auth');
Route::get('/agences', function () {
    return view('agence');
})->name('agences');
Route::get('/index', function () {
    return view('dashboard');
})->name('index')->middleware('auth');;

Route::GET('/agence/{id}', [App\Http\Controllers\Agence::class, 'information'])->name('information')->middleware('auth');


Route::get('agence/{id}/incoherences', [App\Http\Controllers\Incoherence::class, 'index'])->name('incoherences')->middleware('auth');;
Route::get('clients', [App\Http\Controllers\Client::class, 'index'])->name('clients')->middleware('auth');
Route::Post('/getsuccursals', [App\Http\Controllers\Agence::class, 'getsuccursals'])->name('getsuccursals');
Route::Post('/getagence', [App\Http\Controllers\Agence::class, 'getagence'])->name('getagence');


Route::get('creation', [App\Http\Controllers\Client::class, 'creation'])->name('creation');
Route::get('modification', [App\Http\Controllers\Client::class, 'modification'])->name('modification');

Route::get('modification/{id}', [App\Http\Controllers\Client::class, 'modification_client'])->name('modification_client');


Route::get('reporting', [App\Http\Controllers\Agence::class, 'index'])->name('reporting');

Route::get('test', function () {
    return view('test');
})->name('test');
Route::get('/bprs', function () {
    return view('bprs');
})->name('bprs');
Route::get('bprs/{id}', function ($id) {
    return view('bprs-unique');
})->name('bpr');




//Route::get('users', 'UserChartController@index');





Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use Andyabih\LaravelToUML\Http\Controllers\LaravelToUMLController;


Route::get(config('laravel-to-uml.route'), [LaravelToUMLController::class, 'index']);
