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
    <script type="text/javascript">
        function validation()
        {
         var id= document.getElementById('ph').value;
         var x=document.getElementById('e').value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");  
        if(id.length!=10)
        {
            alert("please Enter valid Phone number");
            document.getElementById('ph').focus();
            return false;
        }
    
        else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
        {  
            alert("Please enter a valid e-mail address ");  
            document.getElementById('e').focus();
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
        <div class="container-login100" style="background-image:url('background3.jpg')">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-6"></div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="login_topimg"> @if(session()->has('error'))
                            <div class="alert alert-danger" role="alert">
                    Phone Number Already taken
                  </div>@endif
                  <div class="login_topimg"><img src="background4.jpg"> @if(session()->has('ok'))
                    <div class="alert alert-primary" role="alert">
            Sucessfully created <a href="/">click here</a>to go login page
          </div>@endif</div>
                  
                        <div class="wrap-login100">
                            <form  class="login100-form validate-form" action="/create_acc" method="post">
                                @csrf <span class="login100-form-title "> Explore BOOKSTORE </span> <span class="login100-form-subtitle m-b-16"> Create new Acc </span>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required"> 
                                    <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-lock"></span> </span> </div>
                                    <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz"> <input class="input100" type="text" name="Name" placeholder="Full Name" required> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-user"></span> </span> </div>
                                    <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz"> <input class="input100" type="number" name="PhNum" id="ph" placeholder="Phone Number" required> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-user"></span> </span> </div>
                                    <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz"> <input class="input100" type="text" name="Email" placeholder="Email" id="e"> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-user"></span> </span> </div>
                                 <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required"> <input class="input100" type="password" name="Password" placeholder="Password" required> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-lock"></span> </span> </div>
                                
                                <div class="flex-sb-m w-full p-b-30">
                                  
                                    <div> <a href="/" class="txt1"> Back to login page </a> </div>
                                </div>
                                <div class="container-login100-form-btn p-t-25"> <button class="login100-form-btn" onclick="return validation()"> create </button> </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  </body>
</html>