@extends('Users.userLayout')  
@section('content') 
<link rel="stylesheet" type="text/css" href="{{asset('assets/addproduct.css')}}">
<style>body {
    background: linear-gradient(to right, #c04848, #480048);
    min-height: 100vh
}

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
  
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
<script>  
function validateemail()  
{  
var x=document.getElementById('e').value;  
var atposition=x.indexOf("@");  //non zero check
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address ");  
  document.getElementById('e').focus();
  return false;  
  }  
}  
</script> 
 
<body><section class="login-block">
    @if(session()->has('ok'))
    <div class="alert alert-warning" role="alert">
Profile Updated
    </div>@endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material" action="/{{$user->id}}/myprofile" method="POST" >
                    @csrf
                
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center heading">My Profile</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary"> <input type="text" class="form-control" name="Name" value="{{$user->Name}}" placeholder="Name" id="first_name" required> </div>
                            <div class="form-group form-primary"> <input type="text" class="form-control" name="Email" value="{{$user->Email}}" placeholder="Email" id="e" required> </div>
                            <div class="form-group form-primary"> <input type="text" class="form-control" name="Address" value="{{$user->Address}}" placeholder="Address" id="first_name"  required> </div>
                            <div class="form-group form-primary"> <input type="text" class="form-control" name="Kindle_id" value="{{$user->Kindle_id}}" placeholder="Kindle_id" id="first_name"  required> </div>
                           <div class="form-group form-primary"> <input type="number" class="form-control" name="Pincode" value="{{$user->Pincode}}" placeholder="Pincode"  required> </div>
                          
                            <div class="row">
                                <div class="col-md-12"> <button type="submit" class="btn btn-warning btn-md btn-block waves-effect text-center m-b-20" onclick="return validateemail()"><i class="fa fa-lock"></i>Update</button>
                                </div>
                            </div>
                           
                           
                          
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section></body>
@stop