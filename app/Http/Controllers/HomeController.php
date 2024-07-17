<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Video;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Feedback;
use App\Models\Partials\FAQs;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() : View {
        $settings       = Settings::where('id', 1)->first();
        $blogs          = Blog::with('user','category')->where(['status'=>'public'])->latest()->limit(4)->get();
        $banners        = Banner::where(['status'=>'public'])->latest()->get();
        $categories     = Category::where(['status'=>'public'])->latest()->take(8)->get();
        $brands         = Brand::where(['status'=>'public'])->latest()->take(8)->get();
        
        // Recommend
        $recommendProd  = Product::with('user','category','brand')->where(['status'=>'public','condition'=>'Recommend'])->latest()->paginate(5);
        
        // New
        $newProd        = Product::with('user','category','brand')->where(['status'=>'public','condition'=>'New'])->latest()->paginate(5);
        
        // Best
        $bestProd       = Product::with('user','category','brand')->where(['status'=>'public','condition'=>'Best'])->latest()->paginate(5);
        
        // Sale
        $saleProd       = Product::with('user','category','brand')->where(['status'=>'public','condition'=>'Sale'])->latest()->paginate(5);
        
        return view('frontends.pages.home',
        compact(
        'settings',
        'blogs',
        'banners',
        'categories',
        'brands',
        'recommendProd','newProd','bestProd','saleProd'
    ));
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
    
    
    
    // FAQsController  =============
    public function faqs() : View {
        $FAQs=FAQs::where(['status'=>'public'])->orderBy('id','ASC')->get();
        return view('frontends.pages.partials.faqs', compact('FAQs'));
    }
    // contactsController  =============
    public function contacts() : View {
        $contacts=Contact::latest()->first();
        return view('frontends.pages.contacts', compact('contacts'));
    }
    // aboutsController  =============
    public function abouts() : View {
        return view('frontends.pages.abouts');
    }

    // ProductsController
    public function shops(){
        $products = Product::with('user','category','brand')
        ->where(['status'=>'public'])
        ->latest()
        ->paginate(15);
        return view('frontends.pages.shops', compact('products'));
    }
}
