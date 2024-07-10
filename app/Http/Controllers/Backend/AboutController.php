<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $abouts = About::find(1);
        return view('backends.pages.partials.abouts',compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $getData=About::find(1);
        if($getData){
            // ======= update data ======= //
            $data=$request->all();
            $getData->fill($data)->save();
            return back()->with('success', 'Data successfully updated!');
        }else{
            return back()->with('errors','Data not found!');
        }
    }
}
