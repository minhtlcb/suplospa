<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\news_category;

class NewsCategoryController extends Controller
{
    public function get()
    {
    	$news_category = news_category::paginate(10);
    	return view('Admin.pages.news_category.news_category',['news_category'=>$news_category]);
    }

    public function add()
    {
    	return view('Admin.pages.news_category.add_news_cate');
    }

    public function postadd(Request $Request)
    {
		$this->validate($Request,
			[
				'name'=>'required|unique:news_category,name|min:1|max:200',
			],[
				'name.required'=>'Bạn chưa nhập tiêu đề',
				'name.unique'=>'Name đã tồn tại',
				'name.min'=>'tên danh mục dv quá ngắn',
				'name.max'=>'tên danh mục dv không được quá 200 ký tự'
			]);
		try{
			$news_category= new news_category;
			$news_category->name=$Request->name;
			$news_category->save();
			return redirect('admin/news_category/get')->with('thongbao','bạn đã thêm thành công');
		}
		catch(Exception $e) {
			redirect ('admin/news_category/add')->with('thongbao','Lỗi');
		}
    }

	public function update($id_category)
    {
    	$news_category = news_category::find($id_category);
    	return view('Admin.pages.news_category.edit_news_cate',['news_category'=>$news_category]);
    }

    public function postupdate(Request $Request, $id_category)
    {
    	$this->validate($Request,
			[
				'name'=>'required:news_category,name|min:1|max:200',
			],[
				'name.required'=>'Bạn chưa nhập tiêu đề',
				'name.min'=>'tên danh mục dv quá ngắn',
				'name.max'=>'tên danh mục dv không được quá 200 ký tự'
			]);
		try{
			$news_category= news_category::find($id_category);
			$news_category->name=$Request->name;
			$news_category->save();
			return redirect('admin/news_category/get')->with('thongbao','bạn đã sửa thành công');
		}
		catch(Exception $e) {
			redirect ('admin/news_category/edit_news_cate')->with('thongbao','Lỗi');
	    }
	}

    public function delete($id_category)
    {
    	$news_category = news_category::find($id_category);
    	$news_category->delete();
    	return redirect('admin/news_category/get')->with('thongbao','Bạn đã xóa thành công');
    }
}