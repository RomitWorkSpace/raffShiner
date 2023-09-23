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
    }
    public function user_login(){
        return view('front/user_login');
    }

}