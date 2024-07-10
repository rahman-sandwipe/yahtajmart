<?php

namespace App\Http\Controllers\Backend;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedback=Feedback::with('user')->latest()->get();
        return view('backends.pages.feedback.index',compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.pages.feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'thumb'=> ['required', 'mimes:jpeg,jpg,png,gif', 'max:10000'] // max 10000kb
        ]);
        $id = IdGenerator::generate(['table'=>'feedback','field'=>'feedback_id','length' => 10, 'prefix' =>'FB-']);
        // ======= store data ======= //
        $data=$request->all();
        // ======= store data ======= //
        if($request->hasFile('thumb')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('thumb')->getClientOriginalExtension();
            $img = $manager->read($request->file('thumb'));
            $img = $img->resize(300, 250);
            $img->toJpeg(80)->save(base_path('public/uploads/testimonials/testimonial_'.$name_gen));
            $save_url = 'uploads/testimonials/testimonial_'.$name_gen;
            $data['thumb']=$save_url;
        } // endif ==========
        // ======= store data ======= //
        $user = Auth::user();
        $data['author_id']= $user->id;
        $data['feedback_id']=$id;
        $status=Feedback::create($data);
        if($status){
            return redirect()->route('feedback.index')->with('success','Data successfully inserted!');
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
        $getData=Feedback::find($id);
        return view('backends.pages.feedback.edit', compact('getData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $getData=Feedback::find($id);
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
                $img = $img->resize(300, 250);
                $img->toJpeg(80)->save(base_path('public/uploads/testimonials/testimonial_'.$name_gen));
                $save_url = 'uploads/testimonials/testimonial_'.$name_gen;
                $data['thumb']=$save_url;
            } // endif ==========
            $getData->fill($data)->save();
            return redirect()->route('feedback.index')->with('success', 'Feedback successfully updated!');
        }else{
            return back()->with('errors','Data not found!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $getData=Feedback::find($id);
        unlink($getData->thumb);
        if (empty($getData)) {
            abort(404);
        }
        $getData->delete();
        return back()->with('success','Successfully deleted');
    }

    /**
     * Changes the specified resource from storage.
     */
    public function status(string $id)
    {
        $getStatus = Feedback::select('status')->where('id', $id)->first();
        if($getStatus->status=='public'){
            $status = 'private';
        }else{
            $status = 'public';
        }
        $msgstatus=Feedback::where('id', $id)->update(['status'=>$status]);
        if($msgstatus){
            return redirect()->back()->with('success', 'Status successfylly updated!');
        }else{
            return redirect()->back()->with('error', 'Status updated fail, Pleae try again!');
        }
    }
}
