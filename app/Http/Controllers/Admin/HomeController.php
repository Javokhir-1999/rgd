<?php

namespace App\Http\Controllers\Admin;

use App\Models\Posts;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Media;
use App\Models\Galleries;
use App\Models\Main;
use App\Models\Banner;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Banner $objBanner){
    	$posts_count = Posts::all()->count();
    	$products_count = Products::all()->count();
    	$orders_count = Orders::all()->count();
    	$media_count = Products::all()->count();
    	$gallery_count = Galleries::all()->count();
    	$media_count += $gallery_count;

        $banner = DB::table('banners')->get()->first();
        $main = DB::table('main')->get()->first();
        $about = DB::table('about')->get()->first();

    	return view('admin.home',[
    		'posts_count' => $posts_count,
    		'products_count' => $products_count,
    		'orders_count' => $orders_count,
    		'media_count' => $media_count,
            'banner' => $banner,
            'main' => $main,
            'about' => $about,
            'objBanner' => $objBanner,
    	]);
    }
    public function bannerSubmit(Request $r){
        $bannerTitle = $r->input('bannerTitle');
        $bannerDesc = $r->input('bannerDesc');
        $bannerCallText = $r->input('callTitle');
        $bannerCallNumber = $r->input('callNumber');


        DB::table('banners')->where('id', 1)->update([
            'title' => $bannerTitle,
            'desc' => $bannerDesc, 
            'call_text' => $bannerCallText,
            'call_number' => $bannerCallNumber, 
        ]);
        return redirect()->back()->withSuccess('Баннер обновлен!');

    }

    public function mainSubmit(Request $r){
        $adress = $r->input('adress');
        $work_time = $r->input('work_time');
        $tel_one = $r->input('tel_one');
        $tel_two = $r->input('tel_two');

        DB::table('main')->where('id', 1)->update([
            'adress' => $adress,
            'work_time' => $work_time, 
            'tel_one' => $tel_one,
            'tel_two' => $tel_two, 
        ]);
        return redirect()->back()->withSuccess('Основные Данные RGD обновлены!');

    }

    public function aboutSubmit(Request $r){
        $companyTitle = $r->input('companyTitle');
        $companyDesc = $r->input('companyDesc');



        DB::table('about')->where('id', 1)->update([
            'title' => $companyTitle,
            'desc' => $companyDesc, 
        ]);
        return redirect()->back()->withSuccess('О Компании обновлены!');

    }
}
