<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache; 
// use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function view(Request $request) {
        $userID = Cache::get('userID');
        $role = Cache::get('role');
        dd('user '.$userID ." role ". $role) ;       
        return view("login");
    }
    public function submit(Request $request) {
    
       $user = User::where("userID", $request->input("ID"))->first();
       if(empty($user)) {  
            return redirect()->back()->with("error"," No user Found ");
        }

        if($request->input("password") != $user->password) { 
            return redirect()->back()->with("error","Please Check your password");
        }

        // if(!Hash::check($request->input("password"), $user->password)) {
        //     return redirect()->back()->with("error", "Please check your password.");
        // }

         Cache::forever('userID', $user->userID);
         Cache::forever('role', $user->role);

         return redirect()->route('dashboard'); 
    }
}
