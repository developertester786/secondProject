<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;
use App\User;
use Session;
use DB;

class Dashboard extends Controller
{
     /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     public function authenticated($request , $user){
   
        return redirect('dashboard') ;
    
}
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = Auth::user();
        $id = Auth::id();
         $users = DB::table('users')
        ->select('*')
        ->where('ID', $id)
        ->first();
        return view('dashboard/dashboard',['users'=>$users, 'title' => 'Dashboard']);
    }
    
    public function update_profile(Request $request){
        
        $request->validate([
            'name'              =>  'required',
            'profile'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        $file = $request->file('profile');
        $destinationPath = public_path().'/assets/admin/media';
        $file->move($destinationPath,$file->getClientOriginalName());
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->bio = $request->get('bio');
        $user->profile = $file->getClientOriginalName();
        $user->save();
        //return redirect('/profile');
        return redirect()->back()->withSuccess('Profile setting has been updated...');
        
    }
}
