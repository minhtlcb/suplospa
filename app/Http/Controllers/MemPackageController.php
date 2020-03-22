<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\membership_pakage;
class MemPackageController extends Controller
{
  public function get()
  {
    $membership_pakage = membership_pakage::paginate(10);
    return view('Admin.pages.membership_package.membership_package',['membership_pakage'=>$membership_pakage]);
  }

  public function add()
  {
    return view('Admin.pages.membership_package.create_mempak');
  }

  public function postadd(Request $Request)
  {
    $this->validate($Request,[
      'name'=>'required|min:1|max:200',
      'description'=>'required|min:3',
    ],[
      'name.required'=>'Bạn chưa nhập tên gói',
     
      'description.required'=>'Bạn chưa nhập nội dung',
      'name.min'=>'password không được nhỏ hơn 3 kí tự',
      'name.max'=>'password không được lớn hơn 200 ký tự'
    ]);
  
    if ($Request->hasFile('image')) 
    {
       $membership_pakage = new membership_pakage;
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
        $destinationPath = public_path('upload/membership_package');
        $image->move($destinationPath, $getimage);
          $membership_pakage->image=$getimage;
    }

   
     
      $membership_pakage->id_package = $Request->id_package;
      $membership_pakage->price = $Request->price;
      $membership_pakage->name=$Request->name;
   
    

      $membership_pakage->description=$Request->description;
         $membership_pakage->detail=$Request->detail;
      $membership_pakage->save();
      return redirect('admin/membership_pakage/get')->with('thongbao','bạn đã thêm thành công');
  
  }

  public function update($id_package)
  {
    $membership_pakage = membership_pakage::find($id_package);
    return view('Admin.pages.membership_package.edit_mempak',['membership_pakage'=>$membership_pakage]);
  }

  public function postupdate(Request $Request, $id_package)
  {

  $membership_pakage= membership_pakage::find($id_package);
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
        $getimage='';
        $image = $Request->file('image');
        $getimage = time().'_'.$image->getClientOriginalName();
        $destinationPath = public_path('upload/membership_package');
        $image->move($destinationPath, $getimage);
       $membership_pakage->image=$getimage;
    }

    
      $membership_pakage->id_package = $Request->id_package;
      $membership_pakage->price = $Request->price;
      $membership_pakage->name=$Request->name;
     
      $membership_pakage->description=$Request->description;
       $membership_pakage->detail=$Request->detail;
      $membership_pakage->save();
      return redirect('admin/membership_pakage/get')->with('thongbao','bạn đã thêm thành công');
    
  
  }
  public function delete($id_package)
  {
    $membership_pakage = membership_pakage::find($id_package);
    $membership_pakage->delete();
    return redirect('admin/membership_pakage/get')->with('thongbao','Bạn đã xóa thành công');
  }
}
