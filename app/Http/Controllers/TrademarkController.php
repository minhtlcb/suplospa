<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trademark;
class TrademarkController extends Controller
{
      public function get()
    {
    	$trademark= trademark::paginate(10);
    	return view('Admin.pages.trademark.trademark',['trademark'=>$trademark]);
    }


    public function add()
    {
    	
    	return view('Admin.pages.trademark.new');
    }

       public function postadd(Request $Request)
    {
    	
       $this->validate($Request,[
           'name'=>'required|unique:trademark,name|min:1|max:200',
           
           ],[
           'name.required'=>'Bạn chưa nhập tiêu đề',
            'name.unique'=>'Name đã tồn tại',
            
            ]);
     try{
           $trademark= new trademark;

           
           $trademark->name=$Request->name;

       
        


           $trademark->save();
        return redirect('admin/trademark/get')->with('thongbao','bạn đã thêm thành công');
}
catch(Exception $e) {
	redirect ('admin/trademark/get')->with('thongbao','Lỗi');

    }


   }




     public function update($id_trademark)
    {
    	
    	$trademark = trademark::find($id_trademark);
    	return view('Admin.pages.trademark.update',['trademark'=>$trademark]);
    }

    public function postupdate(Request $Request, $id_trademark)
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
           $trademark= trademark::find($id_trademark);
           $trademark->name=$Request->name;
           
           $trademark->save();
        return back()->with('thongbao','bạn đã sửa thành công');
}
catch(Exception $e) {
	return redirect('admin/trademark/update')->with('thongbao','Lỗi');

    }
    }
     public function delete($id_types)
    {
    	$trademark = trademark::find($id_types);
    	
    	$trademark->delete();
    	return redirect('admin/trademark/get')->with('thongbao','Bạn đã xóa thành công');
    }
}
