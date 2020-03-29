<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\news;
use App\news_category;
class NewsController extends Controller
{
  public function get()
  {
    $news = news::paginate(10);
    // $news = news::paginate(10)->total();
    return view('Admin.pages.news.news',['news'=>$news]);
  }

  public function add()
  {
    $news_category = news_category::all();
    return view('Admin.pages.news.add_news',['news_category'=>$news_category]);
  }

  public function postadd(Request $Request)
  {
    $this->validate($Request,[
      'title'=>'required|unique:news,title|min:1|max:200',
      'details'=>'required|min:3',
    ],[
      'title.required'=>'Bạn chưa nhập tiêu đề',
      'title.unique'=>'title đã tồn tại',
      'details.required'=>'Bạn chưa nhập nội dung',
      'title.min'=>'password không được nhỏ hơn 3 kí tự',
      'title.max'=>'password không được lớn hơn 200 ký tự'
    ]);
    $getimage = '';
    if ($Request->hasFile('image')) {
        $this->validate($Request, 
        [
          //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
          'image' => 'mimes:jpg,jpeg,png,gif|max:6144',
        ],      
        [
          //Tùy chỉnh hiển thị thông báo không thõa điều kiện
          'image.required' => "You must include image",
          'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
          'image.max' => 'Hình thẻ giới hạn dung lượng không quá 6M',
        ]);
        
        //Lưu hình ảnh vào thư mục public/upload/image
        $image = $Request->file('image');
        $getimage = time().'_'.$image->getClientOriginalName();
        $destinationPath = public_path('upload/blogs');
        $image->move($destinationPath, $getimage);
    }

    try{
      $news = new news;
      $news->id_category = $Request->id_category;
      $news->id = 1;
      $news->title=$Request->title;
      $news->image=$getimage;
      $news->details=$Request->details;
      $news->save();
      return redirect('admin/news/get')->with('thongbao','bạn đã thêm thành công');
    }
    catch(Exception $e) {
      redirect ('admin/news/add')->with('thongbao','Lỗi:'.e.toString());
    }
  }

  public function update($id_news)
  {
    $news_category = news_category::all();
    $news = news::find($id_news);
    return view('Admin.pages.news.edit_news',['news'=>$news,'news_category'=>$news_category]);
  }

  public function postupdate(Request $Request, $id_news)
  {
    $this->validate($Request,[
      'title'=>'required:news,title|min:1|max:200',
      'details'=>'required|min:3',
    ],[
      'title.required'=>'Bạn chưa nhập tiêu đề',
      'details.required'=>'Bạn chưa nhập nội dung',
      'title.min'=>'password không được nhỏ hơn 3 kí tự',
      'title.max'=>'password không được lớn hơn 200 ký tự'
    ]);
    $getimage = '';
    if ($Request->hasFile('image')) {
      $this->validate($Request, 
      [
        //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
        'image' => 'mimes:jpg,jpeg,png,gif|max:6144',
      ],      
      [
        //Tùy chỉnh hiển thị thông báo không thõa điều kiện
        'image.required' => "You must include image",
        'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
        'image.max' => 'Hình thẻ giới hạn dung lượng không quá 6M',
      ]);
      //Lưu hình ảnh vào thư mục public/upload/image
      $image = $Request->file('image');
      $getimage = time().'_'.$image->getClientOriginalName();
      $destinationPath = public_path('upload/blogs');
      $image->move($destinationPath, $getimage);
    }
    try{
      $news= news::find($id_news);
      $news->id_category = $Request->id_category;
      $news->id = 1;
      $news->title=$Request->title;
      $news->image=$getimage;
      $news->details=$Request->details;
      $news->save();
      return redirect('admin/news/get')->with('thongbao','bạn đã sửa thành công');
    }
    catch(Exception $e) {
      return redirect('admin/news/edit_news')->with('thongbao','Lỗi');
    }
  }
  public function delete($id_news)
  {
    $news = news::find($id_news);
    $news->delete();
    return redirect('admin/news/get')->with('thongbao','Bạn đã xóa thành công');
  }
  public function searchData(Request $Request)
  {
    $title = '%'.$Request->value."%";
    $blog = news::where('title','like',$title)->get();
    return ['data'=>$blog,'name'=>'blog'];
  }
}
