<?php

namespace App\Http\Controllers;

use App\Models\blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class front extends Controller
{
    public function __invoke(Request $request)
    {
        //
    }

    public function phone_price(Request $request){
         $data = $request;
         $user=$data->username;
         $detail=DB::table('customers')->where('username',$user)->first();
        
         return view('front/phone_price', ['data' => $data,'detail' => $detail]);
    }
    public function user_login(){
        return view('front/user_login');
    }

    public function price_generate(){
      return view('front/phone_price');
    }

    public function login(Request $request){
        $request->validate([
           'username'=>'required',
           'password'=>'required'
          ]);
          
          $user = DB::table('customers')->where('username',$request->username)->first();
          
          if($user){
            $password = sha1($request->password);
            if($user->password == $password){
              $request->session()->put('LoggedUser',$user->username);
              return redirect('/sell-phone/smart-phone');
            }else{
              return redirect()->back()->with('fail','Wrong Password! Try again');
            }
          }else{
            return redirect()->back()->with('fail','Email not matched! Try again');
          }
      }
      
      public function logout(){
         if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
         }
      } 

}