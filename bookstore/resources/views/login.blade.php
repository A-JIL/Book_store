<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login.css')}}">
    <title>Login</title>
    <script>
        function validation()
    {
        
        var id= document.getElementById('ph').value;
        if(document.getElementById('s').value=="select")
        {
            alert("Please Select position");
            document.getElementById('s').focus();
            return false;
        }
        else if(id.length!=10)
        {
            alert("please Enter valid Phone number");
            document.getElementById('ph').focus();
            return false;
        }
    
    }
    </script>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
  
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
  </head>
  <body>
    <div class="limiter" id="login">
        <div class="container-login100" style="background-image:url('background1.jpg')"> 
            <div class="container"><center><h1>BOOKSTORE</h1></center>
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="login_topimg"><img src="background2.jpg">
                            @if(session()->has('password'))
                            <div class="alert alert-danger" role="alert">
                   Incorrect password
                  </div>@endif
                  @if(session()->has('id'))
                  <div class="alert alert-danger" role="alert">
         Accuount does not excites 
        </div>@endif
                        </div>
                        <div class="wrap-login100">
                            <form class="login100-form validate-form" action="/login" method="POST">
                                @csrf <span class="login100-form-title "> Login </span> <span class="login100-form-subtitle m-b-16"> to your account </span>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required"> 
                                    <select id="s" class="input100"  aria-label="Default select example" name="Role">
                                        <option selected  disabled value="select">Select the Postion</option>
                                        <option value="Admin">Login as Admin</option>
                                        <option value="User">Login as User</option>
                                      </select>
                                    <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-lock"></span> </span> </div>
                                
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz"> <input class="input100" type="number" name="PhNum" id="ph" placeholder="Phone Number" required> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-user"></span> </span> </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required"> <input class="input100" type="password" name="Password" placeholder="Password" required> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-lock"></span> </span> </div>
                                
                                <div class="flex-sb-m w-full p-b-30">
                                   
                                    <div> <a href="/create_acc" class="txt1">Create New Account </a> </div>
                                </div>
                                <div class="container-login100-form-btn p-t-25"> <button class="login100-form-btn" onclick="return validation()"> Login </button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>