<?php

namespace App\Http\Controllers\Backend;

use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::latest()->get();
        return view('backends.pages.photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::latest()->get();
        return view('backends.pages.photo.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumb'=> ['required', 'mimes:jpeg,jpg,png,gif', 'max:2048'], // max 10000kb
            'images.*' => ['image', 'mimes:jpeg,png,jpg,gif','max:2048'] // Adjust max file size as neede
        ]);
        $id = IdGenerator::generate(['table'=>'photos','field'=>'public_id','length' => 10, 'prefix' =>'PID-']);
        $user = Auth::user();
        // ======= store data ======= //
        if($request->hasFile('thumb')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('thumb')->getClientOriginalExtension();
            $img = $manager->read($request->file('thumb'));
            $img = $img->resize(1024, 640);
            $img->toJpeg(80)->save(base_path('public/uploads/gallary/thumb_'.$name_gen));
            $save_url = 'uploads/gallary/thumb_'.$name_gen;
        } // endif ==========
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $img = $manager->read($image);
                $img->toJpeg(80)->save(base_path('public/uploads/gallary/img_'.$name_gen));
                $multiple_img = 'uploads/gallary/img_'.$name_gen;
            } // endif ==========
            // Save image to database
            Photo::create([
                'public_id' => $id,
                'author_id' => $user->id,
                'thumb'     => $save_url,
                'images'    => $multiple_img,
                'cat_id'    => $request->cat_id,
                'title'     => $request->title,
                'intro'     => $request->intro,
                'file_size' => $request->file_size,
                'r_price'   => $request->r_price,
                's_price'   => $request->s_price,
                'status'    => $request->status,
                'meta_tags' => $request->meta_tags,
                'meta_desc' => $request->meta_desc,
            ]);
        }
        return redirect()->route('photo.index')->with('success','Data successfully inserted!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
