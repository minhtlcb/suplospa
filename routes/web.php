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
// ->middleware('verified')
use Illuminate\Http\Request;

Auth::routes(['verify' => true]);


Route::get('','HomeController@index')->name('home');
Route::get('/login','HomeController@login')->name('login');
Route::get('/register','HomeController@register');
Route::post('/login','HomeController@postlogin');
Route::post('/register','HomeController@postregister');
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
Route::group(['prefix'=>'admin'],function()
{
Route::get('index','AdminController@index');
Route::get('index2','AdminController@index2');
    Route::group(['prefix'=>'introduce'],function()
     {
        Route::get('get','IntroduceController@get');

        Route::get('add','IntroduceController@add');
        Route::post('add','IntroduceController@postadd');
        
        Route::get('update/{id_introduce}','IntroduceController@update');
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
     Route::group(['prefix'=>'product_type'],function()
     {
        Route::get('get','ProductTypeController@get');

        Route::get('add','ProductTypeController@add');
         Route::post('add','ProductTypeController@postadd');

       
       Route::get('update/{id_types}','ProductTypeController@update');

        Route::post('update/{id_types}','ProductTypeController@postupdate');

           Route::get('delete/{id_types}','ProductTypeController@delete');
     });
      Route::group(['prefix'=>'trademark'],function()
     {
        Route::get('get','TrademarkController@get');

        Route::get('add','TrademarkController@add');
         Route::post('add','TrademarkController@postadd');

       
        Route::get('update/{id_trademark}','TrademarkController@update');
        Route::post('update/{id_trademark}','TrademarkController@postupdate');

           Route::get('delete/{id_trademark}','TrademarkController@delete');
     });

     Route::group(['prefix'=>'product'],function()
     {
        Route::get('get','ProductController@get');

        Route::get('add','ProductController@add');
         Route::post('add','ProductController@postadd');

       
        Route::get('update/{id_product}','ProductController@update');
        Route::post('update/{id_product}','ProductController@postupdate');

           Route::get('delete/{id_product}','ProductController@delete');
     });

    Route::group(['prefix' => 'news'], function() {
        Route::get('get', 'NewsController@get');
        Route::post('postadd', 'NewsController@postadd');
        Route::get('add', 'NewsController@add');

        Route::post('update/{id_news}', 'NewsController@postupdate');
        Route::get('update/{id_news}', 'NewsController@update');
        Route::get('delete/{id_news}', 'NewsController@delete');
    });

    Route::group(['prefix' => 'news_category'], function() {
        Route::get('get', 'NewsCategoryController@get');
        Route::post('postadd', 'NewsCategoryController@postadd');
        Route::get('add', 'NewsCategoryController@add');

        Route::post('update/{id_category}', 'NewsCategoryController@postupdate');
        Route::get('update/{id_category}', 'NewsCategoryController@update');
        Route::get('delete/{id_category}', 'NewsCategoryController@delete');
    });

    Route::group(['prefix' => 'recruitment'], function() {
        Route::get('get', 'RecruitmentController@get');
        Route::post('postadd', 'RecruitmentController@postadd');
        Route::get('add', 'RecruitmentController@add');

        Route::post('update/{id_recruitment}', 'RecruitmentController@postupdate');
        Route::get('update/{id_recruitment}', 'RecruitmentController@update');
        Route::get('delete/{id_recruitment}', 'RecruitmentController@delete');
    });

    Route::group(['prefix' => 'membership_pakage'], function() {
        Route::get('get', 'MemPackageController@get');
        Route::post('postadd', 'MemPackageController@postadd');
        Route::get('add', 'MemPackageController@add');

        Route::post('update/{id_package}', 'MemPackageController@postupdate');
        Route::get('update/{id_package}', 'MemPackageController@update');
        Route::get('delete/{id_package}', 'MemPackageController@delete');
    });
        Route::group(['prefix' => 'slide'], function() {
        Route::get('get', 'SlideController@get');
        Route::post('postadd', 'SlideController@postadd');
        Route::get('add', 'SlideController@add');

        Route::post('update/{id_slide}', 'SlideController@postupdate');
        Route::get('update/{id_slide}', 'SlideController@update');
        Route::get('delete/{id_slide}', 'SlideController@delete');
       });

    Route::group(['prefix' => 'order'], function() {
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

    Route::group(['prefix' => 'user'], function() {
        Route::get('get', 'UserController@get');
         Route::post('search', 'UserController@search');
    

    Route::post('update','UserController@update');
     
    });
});

////////GIAO DIÊN HOME
Route::get('product','ProductController@product')->name('product');
route::get('/productdetails/{id_product}','ProductController@productdetails');
Route::post('/search','ProductController@search');

route::get('cart','Home\CartController@index');
route::get('cart/{id_product}','Home\CartController@add');

route::group(['prefix'=>'ajax'],function()
{
   route::get('cart/{id_product}/{quantity}','Home\CartController@update');
});

route::get('test',function()
{
 //Session::flush();
    // $cart = Session::get('cart');
    // $cart[5]= array(
    //     // 'id'=>3,
    //     'quantity'=>6
    // );
    // Session::put('cart',$cart);
 $cart = json_decode(Cookie::get('cart'),true);
   
        $cart[77]= array(
        // 'id'=>3,
        'quantity'=>72
    );

       Cookie::queue(Cookie::make('cart', json_encode($cart), 1));
// foreach ($carts as $key => $value) 
// {
//     if($key==4 ||$key==8 )
//     {
//            foreach ($value as $s => $va) 
   
//     {
//         # code...
//         echo  $s.' ->'.$va;
       

//     }
//     # 
//     }


// }
  
 return Response()->json($cart);
 //    Session::put('cart', $cart);
 //    unset($cart[3]);
 //        Session::put('cart', $cart);
 // return Response()->json($cart);
//   $viewed_products='a';
//      // $listing = Listing:where('id', $id);
//    for($i=0;$i<4;$i++)
//    {
//   echo  $i++;
//      $viewed_products.$i.'b';
//    }
    
  
     
// $results = $viewed_products;
// echo $results;
     //Session::flush();
   // $cart = Session::get('cart');
   // $cart[] = array
   //       (
   //         'id'=>4,
   //        );
  
   // Session::put('cart', $cart);
   //  $n=count($cart);
   //  echo $n.':';
      


      
   //      foreach ($cart as $id =>$val) 
   //      {
   //         echo $id.'  ->  '  ; 

   //                   if($n >3)
   //               {
   //             //array_shift($cart);
   //              unset($cart[$id]);
   //          Session::put('cart', $cart);
   //          // return;
   //               }
   //         foreach ($val as $key) {
   //             echo $key.'    '  ; 
   //         }
        
   //  }
      

     
        
    
        //     for($i=0;$i<$n-1;$i++)
        //     {
        //      for($j=$i+1;$j<$n;$j++)
        //      {
        //         if($c[$i]>$c[$j])
        //         {
        //             $tg=$c[$i];
        //             $c[$i]=$c[$j];
        //             $c[$j]=$tg;
        //         }
        //      }
        // }
            //   for ($i = 0; $i < $n; $i++)
            // {
            //     echo $c[$i];
            // }
        
        
       
       //Session::flush();
       

});











// Route::get('thu',function()
// {
//    $service = service::find(1);

//    foreach ($service -> type_service as $type_service) {
//    	# code...

//    	echo $type_service -> name. "<br>";
//    }
// });
