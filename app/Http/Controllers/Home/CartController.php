<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
use Session;
class CartController extends Controller
{
    //
    public function add($id_product)
    {
          $product=product::find($id_product);

    	   $cart = Session::get('cart');
          $cart[$product->id_product]= array(
        // 'id'=>3,
             'quantity'=>1
            );
            Session::put('cart',$cart);
    return redirect()->back()->with('message', 'Thêm sản phẩm giỏ hàng thành công');
    }
    public function update($id_product,$quantity)
    {
      $product=product::find($id_product);
        $cart = Session::get('cart');
      

          $cart[$product->id_product]= array(
             'quantity'=>$quantity
            );
            
        if($quantity==0 || $quantity<0 )
        {
        unset($cart[$id_product]);
        Session::put('cart',$cart);
        }
        Session::put('cart',$cart);
           







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



                      return view('ajax',['cart'=>$results,'sessioncart'=>$cart]);

                           
                       }

    }

}
?>