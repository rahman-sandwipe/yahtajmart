<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands=Brand::latest()->get();
        return view('backends.pages.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.pages.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:'.Brand::class],
            'slug' => ['required', 'string', 'lowercase', 'max:255', 'unique:'.Brand::class],
            'thumb'=> ['required', 'mimes:jpeg,jpg,png,gif', 'max:10000'] // max 10000kb
        ]);
        $id = IdGenerator::generate(['table'=>'brands','field'=>'brand_id','length' => 10, 'prefix' =>'BrID-']);
        // ======= store data ======= //
        $data=$request->all();
        // ======= store data ======= //
        if($request->hasFile('thumb')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('thumb')->getClientOriginalExtension();
            $img = $manager->read($request->file('thumb'));
            $img = $img->resize(300, 80);
            $img->toJpeg(80)->save(base_path('public/uploads/partials/br_thumb_'.$name_gen));
            $save_url = 'uploads/partials/br_thumb_'.$name_gen;
            $data['thumb']=$save_url;
        } // endif ==========
        // ======= store data ======= //
        $data['thumb']=$save_url;
        $data['brand_id']=$id;
        $status=Brand::create($data);
        if($status){
            return redirect()->route('brand.index')->with('success','Data successfully inserted!');
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
        $getData=Brand::find($id);
        return view('backends.pages.brand.edit', compact('getData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $getData=Brand::find($id);
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
                $img = $img->resize(300, 80);
                $img->toJpeg(80)->save(base_path('public/uploads/partials/br_thumb_'.$name_gen));
                $save_url = 'uploads/partials/br_thumb_'.$name_gen;
                $data['thumb'] = $save_url;
            } // endif ==========
            $getData->fill($data)->save();
            $notification = array(
                'message' => 'Brand successfully updated!',
                'alert-type' => 'success'
            );
            return redirect()->route('brand.index')->with($notification);
        }else{
            $notification = array(
                'message' => 'Data not found!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $getData=Brand::find($id);
        unlink($getData->thumb);
        if (empty($getData)) {
            abort(404);
        }
        $getData->delete();
        return back()->with('success','Successfully deleted category data');
    }
    
    /**
     * change status the specified resource from storage.
     */
    public function status(string $id)
    {
        $getStatus = Brand::select('status')->where('id', $id)->first();
        if($getStatus->status=='public'){
            $status = 'private';
        }else{
            $status = 'public';
        }
        $msgstatus=Brand::where('id', $id)->update(['status'=>$status]);
        if($msgstatus){
            return redirect()->back()->with('success', 'Status successfylly updated!');
        }else{
            return redirect()->back()->with('error', 'Status updated fail, Pleae try again!');
        }
    }
}