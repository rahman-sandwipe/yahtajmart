<?php

namespace App\Http\Controllers\Partials;

use App\Models\Settings;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SettingsController extends Controller
{
    public function configSettings() : View {
        $config=Settings::latest()->first();
        return view('backends.pages.partials.config', compact('config'));
    }
    
    public function configUpdate(Request $request) {
        $getData=Settings::find(1);
        if($getData){
            // ======= update data ======= //
            $data=$request->all();
            if($request->hasFile('web_logo')) {
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('web_logo')->getClientOriginalExtension();
                $img = $manager->read($request->file('web_logo'));
                // $img = $img->resize(300, 70);
                $img->toJpeg(80)->save(base_path('public/uploads/settings/logo_'.$name_gen));
                $save_url = 'uploads/settings/logo_'.$name_gen;
                $data['web_logo']=$save_url;
            } // endif ==========
            if($request->hasFile('web_fevicon')) {
                $fev_manager = new ImageManager(new Driver());
                $fevicon_name = hexdec(uniqid()).'.'.$request->file('web_fevicon')->getClientOriginalExtension();
                $fev_img = $fev_manager->read($request->file('web_fevicon'));
                // $fev_img = $fev_img->resize(100, 100);
                $fev_img->toJpeg(80)->save(base_path('public/uploads/settings/fevicon_'.$fevicon_name));
                $save_fevicon = 'uploads/settings/fevicon_'.$fevicon_name;
                $data['web_fevicon']=$save_fevicon;
            } // endif ==========
            
            $getData->fill($data)->save();
            $notification = array(
                'message' => 'Successfully Done',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
    }
}
