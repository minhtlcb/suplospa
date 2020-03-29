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
use Illuminate\Http\Request;

Auth::routes(['verify' => true]);

Route::get('/','HomeController@index')->name('home');

Route::get('/login','HomeController@login')->name('login');
Route::get('/register','HomeController@register');
Route::post('/login','HomeController@postlogin');
Route::post('/register','HomeController@postregister');
Route::get('logout','HomeController@logout');

Route::get('/verify/{token}', 'VerifyController@VerifyEmail')->name('verify');

Route::get('/resetpassword','HomeController@resetpassword');
Route::post('/resetpassword','HomeController@serchmail');
Route::get('/verifypass/{token}', 'VerifypassController@verifypass')->name('verifypass');

Route::get('news','Home\NewsController@get')->name('news');
Route::get('newsdetail/{id_news}','Home\NewsController@newsdetail');
Route::get('newscategory/{id_category}','Home\NewsController@newscategory');

Route::get('detailservice/{id_service}','Home\ServiceController@get');
route::get('typeservice/{id_type_service}','Home\ServiceController@gettype');

route::get('introduce','HomeController@introduce');
route::get('contact','HomeController@contact');
route::get('recruitment','HomeController@recruitment');

route::get('trademark')->name('trademark');
route::get('trademark')->name('product_type');

// Route for admin
// Route::group(['prefix'=>'admin'], function()
Route::group(['middleware' => 'auth', 'prefix'=>'admin'],function()
{
    Route::get('index','AdminController@index');
    Route::get('index2','AdminController@index2');
    
    Route::group(['middleware' => 'can:admin', 'prefix'=>'introduce'],function()
    {
        Route::get('get','IntroduceController@get');
        Route::get('add','IntroduceController@add');
        Route::post('add','IntroduceController@postadd');

        Route::get('update/{id_introduce}','IntroduceController@update');
        Route::post('update/{id_introduce}','IntroduceController@postupdate');
    });
    
    Route::group(['middleware' => 'can:admin', 'prefix'=>'service'],function()
    {
        Route::get('get','ServiceController@get');
        Route::get('add','ServiceController@add');
        Route::post('postadd','ServiceController@postadd');
       
        Route::get('update/{id_service}','ServiceController@update');
        Route::post('update/{id_service}','ServiceController@postupdate');
        Route::get('delete/{id_service}','ServiceController@delete');
    });

    Route::group(['middleware' => 'can:admin', 'prefix'=>'type-service'],function()
    {
        Route::get('get','TypeServiceController@get');
        Route::get('add','TypeServiceController@add');
        Route::post('add','TypeServiceController@postadd');

       
        Route::get('update/{id_type_service}','TypeServiceController@update');
        Route::post('update/{id_type_service}','TypeServiceController@postupdate');
        Route::get('delete/{id_type_service}','TypeServiceController@delete');
     });

    Route::group(['middleware' => 'can:admin', 'prefix'=>'product_type'],function()
    {
        Route::get('get','ProductTypeController@get');
        Route::get('add','ProductTypeController@add');
        Route::post('add','ProductTypeController@postadd');

        Route::get('update/{id_types}','ProductTypeController@update');
        Route::post('update/{id_types}','ProductTypeController@postupdate');
        Route::get('delete/{id_types}','ProductTypeController@delete');
    });

    Route::group(['middleware' => 'can:admin', 'prefix'=>'trademark'],function()
    {
        Route::get('get','TrademarkController@get');
        Route::get('add','TrademarkController@add');
        Route::post('add','TrademarkController@postadd');

        Route::get('update/{id_trademark}','TrademarkController@update');
        Route::post('update/{id_trademark}','TrademarkController@postupdate');
        Route::get('delete/{id_trademark}','TrademarkController@delete');
     });

    Route::group(['middleware' => 'can:admin', 'prefix'=>'product'],function()
    {
        Route::get('get','ProductController@get');
        Route::get('add','ProductController@add');
        Route::post('add','ProductController@postadd');

        Route::get('update/{id_product}','ProductController@update');
        Route::post('update/{id_product}','ProductController@postupdate');
        Route::get('delete/{id_product}','ProductController@delete');
    });
     
    Route::group(['middleware' => 'can:admin', 'prefix' => 'news'], function() {
        Route::get('get', 'NewsController@get');
        Route::post('postadd', 'NewsController@postadd');
        Route::get('add', 'NewsController@add');

        Route::post('update/{id_news}', 'NewsController@postupdate');
        Route::get('update/{id_news}', 'NewsController@update');
        Route::get('delete/{id_news}', 'NewsController@delete');
    });

    Route::group(['middleware' => 'can:admin', 'prefix' => 'news_category'], function() {
        Route::get('get', 'NewsCategoryController@get');
        Route::post('postadd', 'NewsCategoryController@postadd');
        Route::get('add', 'NewsCategoryController@add');

        Route::post('update/{id_category}', 'NewsCategoryController@postupdate');
        Route::get('update/{id_category}', 'NewsCategoryController@update');
        Route::get('delete/{id_category}', 'NewsCategoryController@delete');
    });

    Route::group(['middleware' => 'can:admin', 'prefix' => 'recruitment'], function() {
        Route::get('get', 'RecruitmentController@get');
        Route::post('postadd', 'RecruitmentController@postadd');
        Route::get('add', 'RecruitmentController@add');

        Route::post('update/{id_recruitment}', 'RecruitmentController@postupdate');
        Route::get('update/{id_recruitment}', 'RecruitmentController@update');
        Route::get('delete/{id_recruitment}', 'RecruitmentController@delete');
    });

    Route::group(['middleware' => 'can:admin', 'prefix' => 'membership_pakage'], function() {
        Route::get('get', 'MemPackageController@get');
        Route::post('postadd', 'MemPackageController@postadd');
        Route::get('add', 'MemPackageController@add');

        Route::post('update/{id_package}', 'MemPackageController@postupdate');
        Route::get('update/{id_package}', 'MemPackageController@update');
        Route::get('delete/{id_package}', 'MemPackageController@delete');
    });

    Route::group(['middleware' => 'can:admin', 'prefix' => 'slide'], function() {
        Route::get('get', 'SlideController@get');
        Route::post('postadd', 'SlideController@postadd');
        Route::get('add', 'SlideController@add');

        Route::post('update/{id_slide}', 'SlideController@postupdate');
        Route::get('update/{id_slide}', 'SlideController@update');
        Route::get('delete/{id_slide}', 'SlideController@delete');
    });

    Route::group(['middleware' => 'can:admin', 'prefix' => 'order'], function() {
        Route::get('getorder', 'OderController@getorder');
        Route::get('orderdetail/{id_order}', 'OderController@orderdetail');

        Route::get('getordercanceled', 'OderController@getordercanceled');
        Route::get('getorderdelivery', 'OderController@getorderdelivery');
        Route::get('getorderdelivered', 'OderController@getorderdelivered');

        Route::get('cancel/{id_slide}', 'OderController@cancel');
        Route::get('cancel2/{id_slide}', 'OderController@cancel2');
        Route::get('handlingdelivery/{id_order}', 'OderController@handlingdelivery');
        Route::get('handlingdelivered/{id_order}', 'OderController@handlingdelivered');
    });

    Route::group(['prefix' => 'statistical'], function() {
        Route::get('order_statistics', 'StatisticalController@orderStatistics')->name('orderStatistics');
        Route::get('user_statistics', 'StatisticalController@userStatistics');
        Route::post('get_order_ajax', 'StatisticalController@getOrderAjax')->name('getOrderAjax');
    });

    Route::group(['prefix' => 'search'], function() {
        Route::post('product', 'ProductController@searchData'); 
        Route::post('service', 'ServiceController@searchData'); 
        Route::post('blogs', 'NewsController@searchData'); 
        Route::post('recruitment', 'NewsController@searchData'); 
    });

    Route::group(['middleware' => 'can:admin', 'prefix' => 'user'], function() {
        Route::get('get', 'UserController@get');
        Route::post('search', 'UserController@search');
        Route::get('update', 'UserController@update');
        Route::post('update','UserController@postupdate');
    });

});

// route frontend
Route::group(['prefix' => 'product'], function() {
    Route::get('/','ProductController@product')->name('product');
    route::get('productdetails/{id_product}','ProductController@productdetails');
    // Route::post('search','ProductController@search'); 
});

route::get('test',function()
{
    $cart = Session::get('cart');
    $cart[] = array('id'=>4,);
    Session::put('cart', $cart);
    $n=count($cart);
    echo 'Tổng'.$n.':';
    foreach ($cart as $id => $val) 
    {
        echo $id.'>';
        foreach ($val as $key) 
        {
            echo $key.'    '  ; 
            if($n >3)
            {
                unset($cart[$id]);
                Session::put('cart', $cart);
                if($n==4)
                {
                    return;
                }
            }
        }
    }
});

route::get('trademark/{}')->name('trademark');
route::get('product_type/{}')->name('product_type');
