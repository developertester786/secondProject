<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
Use App\User;
use Session;
use DB;

class Listings extends Controller
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
         $listings = DB::table('listings')
        ->select('*')
        ->where('user_id', $id)
        ->get();
        return view('dashboard/listings',['listings'=>$listings, 'title'=>'Listings']);
        //return view('dashboard/listings',['title' => 'Listings']);
    }
    
    public function new_listing(){
        
        return view('dashboard/new-listing',['title' => 'Add New Listing']);
        
    }
    
    public function add_new_listing(Request $request){
        $user = Auth::user();
        $id = Auth::id();
        $request->validate([
        'listing_name'              =>  'required',
       'listing_video'          =>'required'
        
        ]);

       $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->input('listing_name')), '-'));
        $count = DB::table('listings')
                    ->where('slug', $slug)
                    ->count();
         if($count > 0){
             
             $slug = $slug.'_'.$count;
         } else{
            $slug = $slug; 
            
         }         
        $listing_name = $request->input('listing_name');
        $slug = $slug;
       $status = $request->input('listing_status');
        $file = $request->file('listing_video');
        
    
        if(!empty($file)){
            
        $file_name = $file->getClientOriginalName();
        $path = public_path().'/assets/admin/media/';
        
        $file->move($path, $file_name); 
        $file_array =  $file_name;
            
        }
           
            
        
        
       // $email = $request->input('email');
        $data=array('user_id'=>$id,'name'=>$listing_name,'slug'=>$slug,'media'=>$file_array,'status'=>$status);
        DB::table('listings')->insert($data);
        return redirect('/listings');
    }
    
      public function edit_listing($id){
      
       $list = DB::table('listings')
        ->select('*')
        ->where('id', $id)
        ->first();
        return view('dashboard/edit-listing',['listing'=>$list, 'title'=>'Edit Listing']);
       
   } 
      public function update_listing(Request $request, $id){
       
         $listing_name = $request->input('listing_name');
        $file = $request->file('listing_video');
        if(!empty($file)){
          $file_name = $file->getClientOriginalName();
            $path = public_path().'/assets/admin/media/';
             $file->move($path, $file_name); 
            $file_array = $file_name;
         }
       $status = $request->input('listing_status');
        DB::table('listings')
        ->where('id', $id)
        ->update([
        'name' => $listing_name,
        'media' =>  $file_array,
        'status' => $status
        
        ]);
        return redirect()->back()->withSuccess('Listing has been updated.');
       
   } 
   
    public function delete_listing($id){
       
        DB::table('listings')->where('id', $id)->delete();
        return redirect()->back()->withSuccess('Listing has been deleted.');
   }
   
}
