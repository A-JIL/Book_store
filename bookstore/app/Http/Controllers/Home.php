<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Products;
use App\Mail\WelcomeUser;
class Home extends Controller
{
  public function showLogin()
  {
      return view('login');
  }
  public function createAcc(){
      return view('createacc');
  }
  public function created(Request $req)
  {
    if(User::checkPhonenum($req->post('PhNum'))){
        session()->flash('error','waring');
        return redirect()->back();
      }
      else
      {
      $user= new User();
      $user->id=$req->post('PhNum');
      $user->Name=$req->post('Name');
      $user->Email=$req->post('Email');
      $user->Password=$req->post('Password');
      $user->Address="Add Address";
      $user->Pincode="pincode";
      $user->save();
      //Mail::to($user->Email)->send(new WelcomeUser($user));
      session()->flash('ok','waring');
      return redirect()->back();
      }
  }
  public function verify(Request $req)
  {
      //dd($req);
     if($req->post('Role')=="Admin")
     {  
       if ($admin=User::find($req->post('PhNum')))
       {
           if($admin->Password==$req->post("Password"))
           {
            $admin->Status=true;
            $admin->save();
            return view("Users.homepage",['user'=>$admin]);
           }
           else
           {
            session()->flash('password','waring');
            return redirect('/');
           }
       }
       else
       {
        session()->flash('id','waring');
        return redirect('/');
       }
     }
     else
     {
      // echo("else");
      
        if($user=User::find($req->post('PhNum')))
        {
          if($user->Password==$req->post('Password'))
          {

            $user->Status=true;
            $user->save();
           return view("Users.products",['user'=>$user,'pro'=>Products::all()]);

         }
          else
          {
            session()->flash('password','waring');
            return redirect('/');
          }

        }
        else
        {
          session()->flash('id','waring');
          return redirect('/');
        }
      
     }
  }
  public function userLogout($id)
  {
    $user=User::find($id);
    $user->status=false;
    $user->save();
    return redirect("/");
  }


}
