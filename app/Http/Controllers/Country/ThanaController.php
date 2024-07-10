<?php

namespace App\Http\Controllers\Country;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Country\Thana;
use App\Models\Country\District;
use App\Models\Country\Division;
use App\Http\Controllers\Controller;

class ThanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thanas=Thana::with('division','district')->latest()->get();
        $districts=District::latest()->get();
        $divisions=Division::latest()->get();
        return view('backends.pages.area.thana',compact('divisions','districts','thanas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:'.Thana::class]
        ]);// ======= store data ======= //
        $slug=Str::slug($request->input('name'));
        $product = new Thana;
        $product->name      = $request->name;
        $product->div_id    = $request->div_id;
        $product->dist_id   = $request->dist_id;
        $product->status    = $request->status;
        $product->slug      = $slug;
        $product->save();

        $notification = array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
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

    public function destroy(string $id)
    {
        $getData=Thana::find($id);
        $getData->delete();
        $notification = array(
            'message' => 'Successfully Deleted!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    /**
     * change status the specified resource from storage.
     */
    public function status(string $id)
    {
        $getStatus = Thana::find($id);
        if($getStatus->status=='public'){
            $status = 'private';
        }else{
            $status = 'public';
        }
        Thana::find($id)->update(['status'=>$status]);
        $notification = array(
            'message' => 'Successfully Updated!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
