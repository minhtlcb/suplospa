<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\slide;

class SlideController extends Controller
{
    public function get()
    {
    	$slide = slide::paginate(10);
    	return view('Admin.pages.slide.slide',['slide'=>$slide]);
    }

    public function add()
    {
    	return view('Admin.pages.slide.create_slide');
    }

    public function postadd(Request $Request)
    {
		$this->validate($Request,
			[
				'title'=>'required:slide,title|min:1|max:200',
				'describe'=>'required|min:3',
			],[
				'describe.required'=>'Bạn chưa nhập nội dung',
				'title.required'=>'Bạn chưa nhập tiêu đề',
				'title.min'=>'tên danh mục dv quá ngắn',
				'title.max'=>'tên danh mục dv không được quá 200 ký tự'
			]);
    	$getfile = '';
	    if ($Request->hasFile('file')) {
	        $this->validate($Request, 
	        [
	          //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
	          'file' => 'mimes:jpg,jpeg,png,gif|max:6144',
	        ],      
	        [
	          //Tùy chỉnh hiển thị thông báo không thõa điều kiện
	          'file.required' => "You must include file",
	          'file.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
	          'file.max' => 'Hình thẻ giới hạn dung lượng không quá 6M',
	        ]);
	        
	        //Lưu hình ảnh vào thư mục public/upload/file
	        $file = $Request->file('file');
	        $getfile = time().'_'.$file->getClientOriginalName();
	        $destinationPath = public_path('upload/banner');
	        $file->move($destinationPath, $getfile);
	    }
		try{
			$slide= new slide;
			$slide->title=$Request->title;
			$slide->describe=$Request->describe;
			$slide->file = $getfile;
			$slide->save();
			return redirect('admin/slide/get')->with('thongbao','bạn đã thêm thành công');
		}
		catch(Exception $e) {
			redirect ('admin/slide/add')->with('thongbao','Lỗi');
		}
    }

	public function update($id)
    {
    	$slide = slide::find($id);
    	return view('Admin.pages.slide.edit_slide',['slide'=>$slide]);
    }

    public function postupdate(Request $Request, $id)
    {
    	$this->validate($Request,
			[
				'title'=>'required:slide,title|min:1|max:200',
				'describe'=>'required|min:3',
			],[
				'describe.required'=>'Bạn chưa nhập nội dung',
				'title.required'=>'Bạn chưa nhập tiêu đề',
				'title.min'=>'tên danh mục dv quá ngắn',
				'title.max'=>'tên danh mục dv không được quá 200 ký tự'
			]);
    	$getfile = '';
	    if ($Request->hasFile('file')) {
	        $this->validate($Request, 
	        [
	          //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
	          'file' => 'mimes:jpg,jpeg,png,gif|max:6144',
	        ],      
	        [
	          //Tùy chỉnh hiển thị thông báo không thõa điều kiện
	          'file.required' => "You must include file",
	          'file.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
	          'file.max' => 'Hình thẻ giới hạn dung lượng không quá 6M',
	        ]);
	        
	        //Lưu hình ảnh vào thư mục public/upload/file
	        $file = $Request->file('file');
	        $getfile = time().'_'.$file->getClientOriginalName();
	        $destinationPath = public_path('upload/banner');
	        $file->move($destinationPath, $getfile);
	    }
		try{
			$slide= slide::find($id);
			$slide->title=$Request->title;
			$slide->describe=$Request->describe;
			$slide->file = $getfile;
			$slide->save();
			return redirect('admin/slide/get')->with('thongbao','bạn đã thêm thành công');
		}
		catch(Exception $e) {
			redirect ('admin/slide/add')->with('thongbao','Lỗi');
		}
	}

    public function delete($id)
    {
    	$slide = slide::find($id);
    	$slide->delete();
    	return redirect('admin/slide/get')->with('thongbao','Bạn đã xóa thành công');
    }
}