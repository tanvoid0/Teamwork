<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Session;
class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('admin', 'DESC')->orderBy('name', 'ASC')->get();
        return view('admin.member.index', compact('users'));
        //return view('member.index', compact('users'));
//        return view('member.index');
    }

    public function create()
    {
        return view('admin.member.create');
    }
    public function store(Request $request)
    {
        $user = new User();
        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file->move('images/user/', $file->getClientOriginalName());
            $user->image = $file->getClientOriginalName();
        }
        $user->name = $request->name ;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->lolid = $request->lolid;
        $user->messenger = $request->messenger;
        $user->lane1 = $request->lane1;
        $user->lane2 = $request->lane2;
        $user->address = $request->address;
        $user->admin = $request->admin;

        $user->save();
        Session::flash("title", "Congratulations");
        Session::flash("result", "success");
        Session::flash("message", "Member has been Added");
        return redirect(route('member.index'));

    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.member.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file->move('images/user/', $file->getClientOriginalName());
            $user->image = $file->getClientOriginalName();
        }
        $user->name = $request->name ;
        $user->phone = $request->phone;
        $user->email = $request->email;
        if($request->password != ""){
            $user->password = Hash::make($request->password);
        }
        $user->lolid = $request->lolid;
        $user->messenger = $request->messenger;
        $user->lane1 = $request->lane1;
        $user->lane2 = $request->lane2;
        $user->address = $request->address;
        $user->admin = $request->admin;

        $user->save();

        Session::flash("title", "Congratulations!");
        Session::flash("result", "info");
        Session::flash("message", "Member information updated!");
        return redirect(route('member.index'));
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        Session::flash("title", "Sorry!");
        Session::flash("result", "warning");
        Session::flash("message", "Member has been Deleted!");
        return redirect(route('member.index'));
    }

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
        Session::flash("action", "member-signup");
        Session::flash("result", "success");
        return redirect()->back();
    }
}
