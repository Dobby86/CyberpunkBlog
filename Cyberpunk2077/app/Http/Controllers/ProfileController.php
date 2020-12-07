<?php

namespace App\Http\Controllers;
use App\User;
use Str;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function __construct() {
       $this -> middleware('auth');
   }  
   public function scegli() {
        return view('auth.profile');
   }
   public function aggiornaFoto(Request $request) {
       $validateFile = $request -> validate([
           'name' => 'required',
           'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
       ]);
       $user = User::findOrFail(auth() -> user() -> id);
       $user -> name = $validateFile['name'];

       $image = $request -> file('profile_image');
       $name = Str::slug($request->input('name')).'_'.time();

       $folder = '/uploads/images/';
       
       $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

       
            $user -> profile_image = $filePath;
            $image -> storeAs($folder, $name.'.'. $image ->getClientOriginalExtension(), 'public' ); 

            $user -> save();

            return redirect() -> route('/');
       
   }

}
