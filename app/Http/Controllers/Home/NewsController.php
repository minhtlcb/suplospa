<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\news;
use App\news_category;
class NewsController extends Controller
{
    public function get()
    {
    	$news=news::paginate(5);
  
    	return view('Home.pages.news.list_news',['news'=>$news]);
    }
    public function newsdetail($id_news)
    {
    	$newsdetail=news::find($id_news);
    	return view('Home.pages.news.newsdetail',['newsdetail'=>$newsdetail]);
    }
    
    public function newscategory($id_category)
    {
    	$news=news::where('id_category',$id_category)->paginate(5);
  
    	return view('Home.pages.news.list_news_newscategory',['news'=>$news]);
    }
}
