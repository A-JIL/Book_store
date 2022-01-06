
@extends('Users.userLayout')  
@section('content') 
<link rel="stylesheet" type="text/css" href="{{asset('assets/products.css')}}"> <div class="container mt-5 mb-5">
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <style type="text/css">
    body {
    background-image: url("/background1.jpg");
    min-height: 100vh
}

.text-gray {
    color: #aaa
}

img {
    height: 170px;
    width: 140px
}
</style>  
        <div class="container py-5">
            <div class="row text-center text-white mb-5">
                <div class="col-lg-7 mx-auto">
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                                  
           @foreach ($pro as $p)
               @if ($p->Owner_Id != $user->id && $p->Category[0]=="K")
                 <!-- List group-->
                 <ul class="list-group shadow">
                    <!-- list group item-->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">{{$p->Name}} ({{$p->Category}})</h5>
                                <p class="font-italic text-muted mb-0 small">{{$p->Desc}}</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    
                                    <h6 class="font-weight-bold my-2">₹{{$p->Price}}</h6>
                                    <ul class="list-inline small">
                                        <button type="button" id="demo" class="btn btn-danger btn-lg" onclick="sentTokindel()"><i class="fa fa-cart-plus mr-2"></i> Demo</button>
                                        <a href="/{{$user->id}}/buy/{{$p->id}}" ><button type="button"  class="btn btn-warning btn-lg"><i class="fa 
                                            fa-cart-plus mr-2"></i> Buy this product</button></a>
                                       
                                    </ul>
                                    
                                </div>
                            </div><img src="/Products/{{$p->Image}}" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                    <!-- list group item--><br>
               @endif
          
             @endforeach
            
           
           
            
        </div>

    </div>
    
@stop
