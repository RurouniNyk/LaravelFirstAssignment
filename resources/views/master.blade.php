<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset("DataAccess/style.css")}}">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <section id="heading">
        <div class="bg-light">
          <div class="container p-3">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="collapse navbar-collapse" id="navbarreligon">
                <ul class="navbar-nav">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="{{route('homepage')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('newspage')}}">News</a>
                  </li>
                </ul>
              </div>
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarreligon" aria-controls="navbarreligon" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
  
              <div class="collapse navbar-collapse" id="navbarreligon">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="{{route('musicpage')}}">Music</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('videopage')}}">Video</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <div id="homeslide" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://lanegoodwin.com/wp-content/uploads/2016/12/Always-Be-Willing-to-Walk-Away.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://i.ytimg.com/vi/-F3YxBfyVco/maxresdefault.jpg" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://www.relrules.com/wp-content/uploads/2017/08/shutterstock_246889519.png" alt="...">
              </div>
            </div>
          </div>
        </div>
      </section>

  @yield('HomeContent');

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <p class="footer_p">Annawar</p>
        </div>
        <div class="col-md-4">
          <p class="footer_p">copyright© Rurouni</p>
        </div>
        <div class="col-md-4">
          <p class="footer_icon"> <a href="https://www.facebook.com/annawar.nyk"><i class="social-icon fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/annawar.k_89/"><i class="social-icon fab fa-instagram"></i></a></p>
        </div>
      </div>

    </div>

  </div>

</body>

</html>
