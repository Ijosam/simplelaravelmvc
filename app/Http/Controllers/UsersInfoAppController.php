<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersInfoApp;
use Illuminate\Support\Facades\Session;

class UsersInfoAppController extends Controller
{
function showusers(){
    $user = UsersInfoApp::all();
    return view('show', ['users'=>$user]);
}

function adduser(Request $request){
    $user = new UsersInfoApp;
    $user->name =$request->name;
    $user->email =$request->email;
    $user->phone =$request->phone;
    $user->save();
    $request->Session()->put('success', "New User created");
    return redirect('/adduser');
}

function delete($id){
    $user = UsersInfoApp::find($id);
    $user->delete();
    Session::put('success', "User Info Deleted");
    return redirect('/users');
    
 }
 
 function edit($id){
    $user = UsersInfoApp::find($id);
    return view('view', ['users'=>$user]);
    
}

function update(Request $request){
    $user = UsersInfoApp::find ($request->id);
    $user->name =$request->name;
    $user->email =$request->email;
    $user->phone =$request->phone;
    $user->save();
    $request->Session()->put('success', "User Details Updated");
    return redirect('/show');
}
}
