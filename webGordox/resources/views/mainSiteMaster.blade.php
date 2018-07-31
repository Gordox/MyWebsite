<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Anton's website</title>
    <!--Test website icon-->
    <link rel="icon" href="">
    <!-- My CSS files -->
    <link rel="stylesheet" href="../../css/GordoxCSS.css">

    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>

  <body class="BodyBackground">

    <div id="wrap">
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

                 @if (Route::has('login'))
                         @if (Auth::check())
                         <a class="card-title" href="/AdminLogin">Logout</a>
                         @else
                         @endif
                 @endif
               </div>
             </div>
            </div>
          </div>

        <!--Navbar menu-->
        <div class="container no-padding">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #232323 !important;">
              <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>


              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" >
                  <li class="nav-item">
                      <a class="nav-link btn-outline-secondary" href="/">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn-outline-secondary" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Works
                    </a>
                    <div class="dropdown-menu btn" aria-labelledby="navbarDropdownMenuLink" style="background-color: #232323 !important;">
                      <a class="dropdown-item btn-outline-secondary text-muted" href="/professional-works">Professional work</a>
                      <a class="dropdown-item btn-outline-secondary text-muted" href="/hobby-works">Hobby work</a>
                      <!-- In Dev face
                      <a class="dropdown-item" href="#">Papers / Docuemts</a>
                      -->
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn-outline-secondary" href="/blog">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn-outline-secondary" href="/resume">Resume</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn-outline-secondary" href="/contact">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
      </header>

      <div id="main">
        <!-- Content -->
        <main role="main">
          <div class="container no-padding ContentColor">
            @yield('content')
          </div>
        </main>
      </div>
    </div>




<div id="footer">

   <!-- Bottom -->
    <footer class="">
      <div class="container no-padding " >
        <div class="FoterColor">
          <div class="row">
            <div class="col ">
              <p class="ml-2">Copyright &copy;2018 By Anton Svensson</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
