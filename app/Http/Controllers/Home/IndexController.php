<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //官网首页
    public function index(Request $request)
    {
        return view('Home.Index.index');
    }
    //新闻中心首页
    public function news()
    {
        return view('Home.News.index');
    }
    //加入我们页面
    public function join()
    {
        return view('Home.Join.index');
    }
    //加入我们页面
    public function detail()
    {
        return view('Home.News.news_details');
    }

}
