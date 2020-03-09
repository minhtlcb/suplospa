<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\order_detail;
class OderController extends Controller
{
    public function getorder()
    {
        $order = order::where('status',0)->paginate(10);
        return view('Admin.pages.order.order',['order'=>$order]);
    }
      public function getorderdelivery()
    {
        $order = order::where('status',1)->paginate(10);
        return view('Admin.pages.order.orderdelivery',['order'=>$order]);
    }
     public function getordercanceled()
    {
        $order = order::where('status',10)->orWhere('status',20)->paginate(10);
        return view('Admin.pages.order.ordercanceled',['order'=>$order]);
    }
     public function getorderdelivered()
    {
        $order = order::where('status',2)->paginate(10);
        return view('Admin.pages.order.orderdelivered',['order'=>$order]);
    }

    public function orderdetail($id_order)
    {
        $order_detail = order_detail::where('id_order',$id_order)->paginate(10);
        return view('Admin.pages.order.orderdetail',['order_detail'=>$order_detail,'id_order'=>$id_order]);
    }
    

    public function cancel($id_order)
    {
       $order= order::find($id_order);
       $order->status=10;
       $order->save();
        return back()->with('thongbao','Hủy đơn thành công');
    }
      public function cancel2($id_order)
    {
       $order= order::find($id_order);
       $order->status=20;
       $order->save();
       return back()->with('thongbao','Hoàn đơn thành công');
    }
      public function handlingdelivery($id_order)
    {
       $order= order::find($id_order);
       $order->status=1;
       $order->save();
        return back()->with('thongbao','Đơn hàng xử lý thành công-Trạng thái: Đang giao');
    }
       public function handlingdelivered($id_order)
    {
       $order= order::find($id_order);
       $order->status=2;
       $order->save();
       return back()->with('thongbao','Đơn hàng xử lý thành công-Trạng thái: Đã giao');
    }
}
