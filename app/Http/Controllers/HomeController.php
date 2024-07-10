<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Video;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() : View {
        $settings       = Settings::where('id', 1)->first();
        $testimonials   = Feedback::where(['status'=>'public'])->latest()->limit(7)->get();
        $blogs          = Blog::with('user','category')->where(['status'=>'public'])->latest()->limit(3)->get();
        $video01        = Video::with('user','category')->where(['status'=>'public'])->latest()->first();
        $video02        = Video::with('user','category')->where(['status'=>'public'])->latest()->skip(1)->first();
        $video03        = Video::with('user','category')->where(['status'=>'public'])->latest()->skip(2)->first();
        $banners        = Banner::where(['status'=>'public'])->latest()->get();
        $categories     = Category::where(['status'=>'public'])->latest()->limit(6)->get();
        $products       = Product::with('user','category','brand')->where(['status'=>'public'])->latest()->paginate(10);
        return view('frontends.pages.home',
        compact('settings','testimonials','blogs','video01','video02','video03','banners','categories','products'));
    }
    
    // CategoryController
    public function category($slug){
        $category = Category::where('slug',$slug)->first();
        $products = Product::with('user','category','brand')->where('cat_id',$category->id)->latest()->paginate(12);
        return view('frontends.pages.category', compact('category','products'));
    }
    // CategoryController
    
    
    // ProductController
    public function product_details($slug){
        $product = Product::with('user','category','brand')
        ->where('slug',$slug)->first();
        $related_products   = Product::with('user','category','brand')
        ->where('cat_id',$product->category->id)->orderBY('id','DESC')->limit(4)->get();
        return view('frontends.pages.product_details', compact('product','related_products'));
    }
    // ProductController
    
    
    // BlogController  =============
    public function blog() : View {
        $blogs          = Blog::with('user','category')->where(['status'=>'public'])->latest()->paginate(10);
        return view('frontends.pages.blog',
        compact('blogs'));
    }
    public function blog_details($slug){
        // Blog::find($slug)->increment('views');
        $blog_details   = Blog::with('user','category')->where('slug',$slug)->first();
        $blog_details->increment('views');
        $category       = Category::where(['status'=>'public'])->latest()->get();
        $products       = Product::where(['status'=>'public'])->orderBy('id','DESC')->take(5)->get();
        $photos         = Photo::where(['status'=>'public'])->orderBy('id','DESC')->take(5)->get();
        return view('frontends.pages.blog_details', compact('blog_details','category','products','photos'));
    }
    // BlogController  =============
    
    
    
    // contactsController  =============
    public function contacts() : View {
        return view('frontends.pages.contacts');
    }
    // aboutsController  =============
    public function abouts() : View {
        return view('frontends.pages.abouts');
    }
}
