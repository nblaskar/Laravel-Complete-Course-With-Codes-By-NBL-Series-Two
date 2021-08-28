<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Import Auth Class
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    //1)Retrieving Currently Authenticated/logedin User Data
    // public function show_auth_user(){
    //     // Get Complete User Data
    //     // return Auth::user();
    //     // Get only User id
    //     // return Auth::id(); 
    //     // Get User Data by Column Name
    //     return Auth::user()->email;
    // }

    // Instead of Auth we can use Request to access the Authenticated User Data
    // public function show_auth_user(Request $request){
    //     // Get Complete User Data
    //     // return $request->user();
    //     // Get only User id
    //     // return $request->user()->id; 
    //     // Get User Data by Column Name
    //     return $request->user()->email; 
    // }


    // 2)To Check User is Authenticated or Not
    // public function check_auth_user(){
    //     if(Auth::check()){
    //         return "You are Authenticated User";
    //     }
    //     return "Unauthenticated User";
    // }
    // 6)Manual Logout Feature Creation
    public function manual_logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
