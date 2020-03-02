<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\service;
class ServiceController extends Controller
{
    public function get()
    {
    	$service = service::paginate(10);
    	return view('Admin.pages.service.service',['service'=>$service]);
    }


    public function add()
    {
    	return view('Admin.pages.service.new_service');
    }

       public function postadd(Request $Request)
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
           $service= new service;
           $service->name=$Request->name;
           $service->describe=$Request->describe;
           $service->save();
        return redirect('admin/service/add')->with('thongbao','bạn đã thêm thành công');
}
catch(Exception $e) {
	redirect ('admin/service/add')->with('thongbao','Lỗi');

    }


   }




     public function update($id_service)
    {
    	$service = service::find($id_service);
    	return view('Admin.pages.service.update',['service'=>$service]);
    }

    public function postupdate(Request $Request, $id_service)
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
           $service= service::find($id_service);
           $service->name=$Request->name;
           $service->describe=$Request->describe;
           $service->save();
        return back()->with('thongbao','bạn đã sửa thành công');
}
catch(Exception $e) {
	return redirect('admin/service/update')->with('thongbao','Lỗi');

    }
    }
     public function delete($id_service)
    {
    	$service = service::find($id_service);
    	$service->delete();
    	return redirect('admin/service/get')->with('thongbao','Bạn đã xóa thành công');
    }
}
