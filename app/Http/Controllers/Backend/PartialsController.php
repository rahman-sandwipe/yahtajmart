<?php

namespace App\Http\Controllers\Backend;

use App\Models\Social;
use App\Models\Settings;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\SupportCenter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PartialsController extends Controller
{
    public function settings() : View {
        $socials=Social::latest()->get();
        $config=Settings::find(1)->first();
        $getData=SupportCenter::find(1)->first();
        return view('backends.pages.settings.partialssettings', compact('socials','config','getData'));
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

    public function socialInsert(Request $request){
        $request->validate([
            'icon'=> ['required', 'mimes:jpeg,png,jpg,gif,svg'] // max 10000kb
        ]);
        $request->validate([
            'name'=>'required',
            'icon'=>'required',
            'link'=>'required'
        ]);
        if($request->hasFile('icon')) {
            $fev_manager = new ImageManager(new Driver());
            $icon_name = uniqid().'.'.$request->file('icon')->getClientOriginalExtension();
            $fev_img = $fev_manager->read($request->file('icon'));
            $fev_img->toJpeg(80)->save(base_path('public/icons/social_'.$icon_name));
            $save_icon = 'icons/social_'.$icon_name;
            // $data['icon']=$save_icon;
        } // endif ==========

        //insert data
        $data = new Social;
        $data->name = $request->name;
        $data->icon = $save_icon;
        $data->link = $request->link;
        $data->save();
        $notification = array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function supportCenter(Request $request) {
        $getData=SupportCenter::find(1);
        if($getData){
            // ======= update data ======= //
            $data=$request->all();
            $getData->fill($data)->save();
            
            $notification = array(
                'message' => 'Successfully Done',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
    }


    // /get subdistrict
    public function getDist($div_id)
    {
        // $sub=Division::find($div_id);
        $sub=DB::table('districts')->where('div_id',$div_id)->get();
        return response()->json($sub);
    }

    public function login(){
        $notification = array(
            'message' => 'Credentials is logout!',
            'alert-type' => 'success'
        );
        return Redirect(Route('home'))->with($notification);
    }
}
