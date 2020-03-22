<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;

use App\service;
use App\news_category;
use App\news;
use App\type_service;
use App\product;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
//       function __construct()
//     {
//                
// }
       function __construct()
   {

   	   $cart = Session::get('cart');

  if(isset($cart))
    {
   	$productcart=product::where('id_product','<>',);
     // $listing = Listing:where('id', $id);
  
   foreach ($cart as $key => $value) 
     //$i++;
     // ->where('field_1', red_1); // Desired output
    {
    // foreach ($value as $va => $quantity)
    //  {
    	// echo $key;
     $productcart->orwhere('id_product',$key);
    // }
  }
     

$results = $productcart->get();



      view()->share(['cart'=>$results,'sessioncart'=>$cart]);

           
}













     $servicec=service::limit(4)->get();
     view()->share('servicec',$servicec);
         $news_categoryc=news_category::all();
        $newc = news::orderBy('id_news', 'asc')->limit(5)->get();
       view()->share(['news_categoryc'=>$news_categoryc,'newc'=>$newc]);
   }
}
