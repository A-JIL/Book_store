@extends('Users.userLayout')  
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/oderconfirm.css')}}">
<body>
<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
    <div class="card">
        <div class="card-header p-4">
          
            <div class="float-right">
                <h3 class="mb-0">Order Confirm</h3>
                Date: 12 Jun,2019
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6 ">
                    <h5 class="mb-3">To:</h5>
                    <h3 class="text-dark mb-1">{{$user->Name}}</h3>
                    <div>{{$user->Address}}</div>
                    <div> {{$user->pincode}}</div>
                    <div>Email: {{$user->Email}}</div>
                    <div>Phone: +91{{$user->id}}</div>
                   
                </div>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="center">Id</th>
                            <th>Item</th>
                            <th>Description</th>
                          
                            <th class="center">Price</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            <td class="center">{{$pro->id}}</td>
                            <td class="left">{{$pro->Name}}</td>
                            <td class="left">{{$pro->Desc}}</td>
                            
                            <td class="center">{{$pro->Price}}</td>
                           
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                </div>
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">total</strong>
                                </td>
                                <td class="right">{{$pro->Price}}</td>
                            </tr>
                            <tr>
                               
                                <td class="right">
                                    <a href="/{{$user->id}}/pay/{{$pro->id}}"><button type="button" class="btn btn-warning btn-lg">Confirm Order</button>
                                    </a></td>
                            </tr>
                        </tbody>
                     
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white">
            <p class="mb-0"></p>
        </div>
    </div>
</div></body>
@stop