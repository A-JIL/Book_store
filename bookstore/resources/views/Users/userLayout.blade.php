
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .right {
  position: absolute;
  right: 0px;
}


</style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/home.css')}}">
    <title>Bookstore</title>
  </head>

      <div class="header2 bg-success-gradiant">
    <div class="">
        <!-- Header 1 code -->
        <nav class="navbar navbar-expand-lg h2-nav"> <a class="navbar-brand" href="#"> &ThickSpace;&ThickSpace; BookStore</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header2" aria-controls="header2" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-menu"></span> </button>
            <div class="collapse navbar-collapse hover-dropdown" id="header2">
                <ul class="navbar-nav">
                  
                    <li class="nav-item dropdown position-relative"> <a class="nav-link dropdown-toggle" href="/{{$user->id}}/viewproducts" id="h2-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Products <i class="fa fa-angle-down ml-1 font-12"></i> </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/{{$user->id}}/viewproducts">All Products</a></li>
                            <li><a class="dropdown-item" href="/{{$user->id}}/viewNovels">Novels</a></li>
                            <li><a class="dropdown-item" href="/{{$user->id}}/viewComics">Comics</a></li>
                            <li><a class="dropdown-item" href="/{{$user->id}}/viewKnowledge">Knowledge</a></li>
                            <li><a class="dropdown-item" href="/{{$user->id}}/viewothers">Other Items</a></li>
                        </ul>
                    </li>
                   
                   @if ($user->Role=="Admin")
                   <li class="nav-item"><a class="nav-link" href="/{{$user->id}}/viewmypro">Addproducts</a></li> 
                   <li class="nav-item"><a class="nav-link" href="/{{$user->id}}/mydelivery">Deliverys</a></li> 
                  
                   @endif
                  
  
                </ul>
                <ul class="navbar-nav ml-auto">
                    @if ($user->Role=="User")
                    <li class="nav-item active"><a class="nav-link" href="/{{$user->id}}/myorders"><i class="icon-bubble"></i> My Orders</a></li>
                    <li class="nav-item active"><a class="nav-link" href="/{{$user->id}}/myprofile"><i class="icon-bubble"></i> My Profile</a></li>
                      @endif
               <div class="right">
                   <li class="nav-item"><a class="btn rounded-pill btn-dark py-2 px-4" href="/{{$user->id}}/logout">Logout</a></li></div>
                </ul>
            </div>
        </nav> <!-- End Header 1 code -->
    </div>
</div>  <body style="background: linear-gradient(to right,  #fa9600,#f2e15c)" ><br>
<div >
    @yield('content')
</div>
  </body>
</html>