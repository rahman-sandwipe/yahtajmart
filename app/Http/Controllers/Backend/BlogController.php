<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=Blog::latest()->get();
        return view('backends.pages.blog.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::latest()->get();
        return view('backends.pages.blog.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'headline' => ['required', 'string', 'max:255'],
            'thumb'=> ['required', 'mimes:jpeg,jpg,png,gif', 'max:10000'] // max 10000kb
        ]);
        $id = IdGenerator::generate(['table'=>'blogs','field'=>'public_id','length' => 12, 'prefix' =>'BID-']);
        // ======= store data ======= //
        $data=$request->all();
        // ======= store data ======= //
        if($request->hasFile('thumb')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('thumb')->getClientOriginalExtension();
            $img = $manager->read($request->file('thumb'));
            $img = $img->resize(1200, 730);
            $img->toJpeg(80)->save(base_path('public/uploads/articles/news_thumb_'.$name_gen));
            $save_url = 'uploads/articles/news_thumb_'.$name_gen;
            $data['thumb']=$save_url;
        } // endif ==========
        // ======= store data ======= //
        // ======= store data ======= //
        $slug=Str::slug($request->input('headline'));
        $slug_count=Blog::where('slug',$slug)->count();
        if($slug_count>0){
            $slug .=time().'-'.$slug;
        }
        $data['slug']=$slug;
        $data['public_id']=$id;
        $data['author_id']= Auth::user()->id;
        $status=Blog::create($data);
        if($status){
            return redirect()->route('blog.index')->with('success','Data successfully inserted!');
        }else{
            return back()->with('error','Data not inserted, Please try again!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $getData=Blog::find($id);
        $category=Category::latest()->get();
        return view('backends.pages.blog.edit', compact('getData','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $getData=Blog::find($id);
        unlink($getData->thumb);
        if (empty($getData)) {
            abort(404);
        }
        if($getData){
            // ======= update data ======= //
            $data=$request->all();
            if($request->hasFile('thumb')) {
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('thumb')->getClientOriginalExtension();
                $img = $manager->read($request->file('thumb'));
                $img = $img->resize(1200, 730);
                $img->toJpeg(80)->save(base_path('public/uploads/articles/news_thumb_'.$name_gen));
                $save_url = 'uploads/articles/news_thumb_'.$name_gen;
                $data['thumb']=$save_url;
            } // endif ==========
            $getData->fill($data)->save();
            return redirect()->route('blog.index')->with('success', 'Blog successfully updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $getData=Blog::find($id);
        unlink($getData->thumb);
        if (empty($getData)) {
            abort(404);
        }
        $getData->delete();
        return back()->with('success','Successfully deleted data');
    }

    /**
     * Changes the specified resource from storage.
     */
    public function status(string $id)
    {
        $getStatus = Blog::select('status')->where('id', $id)->first();
        if($getStatus->status=='public'){
            $status = 'private';
        }else{
            $status = 'public';
        }
        $msgstatus=Blog::where('id', $id)->update(['status'=>$status]);
        if($msgstatus){
            return redirect()->back()->with('success', 'Status successfylly updated!');
        }else{
            return redirect()->back()->with('error', 'Status updated fail, Pleae try again!');
        }
    }
}
