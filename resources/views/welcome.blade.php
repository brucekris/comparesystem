<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Selectronics</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="../sass/style.css">
        <!-- Styles -->
        <style>
            html, body {;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class ="theme-dark">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="../public/images/phones.jpg">
                
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
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button">Selectronics</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      {{-- <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a> --}}
      @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="#bestphones">Best phones</a>
                        <a href="#latestnews">Latest News</a>
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


  <div class="w3-display-middle w3-margin-top w3-center">

    <h1 class="w3-xxxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Compare your device</b><i class="fas fa-mobile"></i></span></h1>
  </div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->

  <div class="w3-container w3-padding-32" id="latestnews">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Latest News</h3>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../public/images/huaweinews.jpg" alt="John" style="width:100%">
      <h3>The new Huawei p30</h3>
      <p class="w3-opacity">Apple</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../public/images/airpower.jpg" alt="Jane" style="width:100%">
      <h3>Apple Air Power cancelled</h3>
      <p class="w3-opacity">Apple</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../public/images/galaxyfoldnews.jpg" alt="Dan" style="width:100%">
      <h3>Galaxy Fold first preview</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../public/images/mostsold.jpg" alt="Dan" style="width:100%">
      <h3>Most sold phones March 2019</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Go to Article</button></p>
    </div>
  </div>
  

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="bestphones">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Most Populair phones</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.<div class="d-flex align-items-center">
                <a id="play-home-video" class="video-play-button" href="#">
                  <span></span>
                </a>
              </div>

    </p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../public/images/ipadpro.png" alt="John" style="width:100%">
      <h3>Ipad Pro</h3>
      <p class="w3-opacity">Apple</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../public/images/iphonexr.png" alt="Jane" style="width:100%">
      <h3>Iphone XR</h3>
      <p class="w3-opacity">Apple</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../public/images/galaxys10.jpg" alt="Mike" style="width:100%">
      <h3>Samsung S10</h3>
      <p class="w3-opacity">Samsung</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../public/images/huaweip30.png" alt="Dan" style="width:100%">
      <h3>Huawei p30</h3>
      <p class="w3-opacity">Huawei</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
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
