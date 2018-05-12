<!doctype html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Empty for now</title>
    <!--Test website icon-->
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">
    <!-- My CSS files -->
    <link rel="stylesheet" href="../../css/GordoxCSS.css">

    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>

  <body class="BodyBackground">
    <!-- Top menu -->
    <header>
      <!-- Image & Login-->
      <div class="container">
        <div class="row headerImage">
            <div class="col">
            </div>

            <!-- Login -->
            <div class="col-sm-2">
             <div class="card-img-overlay loginText">
               <a class="card-title" href="#">Login</a>
               @if (Route::has('login'))
                       @if (Auth::check())

                       @else

                       @endif
               @endif
             </div>
           </div>
          </div>
        </div>

      <!--Navbar menu-->
      <div class="container no-padding">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto" >
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Works
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Professional work</a>
                    <a class="dropdown-item" href="#">Hobby work</a>
                    <a class="dropdown-item" href="#">Papers / Docuemts</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
    </header>

    <!-- Content -->
    <main role="main">
      <div class="container no-padding">
        @yield('content')
      </div>
    </main>

   <!-- Bottom -->
    <footer class="text-muted MyFooter">
      <div class="container no-padding">
        <p class="float-right">
          <a href="#">Back to top</a> <!--Make a buttom if it later -->
        </p>
        <p>&copy;2018 By Anton Svensson</p>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
