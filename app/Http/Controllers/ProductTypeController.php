<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_type;
class ProductTypeController extends Controller
{
    //
     public function get()
    {
    	$producttype= product_type::paginate(10);
    	return view('Admin.pages.product_type.product_type',['producttype'=>$producttype]);
    }


    public function add()
    {
    	
    	return view('Admin.pages.product_type.new');
    }

       public function postadd(Request $Request)
    {
    	
       $this->validate($Request,[
           'name'=>'required|unique:product_type,name|min:1|max:200',
           
           ],[
           'name.required'=>'Bạn chưa nhập tiêu đề',
            'name.unique'=>'Name đã tồn tại',
            
            ]);
     try{
           $product_type= new product_type;

           
           $product_type->name=$Request->name;

       
        


           $product_type->save();
        return redirect('admin/product_type/get')->with('thongbao','bạn đã thêm thành công');
}
catch(Exception $e) {
	redirect ('admin/product_type/get')->with('thongbao','Lỗi');

    }


   }




     public function update($id_types)
    {
    	
    	$product_type = product_type::find($id_types);
    	return view('Admin.pages.product_type.update',['product_type'=>$product_type]);
    }

    public function postupdate(Request $Request, $id_types)
    {
    	$this->validate($Request,[
    	 'name'=>'required|unique:product_type,name|min:1|max:200',
           
           
           // 'image'=>'required|mimes:jpeg,jpg,png,mp4|max:1000',
           // 'backgroup_image'=>'required|mimes:jpeg,jpg,png,mp4|max:1000',
           ],[
           'name.required'=>'Bạn chưa nhập tên',
           'name.unique'=>'Name đã tồn tại',
           
        
            ]);
try{
           $product_type= product_type::find($id_types);
           $product_type->name=$Request->name;
           
           $product_type->save();
        return back()->with('thongbao','bạn đã sửa thành công');
}
catch(Exception $e) {
	return redirect('admin/product_type/update')->with('thongbao','Lỗi');

    }
    }
     public function delete($id_types)
    {
    	$product_type = product_type::find($id_types);
    	
    	$product_type->delete();
    	return redirect('admin/product_type/get')->with('thongbao','Bạn đã xóa thành công');
    }


    public function search($id_trademark)
    {
      echo 'id co'.$id_trademark;
    }
}
