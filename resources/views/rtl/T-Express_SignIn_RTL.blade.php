<!DOCTYPE html>

<head>
        <meta charset="UTF-8" />
        <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/shopping-and-retail-15/512/Bag-512.png"/> 
        <title>T-Express</title>

        <!--[if lt IE 9]>
            <script src="JavaScript/html5shiv.min.js"></script>
        <![endif]-->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Start Bootstrap CSS-->
          <!-- Font Awesome -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
          <!-- Bootstrap core CSS -->
          <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
          <!-- Material Design Bootstrap -->
          <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
        <!-- End Bootstrap CSS -->

        <link rel = "stylesheet"
        type = "text/css"
        href = "css/T-Express_Style_RTL.css" />
        <style>
          @media (max-width: 767px) {
            .page-footer {
                bottom: 0!important;
                width:100%!important;
                position: relative!important;
            }
          }
          @media (min-width: 768px) and (max-width: 1024px) {
            .page-footer {
                bottom: 0!important;
                width:100%!important;
                position:absolute!important;
            }
          }
          @media (min-width: 1025px) {
            .page-footer {
                bottom: 0!important;
                width:100%!important;
                position:relative!important;
            }
          }
          </style>
</head>

<body>

<!--Start Header-->

    <!--Start Navbar-->
    <nav style="background-color: #31AFF5!important;"class="navbar navbar-expand-lg navbar-dark primary-color">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="T-Express_MarketPlace_RTL">
          <img src="Img/Bag.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          T-Express
      </a>
  
      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
  
      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul style="margin-right:0px!important;float: right!important;text-align: center!important;" class="navbar-nav mr-auto">
          <li class="nav-item">
              <a href="T-Express_MarketPlace_RTL"class="nav-link">
              <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fas fa-shopping-basket"></i>??????????</a>
          </li>
          <li class="nav-item dropdown">
              <a href="T-Express_MyOrders-Page-1_RTL"class="nav-link">
              <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fas fa-shipping-fast"></i>??????????????</a>
          </li>
          <li class="nav-item dropdown">
              <a href="T-Express_MyFavorites_RTL"class="nav-link">
              <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class=" far fa-star"></i>??????????????</a>
          </li>
          <li class="nav-item dropdown">
              <a href="T-Express_ContactUs_RTL"class="nav-link">
              <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fas fa-phone"></i>?????????? ????????</a>
          </li>
          <li class="nav-item dropdown">
            <a href=""class="nav-link">
            <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fas fa-bell"></i>??????????????????</a>
        </li>
        <li class="nav-item dropdown">
          <a href="T-Express_Cart_RTL"class="nav-link">
          <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fab fa-opencart"></i>???????? ????????????</a>
      </li>
      <li class="nav-item dropdown">
        <a href=""class="nav-link" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fas fa-user"></i>????????????</a>
        <div style="margin-right:0px!important;float: right !important;text-align: center!important;" class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-4">
            <a class="dropdown-item" href="T-Express_SignUp_RTL"> ??????????????</a>
                <a class="dropdown-item" href="T-Express_SignIn_RTL"> ?????????? ????????????</a>
                <a class="dropdown-item" href="T-Express_AccountSettings_RTL"> ?????????????? ????????????</a>
                <a class="dropdown-item" href="T-Express_ResetPassword_RTL"> ???????? ???????? ????????????</a>
                <a class="dropdown-item" href="T-Express_ForgotPassword_RTL"> ???????? ???????? ????????????</a>
                <a class="dropdown-item" href="T-Express_MarketPlace_RTL"> ?????????? ????????????</a>
          </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i style="margin-right:0px!important;float: right !important;text-align: center!important;" class="fas fa-globe-africa"></i>??????????</a>
      <div style="margin-right:0px!important;float: right !important;text-align: center!important;"class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="T-Express_MarketPlace">English/????????????????????</a>
              <a class="dropdown-item" href="T-Express_MarketPlace_RTL">Arabic/??????????????</a>
      </div>
    </li>
      </ul>
      <!-- Links -->
      </div>
      <!-- Collapsible content -->
      
</nav>
<div style="background-color: #fff!important;margin: 0px 0px!important;"class="input-group md-form form-sm form-2 pl-0">
  <input class="form-control my-0 py-1 amber-border" type="text" placeholder="??????????" aria-label="??????????">
  <div class="input-group-append">
    <span class="input-group-text amber " id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span>
  </div>
  </div>
</div>
<!-- End Navbar -->
<!--Start body-->

  <!--Start Sign in-->

    <div class="d-flex justify-content-center">
    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
    <div class="card">

            <form method="POST" action="{{ route('login') }}">
                        @csrf

              <p style="color: #2196f3 !important;"class="h4 mb-4">?????????? ????????????</p>

              <!-- Email -->
              <input id="email" type="email" class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="??????????????" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

              <!-- Password -->
              <input id="password" type="password" class="form-control mb-4 @error('password') is-invalid @enderror" placeholder="???????? ????????????" name="password" required autocomplete="current-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              <div class="d-flex justify-content-around">
                  <div style="background-color: #c6e2ff;"class="rounded-pill px-4 py-3 text-uppercase font-weight-bold" >
                      <!-- Remember me -->
                      <div class="form-check">                                  
                                    <label class="form-check-label" for="remember">
                                        {{ __('????????????') }}
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                  </div>
                      <!-- Forgot password -->
                      <a style="color: red;" href="T-Express_ForgotPassword_RTL">???? ???????? ???????? ??????????????</a>
                  </div>
              

              <!-- Sign in button -->
              <button style="background-color:#2196f3 !important;" class="btn btn-info btn-block my-4 rounded-pill" type="submit">?????????? ????????????</button>

              <!-- Register -->
              @if (Route::has('register'))
              <p>?????? ???????? ?????? ????
                  <a style="color: red;" href="T-Express_SignUp_RTL">?????? ???????? </a>
              </p>        
                            @endif
              
              <!-- Social login -->
              <p>???? ???? ???????????????? ????????????????:</p>
              <a style="font-size: 40px!important;color: #dd4b39!important;" class="gplus-ic mr-3" role="button"><i class="fab fa-google"></i></a>
              <a style="font-size: 40px!important;color: #3b5998!important;" class="fb-ic mr-3" role="button"><i class="fab fa-facebook-f"></i></a>
                
            </form>

    </div>
    </div>
    </div>

  <!-- End Sign in -->

<!-- End body -->
        

<!--Start Footer-->
<footer
class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div style="margin-right:0px!important;float: right !important;text-align: center!important;" class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">???? ????????????</h5>
        <p>???????? T-Express ???? ???????? ?????????????? ?????????????? ???? ???????? ?????????? ?????????????? ?? ?????????????? ??????????????.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

     <!-- Grid column -->
     <div style="margin-right:0px!important;float: right !important;text-align:right !important;" class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5  style="margin-right:0px!important;float: right !important;text-align: center!important;" class="text-uppercase">??????????????</h5>

      <ul style="margin-right:0px!important;float: right !important;text-align:right !important;" class="list-unstyled">
        <li>
          <a href="https://www.carrefouregypt.com/">????????????</a>
        </li>
        <li>
          <a href="http://gomlamarket.com/">?????? ???????? ???????? ??????????</a>
        </li>
        <li>
          <a href="https://www.facebook.com/ZahranMarketEG/">?????????? ??????????</a>
        </li>
        <li>
          <a href="https://www.facebook.com/MetroMarketEgypt/">???????? ??????????</a>
        </li>
        <li>
          <a href="https://www.facebook.com/DailyMarketEgypt/">?????? ?????????? ?????????????</a>
        </li>
        <li>
          <a href="http://www.awladragab.com/ar/Default.aspx">?????????? ??????</a>
        </li>
        <li>
          <a href="https://www.facebook.com/KheirZamanEgypt/">?????? ????????</a>
        </li>
        <li>
          <a href="http://www.kazyon.com/">????????????</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5   style="margin-right:0px!important;float: right !important;text-align: center!important;"class="text-uppercase">???????????? ??????</h5>

        <ul  style="margin-right:0px!important;float: right !important;text-align: center!important;" class="list-unstyled">
          <li>
            <a href="#!">?????? ??????</a>
          </li>
          <li>
            <a href="#!">??????????</a>
          </li>
          <li>
            <a href="#!">????????????????</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">???????? ???????????? ???????????? ?? 2020 :
    <a href="https://mdbootstrap.com/education/bootstrap/"></a>?????????? T-Express.com</a>
  </div>
  <!-- Copyright -->

</footer>

<!-- End Footer -->

        
        <!--Start Bootstrap JS-->
            <!-- JQuery -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
        <!-- End Bootstrap JS-->

</body>

</html>