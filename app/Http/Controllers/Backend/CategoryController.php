<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::latest()->get();
        return view('backends.pages.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:'.Category::class],
            'slug' => ['required', 'string', 'lowercase', 'max:255', 'unique:'.Category::class],
            'thumb'=> ['required', 'mimes:jpeg,jpg,png,gif', 'max:10000'] // max 10000kb
        ]);
        $id = IdGenerator::generate(['table'=>'categories','field'=>'public_id','length' => 10, 'prefix' =>'CID-']);
        // ======= store data ======= //
        $data=$request->all();
        // ======= store data ======= //
        if($request->hasFile('thumb')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('thumb')->getClientOriginalExtension();
            $img = $manager->read($request->file('thumb'));
            $img = $img->resize(80, 80);
            $img->toJpeg(80)->save(base_path('public/uploads/partials/cat_thumb_'.$name_gen));
            $save_url = 'uploads/partials/cat_thumb_'.$name_gen;
            $data['thumb']=$save_url;
        } // endif ==========
        // ======= store data ======= //
        $data['thumb']=$save_url;
        $data['public_id']=$id;
        $status=Category::create($data);
        if($status){
            return redirect()->route('category.index')->with('success','Data successfully inserted!');
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
        $getData=Category::find($id);
        return view('backends.pages.category.edit', compact('getData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $getData=Category::find($id);
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
                $img = $img->resize(80, 80);
                $img->toJpeg(80)->save(base_path('public/uploads/partials/cat_thumb_'.$name_gen));
                $save_url = 'uploads/partials/cat_thumb_'.$name_gen;
                $data['thumb'] = $save_url;
            } // endif ==========
            $getData->fill($data)->save();
            $notification = array(
                'message' => 'Category successfully updated!',
                'alert-type' => 'success'
            );
            return redirect()->route('category.index')->with($notification);
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
        $getData=Category::find($id);
        unlink($getData->thumb);
        if (empty($getData)) {
            abort(404);
        }
        $getData->delete();
        $notification = array(
            'message' => 'Successfully deleted category data',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }
    
    /**
     * change status the specified resource from storage.
     */
    public function status(string $id)
    {
        $getStatus = Category::select('status')->where('id', $id)->first();
        if($getStatus->status=='public'){
            $status = 'private';
        }else{
            $status = 'public';
        }
        $msgstatus=Category::where('id', $id)->update(['status'=>$status]);
        if($msgstatus){
            $notification = array(
                'message' => 'Status successfully updated',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Status updated fail, Pleae try again!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }
}
