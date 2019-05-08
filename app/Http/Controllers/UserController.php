<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
class UserController extends Controller
{
    public function signup(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->lolid = $request->lolid;
        $user->lane1 = $request->lane1;
        $user->lane2 = $request->lane2;
        $user->address = $request->address;

        $user->save();
        Session::flash("action", "user-signup");
        Session::flash("result", "success");
        return redirect()->back();
    }
}
