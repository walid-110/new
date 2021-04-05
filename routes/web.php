<?php

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
route::get('/poster','postercontoller@index');
/*Route::get('poster', function () {

    $p =\App\Models\poster::all();
    return view('poster')->with('posters',$p);
    //    return view('poster')->withposters($p);
    // return view('welcome',['posters'=>$p]);


});/
