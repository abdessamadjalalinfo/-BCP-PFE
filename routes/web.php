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
    return view('welcome');
});
Route::get('/agences', function () {
    return view('agence');
})->name('agences');
Route::get('/index2', function () {
    return view('dashboard');
});
Route::get('/agence/{id}', function ($id) { {
        $year = ['2015', '2016', '2017', '2018', '2019', '2020', '2021'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)->count();
        }

        return view('unique_agence')->with('year', json_encode($year, JSON_NUMERIC_CHECK))->with('user', json_encode($user, JSON_NUMERIC_CHECK));
    }
});
Route::get('agence/{id}/incoherences', [App\Http\Controllers\Incoherence::class, 'index'])->name('incoherences');
Route::get('clients', [App\Http\Controllers\Client::class, 'index'])->name('clients');


Route::get('creation', [App\Http\Controllers\Client::class, 'creation'])->name('creation');
Route::get('modification', [App\Http\Controllers\Client::class, 'modification'])->name('modification');


Route::get('reporting', [App\Http\Controllers\Agence::class, 'index'])->name('reporting');


//Route::get('users', 'UserChartController@index');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
