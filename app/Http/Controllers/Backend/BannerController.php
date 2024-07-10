<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners=Banner::latest()->get();
        return view('backends.pages.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.pages.Banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:'.Banner::class],
            'slug' => ['required', 'string', 'lowercase', 'max:255', 'unique:'.Banner::class],
            'thumb'=> ['required', 'mimes:jpeg,jpg,png,gif', 'max:10000'] // max 10000kb
        ]);
        $id = IdGenerator::generate(['table'=>'banners','field'=>'public_id','length' => 10, 'prefix' =>'BID-']);
        // ======= store data ======= //
        $data=$request->all();
        // ======= store data ======= //
        if($request->hasFile('thumb')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('thumb')->getClientOriginalExtension();
            $img = $manager->read($request->file('thumb'));
            $img = $img->resize(756, 312);
            $img->toJpeg(80)->save(base_path('public/uploads/partials/b_thumb_'.$name_gen));
            $save_url = 'uploads/partials/b_thumb_'.$name_gen;
            $data['thumb']=$save_url;
        } // endif ==========
        // ======= store data ======= //
        $data['thumb']=$save_url;
        $data['public_id']=$id;
        $status=Banner::create($data);
        if($status){
            return redirect()->route('banner.index')->with('success','Data successfully inserted!');
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
        $getData=Banner::find($id);
        return view('backends.pages.banner.edit', compact('getData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $getData=Banner::find($id);
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
                $img = $img->resize(756, 312);
                $img->toJpeg(80)->save(base_path('public/uploads/partials/b_thumb_'.$name_gen));
                $save_url = 'uploads/partials/b_thumb_'.$name_gen;
                $data['thumb'] = $save_url;
            } // endif ==========
            $getData->fill($data)->save();
            return redirect()->route('banner.index')->with('success', 'Banner successfully updated!');
        }else{
            return back()->with('errors','Data not found!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $getData=Banner::find($id);
        unlink($getData->thumb);
        if (empty($getData)) {
            abort(404);
        }
        $getData->delete();
        return back()->with('success','Successfully deleted data');
    }
    
    /**
     * change status the specified resource from storage.
     */
    public function status(string $id)
    {
        $getStatus = Banner::select('status')->where('id', $id)->first();
        if($getStatus->status=='public'){
            $status = 'private';
        }else{
            $status = 'public';
        }
        $msgstatus=Banner::where('id', $id)->update(['status'=>$status]);
        if($msgstatus){
            return redirect()->back()->with('success', 'Status successfylly updated!');
        }else{
            return redirect()->back()->with('error', 'Status updated fail, Pleae try again!');
        }
    }
}
