<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function myProfile($id){
        return view('Users.myprofile',['user'=>User::findOrFail($id)]);
    }
    public function updateProfile(Request $req,$id){
        //dd($req);
        $user= User::findOrFail($id);
        $user->Name=$req->post('Name');
        $user->Email=$req->post('Email');
        $user->Address=$req->post('Address');
        $user->pincode=$req->post('Pincode');
        $user->save();
        session()->flash('ok','waring');
        return redirect()->back();


    }
}
