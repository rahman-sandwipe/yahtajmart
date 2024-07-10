<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Auth\Admin;
use App\Models\Category;
use App\Models\Country\District;
use App\Models\Country\Division;
use App\Models\Country\Thana;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return redirect()->route(Auth::guard('admin')->user()->role);
    }
    public function admin(){
        $pro=Product::where(['status'=>'public'])->latest()->get();
        $cat=Category::where(['status'=>'public'])->latest()->get();
        $div=Division::where(['status'=>'public'])->latest()->get();
        $dis=District::where(['status'=>'public'])->latest()->get();
        $upa=Thana::where(['status'=>'public'])->latest()->get();
        $usr=User::where(['status'=>'public'])->latest()->get();
        $adm=Admin::where(['status'=>'public'])->latest()->get();
        return view('backends.pages.dashboard',
        compact('pro','cat','div','dis','upa','usr','adm'));
    }
}
