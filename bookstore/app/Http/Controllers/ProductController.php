<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\Order;
use Mail;
use App\Mail\Kindle;

class ProductController extends Controller
{
    public function viewAllProducts($id)
    { 
      return view('Users.products',['user'=>User::findOrFail($id),'pro'=>Products::all()]);
    
    }

    public function viewNovels($id){
      return view('Users.Novels',['user'=>User::findOrFail($id),'pro'=>Products::all()]);
    }
    public function viewComics($id){
      return view('Users.Comics',['user'=>User::findOrFail($id),'pro'=>Products::all()]);
    }
    public function viewKnowledge($id){
      return view('Users.Knowledge',['user'=>User::findOrFail($id),'pro'=>Products::all()]);
    }
    public function viewOthers($id){
      return view('Users.others',['user'=>User::findOrFail($id),'pro'=>Products::all()]);
    }
    

    public function buy($id,$pid){
        $pro=Products::findOrFail($pid);
      return view('Users.orderconfirm',['user'=>User::findOrFail($id),'pro'=>$pro]);  
    }
    public function pay($id,$pid){
      $pro=Products::findOrFail($pid);
      return view('Users.pay',['user'=>User::findOrFail($id),'pro'=>$pro]);
    }
    public function orderd($id,$pid){
      //sent mail product ordered
     $order=new Order();
     $pro=Products::findOrFail($pid);
     $order->Product_Id=$pid;
     $order->PRice=$pro->Price;
     $order->User_id=$id;
     $order->save();
     if(User::findOrFail($id)->Kindle_id!="null"){
      Mail::to(User::find($id)->Email)->send(new Kindle(User::find($id),Product::find($pid)->Name));
       }
      return view('Users.orderplaced',['order'=>$order,'user'=>User::findOrFail($id),'pro'=>$pro]);
     
    }
    public function myOrders($id){
      return view('Users.myorders',['user'=>User::findOrFail($id),'pro'=>Products::orderBy('id', 'desc')->get(),'order'=>Order::all()]); 
    }
    public function myPro($id){
      return view('Users.myproducts',['user'=>User::findOrFail($id),'pro'=>Products::all()]);
    
    }
    public function addProForm($id){
      return view('Users.addproduct',['user'=>User::findOrFail($id)]);
    }

    public function addingPro(Request $req,$id)
    {
     //dd($id);
      // $request->validate([
      //   'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      // ]);
      $product =new Products();
      $product->Name=$req->post('Name');
      $product->Price=$req->post('Price');
      $product->Desc=$req->post('Desc');
      $product->Category=$req->post('Category');
      $imagePath = $req->file('file');
      $imageName = $imagePath->getClientOriginalName();
      $destinationPath = public_path('/Products');
      $imagePath->move($destinationPath, $imageName);
      $product->Image=$imageName;
      //dd($product);
     $product->save();
     session()->flash('ok','waring');
     return redirect()->back();
    }
    public function myDelivery($id){
      return view('Users.mydelivery',['user'=>User::findOrFail($id),'pro'=>Products::orderBy('id', 'desc')->get(),'order'=>Order::all(),'cust'=>User::all()]); 
    }
    public function orderCompleted($id,$oid){
      //sent mail order delivered
      $order=Order::findOrFail($oid);
      $order->Status=true;
      $order->save();
      return redirect()->back();
    }
    public function deleteProduct($id,$pid){
      $pro=Products::findOrFail($pid);
      $pro->delete();
      return redirect()->back();
    }



}
