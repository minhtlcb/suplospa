<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\recruitment;

class RecruitmentController extends Controller
{
    public function get()
    {
    	$recruitment = recruitment::paginate(10);
    	return view('Admin.pages.recruitment.recruitment',['recruitment'=>$recruitment]);
    }

    public function add()
    {
    	return view('Admin.pages.recruitment.create_recruitment');
    }

    public function postadd(Request $Request)
    {
		$this->validate($Request,
			[
				'name'=>'required:recruitment,name|min:1|max:200',
				'title'=>'required:recruitment,title|min:1|max:200',
				'describe'=>'required|min:3',
			],[
				'name.required'=>'Bạn chưa nhập tiêu đề',
				'name.min'=>'tên danh mục dv quá ngắn',
				'name.max'=>'tên danh mục dv không được quá 200 ký tự',
				'describe.required'=>'Bạn chưa nhập nội dung',
				'title.required'=>'Bạn chưa nhập tiêu đề',
				'title.min'=>'tên danh mục dv quá ngắn',
				'title.max'=>'tên danh mục dv không được quá 200 ký tự'
			]);
		try{
			$recruitment= new recruitment;
			$recruitment->name=$Request->name;
			$recruitment->title=$Request->title;
			$recruitment->describe=$Request->describe;
			$recruitment->save();
			return redirect('admin/recruitment/get')->with('thongbao','bạn đã thêm thành công');
		}
		catch(Exception $e) {
			redirect ('admin/recruitment/add')->with('thongbao','Lỗi');
		}
    }

	public function update($id)
    {
    	$recruitment = recruitment::find($id);
    	return view('Admin.pages.recruitment.edit_recruitment',['recruitment'=>$recruitment]);
    }

    public function postupdate(Request $Request, $id)
    {
    	$this->validate($Request,
			[
				'name'=>'required:recruitment,name|min:1|max:200',
				'title'=>'required:recruitment,title|min:1|max:200',
				'describe'=>'required|min:3',
			],[
				'name.required'=>'Bạn chưa nhập tiêu đề',
				'name.min'=>'tên danh mục dv quá ngắn',
				'name.max'=>'tên danh mục dv không được quá 200 ký tự',
				'describe.required'=>'Bạn chưa nhập nội dung',
				'title.required'=>'Bạn chưa nhập tiêu đề',
				'title.min'=>'tên danh mục dv quá ngắn',
				'title.max'=>'tên danh mục dv không được quá 200 ký tự'
			]);
		try{
			$recruitment= recruitment::find($id);
			$recruitment->name=$Request->name;
			$recruitment->title=$Request->title;
			$recruitment->describe=$Request->describe;
			$recruitment->save();
			return redirect('admin/recruitment/get')->with('thongbao','bạn đã thêm thành công');
		}
		catch(Exception $e) {
			redirect ('admin/recruitment/add')->with('thongbao','Lỗi');
		}
	}

    public function delete($id)
    {
    	$recruitment = recruitment::find($id);
    	$recruitment->delete();
    	return redirect('admin/recruitment/get')->with('thongbao','Bạn đã xóa thành công');
    }
}