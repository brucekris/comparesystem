<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Selectronics</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../sass/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Styles -->
        <style>
            html, body {;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                color: white;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            /*a#hov1{
              color: purple;
            }*/
            a#hov2:{
              color: yellow;
            }
            a#hov3:{
              color: pink;
            }
            a#hov4:{
              color: blue;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            body {
      background-image: url("../public/images/bgimgbl.jpg");
      background-repeat: repeat;
      } 
        </style>
    </head>
    <body class ="theme-dark">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"></a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="../public/images/sand.jpg">
                
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
    <b><a href="{{ url('/') }}" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-flash"></span>Selectronics</a></b>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      {{-- <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a> --}}
      @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a id="hov1" href="{{ url('/comparing') }}"><span class="glyphicon glyphicon-stats"></span>Compare Phones</a>
                        <a id="hov1" href="#bestphones"><span class="glyphicon glyphicon-sort-by-attributes-alt"></span>Best phones</a>
                        <a id="hov1" href="#latestnews"><span class="glyphicon glyphicon-exclamation-sign"></span>Latest News</a>
                        <a id="hov1" href="{{ url('/home') }}"><span class="  glyphicon glyphicon-user"></span>Account</a>
                    @else
                        <a href="#bestphones">Best phones</a>
                        <a href="#latestnews">Latest News</a>
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
  </div>
</div>

{{-- <a href="#bestphones">Best phones</a>
<a href="#latestnews">Latest News</a>
 --}}
  <div class="w3-display-middle w3-margin-top w3-center">

    <h1 class="w3-xxxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b><span class="glyphicon glyphicon-flash"></span>Selectronics</b><i class="fas fa-mobile"></i></span></h1>
    <a href="{{ url('/comparing') }}"><h1 class="w3-text-white"><span class="w3-padding w3-black w3-opacity-min "><b>Compare your device</b>
    <span class="glyphicon glyphicon-circle-arrow-right"></span>
        </span></a>      
    </h1>
  </div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
<br><br><br>
<br><br>
<div class="w3-container w3-padding-32" id="latestnews">
    <h3 class="w3-border-bottom w3-border-white w3-padding-16">Latest News</h3>
  </div>

<div class="card-group ">
  <div class="card text-black bg-dark mb-3">
    <img class="card-img-top" src="../public/images/huaweinews.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">The new Huawei P30</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card text-black bg-dark mb-3">
    <img class="card-img-top" src="../public/images/airpower.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Iphone Xr</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
      <small class="text-muted">Last updated 1 hour ago</small>
    </div>
  </div>
  <div class="card text-black bg-dark mb-3">
    <img class="card-img-top" src="../public/images/galaxyfoldnews.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Galaxy S10</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
      <small class="text-muted">Last updated 2 days ago</small>
    </div>
  </div>
  <div class="card text-black bg-dark mb-3">
    <img class="card-img-top" src="../public/images/mostsold.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Huawei P30</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>

    <div class="card-footer">
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
      <small class="text-muted">Last updated one week ago</small>
    </div>
  </div>
</div>
<br>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="bestphones">
    <h3 class="w3-border-bottom w3-border-white w3-padding-16"><span class="glyphicon glyphicon-stats"></span>Most Populair phones</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.<div class="d-flex align-items-center">
                <a id="play-home-video" class="video-play-button" href="#">
                  <span></span>
                </a>
              </div>

    </p>
  </div>

<div class="card-group ">
  <div class="card text-white bg-primary mb-3">
    <img class="card-img-top" src="../public/images/ipadpro.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">The new Huawei P30</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card text-white bg-primary mb-3">
    <img class="card-img-top" src="../public/images/iphonexr.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Apple Airpower cancelled</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
      <small class="text-muted">Last updated 1 hour ago</small>
    </div>
  </div>
  <div class="card text-white bg-primary mb-3">
    <img class="card-img-top" src="../public/images/galaxys10.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Galaxy Fold first Preview</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
      <small class="text-muted">Last updated 2 days ago</small>
    </div>
  </div>
  <div class="card text-white bg-primary mb-3">
    <img class="card-img-top" src="../public/images/huaweip30.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Most Sold Phones April 2019</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>

    <div class="card-footer">
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
      <small class="text-muted">Last updated one week ago</small>
    </div>
  </div>
</div>
  
    </form>
  </div>
  
<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
created by Bruce W
</footer>

</body>
</html>
