
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
   
    <div class="d-grid gap-2"> <a href="/{{$user->id}}/addproduct" class="btn btn-warning"> 
     Add New Product
    </a></div>
    
              
           <div class="container py-5">
            <div class="row text-center text-white mb-5">
                <div class="col-lg-7 mx-auto">
                    <h1 class="display-4">Product List</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                                  
           @foreach ($pro as $p)

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
                                        
                                            <a href="/{{$user->id}}/delete/{{$p->id}}" class="btn btn-danger btn-lg">Delete</a>
                                        </ul>
                                        
                                    </div>
                                </div><img src="/Products/{{$p->Image}}" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                            </div> <!-- End -->
                        </li> <!-- End -->
                       
                        @endforeach
                        
                </div>
            </div>
        </div>
                       
                       
                        
                
           
           
            
        </div>
    </div>
@stop