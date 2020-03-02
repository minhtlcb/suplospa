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
use App\service;
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'],function()
{
Route::get('index','AdminController@index');
Route::get('index2','AdminController@index2');
    Route::group(['prefix'=>'introduce'],function()
     {
        Route::get('get','IntroduceController@get');
        Route::post('update/{id_introduce}','IntroduceController@postupdate');
     });
    Route::group(['prefix'=>'service'],function()
     {
        Route::get('get','ServiceController@get');

        Route::get('add','ServiceController@add');
         Route::post('postadd','ServiceController@postadd');

       
       Route::get('update/{id_service}','ServiceController@update');

        Route::post('update/{id_service}','ServiceController@postupdate');

           Route::get('delete/{id_service}','ServiceController@delete');
     });
     Route::group(['prefix'=>'type-service'],function()
     {
        Route::get('get','TypeServiceController@get');

        Route::get('add','TypeServiceController@add');
         Route::post('add','TypeServiceController@postadd');

       
       Route::get('update/{id_type_service}','TypeServiceController@update');

        Route::post('update/{id_type_service}','TypeServiceController@postupdate');

           Route::get('delete/{id_type_service}','TypeServiceController@delete');
     });
});


// Route::get('thu',function()
// {
//    $service = service::find(1);

//    foreach ($service -> type_service as $type_service) {
//    	# code...

//    	echo $type_service -> name. "<br>";
//    }
// });
