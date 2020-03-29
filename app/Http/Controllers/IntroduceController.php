<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\introduce;
use Illuminate\Support\Str;

class IntroduceController extends Controller
{
  public function get(){
    $introduce = introduce::all();
    $count = $introduce->count();

    return view('Admin.pages.introduce.introduce',['introduce'=>$introduce,'count'=>$count]);
  }

  public function add(){
    $introduce = introduce::all();
    $count = $introduce->count();
    
    return view('Admin.pages.introduce.new_introduce',['countt'=>$count]);
  }

  public function postadd(Request $Request){
    $this->validate($Request,[
      'title'=>'required|min:1|max:200',
      'content'=>'required|min:3',
      'image'=>'required',
      'backgroup_image'=>'required',
      // 'image'=>'required|mimes:jpeg,jpg,png,mp4|max:1000',
      // 'backgroup_image'=>'required|mimes:jpeg,jpg,png,mp4|max:1000',
    ],[
      'title.required'=>'Bạn chưa nhập tiêu đề',
      'content.required'=>'Bạn chưa nhập nội dung',
      'image.required'=>"image không được để trống",
      'backgroup_image.required'=>'backgroup_image không được để trống',
      'title.min'=>'password không được nhỏ hơn 3 kí tự',
      'title.max'=>'password không được lớn hơn 200 ký tự'
    ]);

    try{
      $introduce= new introduce;
      $introduce->title=$Request->title;
      $introduce->content=$Request->content;

      if($Request->hasFile('image'))
      {
        $file = $Request->file('image');
        $format= $file->getClientOriginalExtension();
        if($format != 'jpg' && $format != 'png' && $format != 'jpeg' && $format !='mp4')
        {
          return redirect('admin/introduce/get')->with('thongbao','bạn chỉ được chọn file jpg,png,jpeg,mp4');
        }
        $name = $file->getClientOriginalName();
        $image = str::random(5)."_".$name;

        while (file_exists("public/upload/introduce/".$image)) {
          $image = str::random(5)."_".$name;
        }
        //unlink("public/upload/introduce/".$introduce->image);
        $file->move("public/upload/introduce",$image);
        $introduce->image=$image;
      }

      if($Request->hasFile('backgroup_image'))
      {
        $file = $Request->file('backgroup_image');
        $name = $file->getClientOriginalName();
        $backgroup_image = str::random(5)."_".$name;

        while (file_exists("public/upload/introduce/".$backgroup_image)) {
          $backgroup_image = str::random(5)."_".$name;
        }
        // unlink("public/upload/introduce/".$introduce->backgroup_image);
        $file->move("public/upload/introduce",$backgroup_image);
        $introduce->backgroup_image=$backgroup_image;
      }
      $introduce->save();

      return redirect('admin/introduce/get')->with('thongbao','bạn đã sửa thành công');
    }
    catch(Exception $e) {
      redirect ('admin/introduce/get')->with('thongbao','Lỗi');
    }
  }



  public function update($id_introduce){
    $introduce = introduce::find($id_introduce);
    return view('Admin.pages.introduce.update',['introduce'=>$introduce]);
  }



  public function postupdate(Request $Request,$id_introduce){
    $this->validate($Request,[
      'title'=>'required|min:1|max:200',
      'content'=>'required|min:3',
      // 'image'=>'required|mimes:jpeg,jpg,png,mp4|max:1000',
      // 'backgroup_image'=>'required|mimes:jpeg,jpg,png,mp4|max:1000',
    ],[
      'title.required'=>'Bạn chưa nhập tiêu đề',
      'content.required'=>'Bạn chưa nhập nội dung',
      'title.min'=>'password không được nhỏ hơn 3 kí tự',
      'title.max'=>'password không được lớn hơn 200 ký tự'
    ]);
    try{
    $introduce= introduce::find($id_introduce);
    $introduce->title=$Request->title;
    $introduce->content=$Request->content;

    if($Request->hasFile('image'))
    {
    $file = $Request->file('image');
    $format= $file->getClientOriginalExtension();
    if($format != 'jpg' && $format != 'png' && $format != 'jpeg' && $format !='mp4')
    {
    return redirect('admin/introduce/get')->with('thongbao','bạn chỉ được chọn file jpg,png,jpeg,mp4');
    }
    $name = $file->getClientOriginalName();
    $image = str::random(5)."_".$name;

    while (file_exists("public/upload/introduce/".$image)) {
    $image = str::random(5)."_".$name;
    }
    unlink("public/upload/introduce/".$introduce->image);
    $file->move("public/upload/introduce",$image);
    $introduce->image=$image;
    }
    if($Request->hasFile('backgroup_image'))
    {
    $file = $Request->file('backgroup_image');
    $name = $file->getClientOriginalName();
    $backgroup_image = str::random(5)."_".$name;

    while (file_exists("public/upload/introduce/".$backgroup_image)) {
    $backgroup_image = str::random(5)."_".$name;
    }
    unlink("public/upload/introduce/".$introduce->backgroup_image);
    $file->move("public/upload/introduce",$backgroup_image);
    $introduce->backgroup_image=$backgroup_image;
    }
    $introduce->save();
    return redirect('admin/introduce/get')->with('thongbao','bạn đã sửa thành công');
    }
    catch(Exception $e) {
    redirect ('admin/introduce/get')->with('thongbao','Lỗi');

    }
  }
}
