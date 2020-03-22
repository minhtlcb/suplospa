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
        // 'id'=>3,
             'quantity'=>$quantity
            );
            Session::put('cart',$cart);
            echo 'd';

    }

}
?>