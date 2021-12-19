 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/userhome.css')}}">
    <title>Bookstore</title>
  </head>



<div class="container-xm">

<div class="wrapper">
    <div class="title">Admin Panel</div>
    <div class="box"> <input type="radio" name="select" id="value-1"> <input type="radio" name="select" id="value-2"> <input type="radio" name="select" id="value-3"> <input type="radio" name="select" id="value-4"> <label for="value-1" class="value-1">
   <a href="/{{$user->id}}/viewmypro" class="btn btn-outline-success"> Manage books</a>
        </label>   <label for="value-4" class="value-4">
         <a href="/{{$user->id}}/mydelivery" class="btn btn-outline-success">   My Deliverys
         </a> </label> </div>
</div></div>
</html>