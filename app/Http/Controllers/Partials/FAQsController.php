<?php

namespace App\Http\Controllers\Partials;

use App\Http\Controllers\Controller;
use App\Models\Partials\FAQs;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FAQsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $faqs=FAQs::all();
        return view('backends.pages.faqs.faqs', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('backends.pages.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question'  => ['required','string','unique:'.FAQs::class]
        ]);// ======= store data ======= //
        $faqs = new FAQs();
        $faqs->question  = $request->question;
        $faqs->answer    = $request->answer;
        $faqs->status    = $request->status;
        $faqs->save();

        $notification = array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );
        return redirect()->route('faqs.index')->with($notification);
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
        $faqs = FAQs::find($id);
        return view('backends.pages.faqs.edit', compact('faqs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $getData=FAQs::find($id);
        if($getData){
            // ======= update data ======= //
            $data=$request->all();
            $getData->fill($data)->save();
            $notification = array(
                'message' => 'Successfully updated!',
                'alert-type' => 'success'
            );
            return redirect()->route('faqs.index')->with($notification);
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
        //
    }
}
