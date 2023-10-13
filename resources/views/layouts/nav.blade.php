<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MegaParts - Landing Page</title>
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Boostrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

  </head>
  <body>


        <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/img/megaparts.png')}}" alt="Logo" width="220" height="35" class="d-inline-block align-text-top ms-5">
            </a>
            <div class="vertical-line mx-2"></div> <!-- Vertical line with margin -->
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/img/megacars.png')}}" alt="Logo" width="120" height="21" class="d-inline-block align-text-top m-3">
            </a>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/mega2.png') }}" alt="Logo" width="125" height="21" class="d-inline-block align-text-top m-1">
            </a>
            <div class="vertical-line mx-2"></div> <!-- Vertical line with margin -->

          <button class="navbar-toggler" style="background-color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarText">

            <div class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 6%;">
                <a class="nav-link active" aria-current="page" href="#">
                  <div style="text-align: center;">
                    <i class="bi bi-chat-left-text" style="color: white; font-size: 20px"></i>
                  </div>
                </a>
                <a class="nav-link" href="#">
                  <div style="text-align: center;">
                    <i class="bi bi-basket" style="color: white; font-size: 20px"></i>
                  </div>
                </a>

                <a class="nav-link" href="#">
                  <div style="text-align: center;">
                    <i class="bi bi-heart" style="color: white; font-size: 20px"></i>
                  </div>
                </a>

                <a class="nav-link" href="{{ route('login') }}">
                    <div style="text-align: center;">
                      <i class="bi bi-person-fill mx-5" style="color: white; font-size: 20px; font-family: 'Exo 2', sans-serif; font-style: normal; font-weight: bold;">
                        <span style="color: white; font-size: 20px; margin: 10px">LOGIN</span></i>
                      </i>
                    </div>
                </a>

                <a class="nav-link" href="#">
                    <div style="text-align: center;">
                      <i class="bi bi-facebook " style="color: blue; font-size: 20px"></i>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div style="text-align: center;">
                      <i class="bi bi-youtube " style="color: red; font-size: 20px"></i>
                    </div>
                  </a>

                  <a class="nav-link telephone" href="#">
                    <div class="mx-3" style="text-align: center;">
                      <i class="bi bi-telephone-fill m-5" style="color: green; font-size: 20px;
                      font-weight: bold;">
                      <span style="color: white; font-size: 20px; margin: 10px; font-family: 'Exo 2', sans-serif;">02 437 32 48</span></i>
                    </div>
                  </a>        
              </div>
            </div>  
        </div>
      </nav>



      <!-- Sub Navbar-->
      <div class="secondnavbar">
        <a href="#home" class="secondnavbar-item" style="background: #008AEE; margin-left: 11%">
            <div class="bi bi-house-door-fill" style="color: white;"></div>
        </a>
        <a href="#autoparts" class="secondnavbar-item" style="background: #008AEE;">
            <div class="bi bi-gear-fill" style="color: white; margin: 5px;"></div>
            <div class="secondnavbar-text">CAR PARTS</div>
        </a>
        <a href="#partsexchange" class="secondnavbar-item" style="background: #5FB865;">
            <div class="bi bi-shop-window" style="color: white; margin: 5px;"></div>
            <div class="secondnavbar-text">PARTS EXCHANGE</div>
        </a>
        <a href="#carsforsale" class="secondnavbar-item" style="background: #63C7C9;">
            <div class="bi bi-car-front-fill" style="color: white; margin: 5px;"></div>
            <div class="secondnavbar-text">CARS FOR SALE</div>
        </a>
        <a href="#sell" class="secondnavbar-item" style="background: #E59D48;">
            <div style="color: white; margin: 5px;"><img style="color:white; vertical-align: -1.5px" src="./img/steeringwheel.ico" alt=""></div>
            <div class="secondnavbar-text">SELL PARTS</div>
        </a>
        <a href="#games" class="secondnavbar-item" style="background: #BD5FE9;">
            <div class="bi bi-dpad" style="color: white; margin: 5px;"></div>
            <div class="secondnavbar-text">GAMES</div>
        </a>
        <a href="#insurance" class="secondnavbar-item" style="background: linear-gradient(#e66465, #9198e5);">
            <div class="bi bi-heart" style="color: white; margin: 5px;"></div>
            <div class="secondnavbar-text">INSURANCE</div>
        </a>
        <a href="#insurance" class="secondnavbar-item" style="background: #BD5FE9;">
          <div class="bi bi-person-lines-fill" style="color: white; margin: 5px;"></div>
          <div class="secondnavbar-text">CONTACT</div>
      </a>
    </div>


    <main>
        @yield('content')
    </main>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    
     <!-- Swiper Script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
  
    
  </body>
</html>