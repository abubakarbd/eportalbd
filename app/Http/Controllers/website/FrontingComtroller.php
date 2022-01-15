<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Service;
use App\SubService;
use App\Notice;
use App\Product;
use App\Brand;

class FrontingComtroller extends Controller
{
	// Home Page Function
    public function index()
    {
        $sliders = Slider::where('status', 1)->get();
        $service = Service::where('status', 1)->get();
        $product = Product::where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();
        $brand = Brand::where('status', 1)->get();
    	return view('website.home', compact('sliders','service','brand','product'));
    }

    // Notice Page Function
    public function notice()
    {

        $notice = Notice::where('status', 1)->get();
    	return view('website.notice', compact('notice'));
    }

    //Product Page Fanction
    public function products()
    {
        $products = Product::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('website.products', compact('products'));
    }

     //Single Product Page Fanction
    public function singleProduct($id)
    {
        $single = Product::where('id', $id)->get();
        return view('website.product', compact('single'));
    }

    public function buyProduct($id)
    {
     $title = $id;
     return view('website.buy_product', compact('title'));
    }


    //E-Service Page Fanction
    public function service($id)
    {
        $service = SubService::where('service_id', $id)->get();
        
         return view('website.service', compact('service'));
        
        
    }

    public function Client($id)
    {
     $title = $id;
     return view('website.client', compact('title'));
    }
}
