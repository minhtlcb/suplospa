<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Str;
use App\trademark;
use App\product_type;
use App\image_product;
use Session;
class ProductController extends Controller
{
    //
      public function get()
    {
      $image_product=image_product::all();
    	$product= product::paginate(10);
    
       	return view('Admin.pages.product.product',['product'=>$product,'image_product'=>$image_product]);
    }


    public function add()
    {
       $trademark=trademark::all();
       $product_type=product_type::all();
    	return view('Admin.pages.product.new',['trademark'=>$trademark,'product_type'=>$product_type]);
    }

       public function postadd(Request $Request)
    {
      
    	
//        $this->validate($Request,[
//            'name'=>'required|unique:product,name|min:1|max:200',
          
//            ],[
//            'name.required'=>'Bạn chưa nhập tiêu đề',
//             'name.unique'=>'Name đã tồn tại',
             
//             ]);
//      try{
//            $product= new product;

           
//            $product->name=$Request->name;

       
        


//            $product->save();
//         return redirect('admin/product/get')->with('thongbao','bạn đã thêm thành công');
// }
// catch(Exception $e) {
// 	redirect ('admin/product/get')->with('thongbao','Lỗi');

//     }


    //$i = DB::table('goodsreceiveheader')->insertGetId($data);
         
// $files = $Request->file('image');
$this->validate($Request,[
           'name'=>'required|unique:product,name|min:1|max:200',
           'long_description'=>'required',
           'image'=>'required',
           'sku'=>'unique:product,sku',
  
           ],[
           'name.required'=>'Bạn chưa nhập tiêu đề',
           'name.unique'=>'Name đã tồn tại',
           'sku.unique'=>'SKU đã tồn tại',
            'image.required'=>"image không được để trống",
            'long_description.required'=>'long_description không được để trống',
          
            ]);
       try{
           $product= new product;
           $product->id_types=$Request->id_types;
           $product->id_trademark=$Request->id_trademark;
           $product->sku=$Request->sku;
           $product->name=$Request->name;
           $product->price=$Request->price;
          $product->price_comparison=$Request->price_comparison;
          $product->short_description=$Request->short_description;
           $product->long_description=$Request->long_description;
           $product->quantity=$Request->quantity;
          $product->discount=$Request->discount;
           if($Request->new==true)
            {
             $product->new=1;
            }
           else
           {
            $product->new=0;
            }
            
   
           if($Request->hasFile('image'))
           {
             foreach ($Request->file('image') as $file)
             {

            // $file = $Request->file('image');
            $format= $file->getClientOriginalExtension();
            if($format != 'jpg' && $format != 'png' && $format != 'jpeg' && $format !='mp4')
            {
               return redirect('admin/product/add')->with('thongbao','bạn chỉ được chọn file jpg,png,jpeg,mp4');
            }
              
           

            $name = $file->getClientOriginalName();
            $image = str::random(5)."_".$name;
            $data[] = $image;
            while (file_exists("public/upload/product/".$image)) {
              $image = str::random(5)."_".$name;
               $data[] = $image;
            }
            //unlink("public/upload/product/".$product->image);
            $file->move("public/upload/product",$image);
            $product->image=json_encode($data);;
             }
           }
           $product->save();
        return redirect('admin/product/get')->with('thongbao','Bạn đã thêm thành công');
}
catch(Exception $e) {
  redirect ('admin/product/add')->with('thongbao','Lỗi');

    }
// if($Request->hasFile('image'))
// {
//     foreach ($files as $file) {
//            $name=$file->getClientOriginalName();
//             $data[] = $name; 
//     }
// }
//     $file= new image_product();
//      $file->image=json_encode($data);
//      $file->save();

// if($Request->new==true)
// {
//   echo "fr";
// }
// else
// {
//   echo 'd';
// }
   }




     public function update($id_product)
    {
    	   $trademark=trademark::all();
       $product_type=product_type::all();
    	$product = product::find($id_product);
    	return view('Admin.pages.product.update',['product'=>$product,'trademark'=>$trademark,'product_type'=>$product_type]);
    }

    public function postupdate(Request $Request, $id_product)
    {
    $this->validate($Request,[
           'name'=>'required|min:1|max:200',
           'long_description'=>'required',
          
           
  
           ],[
           'name.required'=>'Bạn chưa nhập tiêu đề',
           
           
            'long_description.required'=>'long_description không được để trống',
          
            ]);
       try{
           $product= product::find($id_product);
           $product->id_types=$Request->id_types;
           $product->id_trademark=$Request->id_trademark;
           $product->sku=$Request->sku;
           $product->name=$Request->name;
           $product->price=$Request->price;
          $product->price_comparison=$Request->price_comparison;
          $product->short_description=$Request->short_description;
           $product->long_description=$Request->long_description;
           $product->quantity=$Request->quantity;
            $product->discount=$Request->discount;
           
           if($Request->new==true)
            {
             $product->new=1;
            }
           else
           {
            $product->new=0;
            }
            
   
           if($Request->hasFile('image'))
           {
             foreach ($Request->file('image') as $file)
             {

            // $file = $Request->file('image');
            $format= $file->getClientOriginalExtension();
            if($format != 'jpg' && $format != 'png' && $format != 'jpeg' && $format !='mp4')
            {
               return redirect('admin/product/add')->with('thongbao','bạn chỉ được chọn file jpg,png,jpeg,mp4');
            }
              
           

            $name = $file->getClientOriginalName();
            $image = str::random(5)."_".$name;
            $data[] = $image;
            while (file_exists("public/upload/product/".$image)) {
              $image = str::random(5)."_".$name;
               $data[] = $image;
            }
            foreach($arr = json_decode($product->image, true) as $key=>$val)
             {
                 unlink("public/upload/product/".$val);
              }
             

            
            $file->move("public/upload/product",$image);
            $product->image=json_encode($data);;
             }
           }
           $product->save();
        return redirect('admin/product/get')->with('thongbao','Bạn đã thêm thành công');
}
catch(Exception $e) {
  redirect ('admin/product/add')->with('thongbao','Lỗi');

    }
    }
     public function delete($id_product)
    {
    	$product = product::find($id_product);
    	 foreach($arr = json_decode($product->image, true) as $key=>$val)
             {
                 unlink("public/upload/product/".$val);
              }
    	$product->delete();
    	return redirect('admin/product/get')->with('thongbao','Bạn đã xóa thành công');
    }



    public function product()
    {
      $trademark =trademark::all();
      $product_type=product_type::all();


      
      






      $product = product::where('new',1)->orwhere('new',0)->orderBy('new', 'desc')->limit(12)->get();

   






      return view('Home.pages.product.product',['product'=>$product,'trademark'=>$trademark,'product_type'=>$product_type]);
    }
    
      public function productdetails($id_product)
    {
        //Session::flush();
      $product = product::find($id_product);
      $relate=product::where('id_types',$product->product_type->id_types)->where('id_product','<>',$id_product)->limit(4)->get();


          $view = Session::get('view');
                        $view[] = array
                                  (
                                      'id'=>$product->id_product,
                                  );
                                   Session::put('view', $view);
                         $n=count($view);
                      // echo $n;
                          foreach ($view as $id => $val) 
                                 {
                                 
                                    # code...
                                  
                                  if($n>4)
                                 {
                            
                           
                                   unset($view[$id]);

                                  Session::put('view', $view);
                                
$viewed_products=product::where('id_product',$id_product);
     // $listing = Listing:where('id', $id);
   foreach ($view as $key => $value) 
     //$i++;
     // ->where('field_1', red_1); // Desired output
    {
    foreach ($value as $val)
     {
     $viewed_products->orwhere('id_product',$value);
    }
  }
     

$results = $viewed_products->get();



      return view('Home.pages.product.productdetails',['product'=>$product,'relate'=>$relate,'view'=>$results]);
    
                               
                              
                                   

                        
                      }
                        else
                        {
                     

$viewed_products=product::where('id_product',$id_product);
     // $listing = Listing:where('id', $id);
   foreach ($view as $key => $value) 
     //$i++;
     // ->where('field_1', red_1); // Desired output
    {
    foreach ($value as $val)
     {
     $viewed_products->orwhere('id_product',$value);
    }
  }
     

$results = $viewed_products->get();



      return view('Home.pages.product.productdetails',['product'=>$product,'relate'=>$relate,'view'=>$results]);
    }
  }
}
    public function search()
    {
     


     $cat = Input::get('categories');

    $cat = (int) $cat;

    $vacancies = trademark::where('id_trademark', '=', $cat)->get();

    return View::make('Home.pages.product.product')->with('trademark', $vacancies); 
    }
    
}
