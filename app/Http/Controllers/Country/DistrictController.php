<?php

namespace App\Http\Controllers\Country;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Country\District;
use App\Models\Country\Division;
use App\Http\Controllers\Controller;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts=District::with('division')->latest()->get();
        $divisions=Division::latest()->get();
        return view('backends.pages.area.district',compact('divisions','districts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:'.District::class]
        ]);// ======= store data ======= //
        $slug=Str::slug($request->input('name'));
        $product = new District;
        $product->name = $request->name;
        $product->div_id = $request->div_id;
        $product->status = $request->status;
        $product->slug = $slug;
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $getData=District::find($id);
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
        $getStatus = District::find($id);
        if($getStatus->status=='public'){
            $status = 'private';
        }else{
            $status = 'public';
        }
        District::find($id)->update(['status'=>$status]);
        $notification = array(
            'message' => 'Successfully Updated!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
