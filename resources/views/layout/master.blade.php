<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header class="container-fluid nav-color">
      <nav class="">
        <div class="col-md-3 nav-btn"><a>myKopsis</a></div>
        <div class="col-md-4 col-md-offset-1">
          <form class="navbar-form">
        <div class="form-group">
          <input type="text" class="form-control no-border" placeholder="Cari">
        </div>
        <button type="submit" class="btn btn-default no-border"><span class="glyphicon glyphicon-search"></span></button>
      </form>
    </div>
    <div class="col-md-1 col-md-offset-1 nav-btn"><center><a>Katalog</a></center></div>
    <div class="col-md-1 nav-btn"><center><a>Anggota</a></center></div>
    <div class="col-md-1 nav-btn dropdown">
  <div class="dropdown-toggle" type="button" data-toggle="dropdown">
    <center><span class="glyphicon glyphicon-shopping-cart white"></span>
    <span class="white caret"></span></center>
  </div>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
    
  </div>
</div>
      </nav>
    </header>
@yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
