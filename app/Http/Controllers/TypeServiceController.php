<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\service;
use App\type_service;
class TypeServiceController extends Controller
{
    //

    public function get()
    {
    	$typeservice = type_service::paginate(10);
    	return view('Admin.pages.typeservice.typeservice',['typeservice'=>$typeservice]);
    }


    public function add()
    {
    	$service=service::all();
    	return view('Admin.pages.typeservice.new_typeservice',['service'=>$service]);
    }

       public function postadd(Request $Request)
    {
    	
 $this->validate($Request,[
           'name'=>'required|unique:service,name|min:1|max:200',
           'describe'=>'required|min:3',
            'image'=>'required',
           // 'image'=>'required|mimes:jpeg,jpg,png,mp4|max:1000',
           // 'backgroup_image'=>'required|mimes:jpeg,jpg,png,mp4|max:1000',
           ],[
           'name.required'=>'Bạn chưa nhập tiêu đề',
            'name.unique'=>'Name đã tồn tại',
             'image.required'=>'image không được để trống',
           'describe.required'=>'Bạn chưa nhập nội dung',
           'name.min'=>'password không được nhỏ hơn 3 kí tự',
           'name.max'=>'password không được lớn hơn 200 ký tự'
            ]);
try{
           $typeservice= new type_service;
           $typeservice->id_service=$Request->id_service;
         

           if($Request->hasFile('image'))
           {
            $file = $Request->file('image');
            $format= $file->getClientOriginalExtension();
            if($format != 'jpg' && $format != 'png' && $format != 'jpeg' && $format !='mp4')
            {
               return redirect('admin/type-service/get')->with('thongbao','bạn chỉ được chọn file jpg,png,jpeg,mp4');
            }
            $name = $file->getClientOriginalName();
            $image = str::random(5)."_".$name;
           
            while (file_exists("public/upload/typeservice/".$image)) {
              $image = str::random(5)."_".$name;
            }
           
            $file->move("public/upload/typeservice",$image);
            $typeservice->image=$image;
             
           }
           $typeservice->name=$Request->name;

           $typeservice->id=1;
           $typeservice->describe=$Request->describe;


           $typeservice->save();
        return redirect('admin/type-service/add')->with('thongbao','bạn đã thêm thành công');
}
catch(Exception $e) {
	redirect ('admin/type-service/add')->with('thongbao','Lỗi');

    }


   }




     public function update($id_type_service)
    {
    	$service= service::all();
    	$typeservice = type_service::find($id_type_service);
    	return view('Admin.pages.typeservice.update',['typeservice'=>$typeservice,'service'=>$service]);
    }

    public function postupdate(Request $Request, $id_type_service)
    {
    	$this->validate($Request,[
    	 'name'=>'required|unique:service,name|min:1|max:200',
           'describe'=>'required|min:3',
           
           // 'image'=>'required|mimes:jpeg,jpg,png,mp4|max:1000',
           // 'backgroup_image'=>'required|mimes:jpeg,jpg,png,mp4|max:1000',
           ],[
           'name.required'=>'Bạn chưa nhập tiêu đề',
           'name.unique'=>'Name đã tồn tại',
           
           'describe.required'=>'Bạn chưa nhập nội dung',
           'name.min'=>'password không được nhỏ hơn 3 kí tự',
           'name.max'=>'password không được lớn hơn 200 ký tự'
            ]);
try{
           $typeservice= type_service::find($id_type_service);
           $typeservice->name=$Request->name;
           $typeservice->describe=$Request->describe;
           $typeservice->id=1;
           $typeservice->id_service=$Request->id_service;
           if($Request->hasFile('image'))
           {
            $file = $Request->file('image');
            $format= $file->getClientOriginalExtension();
            if($format != 'jpg' && $format != 'png' && $format != 'jpeg' && $format !='mp4')
            {
               return redirect('admin/typeservice/get')->with('thongbao','bạn chỉ được chọn file jpg,png,jpeg,mp4');
            }
            $name = $file->getClientOriginalName();
            $image = str::random(5)."_".$name;
           
            while (file_exists("public/upload/typeservice/".$image)) {
              $image = str::random(5)."_".$name;
            }
            unlink("public/upload/typeservice/".$typeservice->image);
            $file->move("public/upload/typeservice",$image);
            $typeservice->image=$image;
             
           }
           $typeservice->save();
        return back()->with('thongbao','bạn đã sửa thành công');
}
catch(Exception $e) {
	return redirect('admin/type-service/update')->with('thongbao','Lỗi');

    }
    }
     public function delete($id_type_service)
    {
    	$typeservice = type_service::find($id_type_service);
    	 unlink("public/upload/typeservice/".$typeservice->image);
    	$typeservice->delete();
    	return redirect('admin/type-service/get')->with('thongbao','Bạn đã xóa thành công');
    }
}
