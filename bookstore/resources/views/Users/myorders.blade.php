
@extends('Users.userLayout')  
@section('content') 
<style>
body {
    background: linear-gradient(to right, #c04848, #480048);
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container mt-5 mb-5">
   
   
    
              
           <div class="container py-5">
            <div class="row text-center text-white mb-5">
                <div class="col-lg-7 mx-auto">
                    <h1 class="display-4">My Orders</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                                  
           @foreach ($order as $o)
           @if ($o->User_Id == $user->id)
               @foreach ($pro as $p)
                   
               @if ($p->id == $o->Product_Id) 
           <!-- List group-->
                    <ul class="list-group shadow">
                        <!-- list group item-->
                        <li class="list-group-item">
                            <!-- Custom content-->
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">{{$p->Name}} ({{$p->Category}})</h5>
                                    <p class="font-italic text-muted mb-0 small">{{$p->Desc}}<br>
                                    Delivery Status: @if ($o->Status==0)
                                  <b>      Not Completed</b>
                                    @else
                                       <b> Product delivered on {{$o->updated_at}}</b>
                                    @endif</p>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        
                                        <h6 class="font-weight-bold my-2">₹{{$p->Price}}</h6>
                                        <ul class="list-inline small">
                                        Booked Date:{{$o->created_at}}<br>
                                        Address:{{$user->Address}}
                                           
                                        </ul>
                                        
                                    </div>
                                </div><img src="/Products/{{$p->Image}}" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                            </div> <!-- End -->
                        </li> <!-- End -->
                        <!-- list group item--><br>
                        @endif
                        @endforeach  
                        @endif
          
                        @endforeach
                        
                </div>
            </div>
        </div>
                       
                       
                        
                
           
           
            
        </div>
    </div>
@stop