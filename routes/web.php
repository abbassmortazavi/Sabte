<?php

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
use App\Sabte;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    /*$orders = DB::table('sabtes')
        ->where('user_id' , 1)
        ->select(DB::raw('SUM(ba_hozore2) as test,SUM(madrese_elmiye)'))
        ->get();*/

    /*$orders = DB::table('sabtes')
        ->select(DB::raw('SUM(ba_hozore2) as ba_hozore2,SUM(madrese_elmiye) as madrese_elmiye'))
        ->get();
    dd($orders);*/
    return view('welcome');
});

Route::group(['namespace' => 'Auth'] , function (){
    Route::get('logout' , 'LoginController@logout')->name('logout');
});


Route::group(['namespace' => 'Admin','middleware' => 'admin' , 'prefix' => 'admin'], function (){
    $this->get('/panel' , 'PanelController@index')->name('panel');
    $this->resource('/report' , 'ReportController');
    $this->post('/user' , 'ReportController@findUser')->name('findUser');
});





Route::resource('sabte' , 'SabteController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
