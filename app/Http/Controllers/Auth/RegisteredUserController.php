<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Models\UserDetails;
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
        return view('frontends.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email','unique:'.User::class],
            'number' => ['required', 'string', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::min(5)],
        ]);
        
        $id = IdGenerator::generate(['table'=>'users','field'=>'user_id','length' => 10, 'prefix' =>'IDC-']);
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'number'    => $request->number,
            'user_id'   => $id,
            'password'  => Hash::make($request->password),
        ]);
        UserDetails::create([
            'public_id'     => $id,
            'public_name'   => $request->name,
            'public_mail'   => $request->email,
            'public_number' => $request->number,
        ]);

        event(new Registered($user));
        Auth::login($user);
        $notification = array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );
        return redirect(route('dashboard', absolute: false))->with($notification);
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'number' => ['required', 'string', 'numeric','min:11','unique:'.User::class],
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
        $id = IdGenerator::generate(['table'=>'users','field'=>'user_id','length' => 10, 'prefix' =>'MJT-']);
        $user = User::create([
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
        $getStatus = User::select('status')->where('id', $id)->first();
        if($getStatus->status=='public'){
            $status = 'private';
        }else{
            $status = 'public';
        }
        User::where('id', $id)->update(['status'=>$status]);
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
