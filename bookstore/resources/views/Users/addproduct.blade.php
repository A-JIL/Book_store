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
    <script type="text/javascript">
        function val()
        {
            if(document.getElementById('s').value=="select")  
        {
            alert("Please Select Category");
            document.getElementById('s').focus();
            return false;
        }
        }
     
    </script>
<body>
<section class="login-block">
    @if(session()->has('ok'))
    <div class="alert alert-warning" role="alert">
    Product Added
    </div>@endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material" action="/{{$user->id}}/addproduct" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center heading">Add New Product</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary"> <input type="text" class="form-control" name="Name" value="" placeholder="Prodcut Name" id="first_name" required> </div>
                            <div class="form-group form-primary">
                                <select class="form-select" id="s" name="Category">
                                    <option selected disabled value="select">Select Genre</option>
                                    <option value="Novels">Novels</option>
                                    <option value="Comics">Comics</option>
                                    <option value="Knowledge">Knowledge</option>
                                    <option value="Others">Others</option>
                                  </select>
                            </div>
                            <div class="form-group form-primary"> <input type="number" class="form-control" name="Price" value="" placeholder="Price" required> </div>
                            <span> upload Image<span>
                            <div class="form-group form-primary"> <input type="file" class="form-control" name="file" required> 
                           </div> 
                           <div class="form-group form-primary"> <input type="text" class="form-control" name="Desc" value="" placeholder="Description" required> </div>
                          
                            <div class="row">
                                <div class="col-md-12"> <button type="submit" onclick="return val()" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"><i class="fa fa-lock"></i> Add</button>
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