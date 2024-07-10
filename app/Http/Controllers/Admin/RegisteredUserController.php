<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Auth\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Intervention\Image\Drivers\Gd\Driver;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('backends.pages.users.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::min(5)],
        ]);

        if($request->hasFile('thumbnail')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('thumbnail')->getClientOriginalExtension();
            $img = $manager->read($request->file('thumbnail'));
            $img = $img->resize(300, 300);
            $img->toJpeg(80)->save(base_path('public/uploads/users/'.$name_gen));
            $save_url = 'uploads/users/'.$name_gen;
        } // endif ==========
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $save_url,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
    
    
    
    public function createUser(): View
    {
        return view('backends.pages.users.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeUser(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Admin::class],
            'number' => ['required', 'string', 'numeric','min:11','unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::min(5)],
        ]);

        //output: INV-000001
        if($request->hasFile('avatar')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('avatar')->getClientOriginalExtension();
            $img = $manager->read($request->file('avatar'));
            $img = $img->resize(300, 300);
            $img->toJpeg(80)->save(base_path('public/uploads/users/avatar_'.$name_gen));
            $save_url = 'uploads/users/avatar_'.$name_gen;
        } // endif ==========
        $id = IdGenerator::generate(['table'=>'admins','field'=>'user_id','length' => 10, 'prefix' =>'MJT-']);
        $user = Admin::create([
            'dob' => $request->dob,
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'address' => $request->address,
            'user_type' => $request->user_type,
            'user_status' => $request->user_status,
            'avatar' => $save_url,
            'user_id' => $id,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));

        return redirect(route('users'))->with('success','New user successfully created!');
    }
    /** Update the specified resource in status. */
    public function userStatus(string $id)
    {
        $getStatus = Admin::select('user_status')->where('id', $id)->first();
        if($getStatus->user_status=='public'){
            $user_status = 'private';
        }else{
            $user_status = 'public';
        }
        Admin::where('id', $id)->update(['user_status'=>$user_status]);
        return redirect()->back()->with('success', 'Status successfylly updated!');
    }
    /** Update the specified resource in status. */
    public function userType(string $id)
    {
        $getType = Admin::select('user_type')->where('id', $id)->first();
        if($getType->user_type=='user'){
            $user_type = 'admin';
        }else{
            $user_type = 'user';
        }
        Admin::where('id', $id)->update(['user_type'=>$user_type]);
        return redirect()->back()->with('success', 'Status successfylly updated!');
    }



    /**
     * Display the registration view.
     */
    public function users(): View
    {
        $users = User::latest()->get();
        return view('backends.pages.users.users', compact('users'));
    }
}
