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
        href = "css/T-Express_Style.css" />
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
              position: relative!important;
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
    <nav style="background-color: #31AFF5!important"class="navbar navbar-expand-lg navbar-dark primary-color">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="T-Express_MarketPlace">
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
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a href="T-Express_MarketPlace" class="nav-link">
              <i class="fas fa-shopping-basket"></i>MarketPlace</a>
          </li>
          <li class="nav-item">
              <a href="T-Express_MyOrders-Page-1" class="nav-link">
              <i class="fas fa-shipping-fast"></i>My Orders</a>
          </li>
          <li class="nav-item">
              <a href="T-Express_MyFavorites" class="nav-link">
              <i class="far fa-star"></i>My Favorites</a>
          </li>
          <li class="nav-item">
              <a href="T-Express_ContactUs" class="nav-link">
              <i class="fas fa-phone"></i>Contact Us</a>
          </li>
      </ul>
      <nav style="padding: 0px!important;" class="navbar">
        
        <div class="navbar-collapse" id="navbarSupportedContent-4">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="far fa-bell"></i>  notifications
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="T-Express_Cart">
                <i class="fab fa-opencart"></i> Cart</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> Profile </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                      <a class="dropdown-item" href="T-Express_SignUp"> Sign Up</a>
                      <a class="dropdown-item" href="T-Express_SignIn"> Sign In</a>
                      <a class="dropdown-item" href="T-Express_AccountSettings"> Account Settings</a>
                      <a class="dropdown-item" href="T-Express_ResetPassword"> Reset Password</a>
                      <a class="dropdown-item" href="T-Express_ForgotPassword"> Forgot Password</a>
                      <a class="dropdown-item" href="T-Express_MarketPlace"> Sign Out</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-globe-africa"></i></a>
              <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                      <a class="dropdown-item" href="T-Express_MarketPlace">English/الانجليزية</a>
                      <a class="dropdown-item" href="T-Express_MarketPlace_RTL">Arabic/العربية</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Links -->
      </div>
      <!-- Collapsible content -->
      
</nav>
<div style="background-color: #fff!important;margin: 0px 0px!important;"class="input-group md-form form-sm form-2 pl-0">
<input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search">
<div class="input-group-append">
  <span class="input-group-text amber " id="basic-text1"><i class="fas fa-search text-grey"
      aria-hidden="true"></i></span>
</div>
</div>
<!-- End Navbar -->

<!-- End Header -->

<!--Start body-->

    <!--Start My Account-->

      <div class="d-flex justify-content-center">
      <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
      <div class="card">
                <form class="text-center" action="#!">

                    <p style="color: #2196f3 !important;" class="h4 mb-4">Update Account Information ?</p>

                    <div class="form-row mb-4">
                        <div class="col">
                          
                            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="F - name">
                        </div>
                        <div class="col">
                          
                            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="L - name">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col">
                            
                            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Email">
                        </div>
                        <div class="col">
                            
                            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Phone">
                        </div>
                    </div>

                    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Address">

                    <div style="margin-top: 26px;" class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                          aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01"></label>
                      </div>
                    </div>
                    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                        Upload National Id to verify your Account
                      </small>
                    <button  style="background-color:#2196f3 !important;" class="btn btn-info my-4 btn-block rounded-pill" type="submit">Save Change</button>

                </form>
      </div>
      </div>
      </div>

    <!-- End My Account -->       

<!-- End body -->
        

<!--Start Footer-->
              <footer
              class="page-footer font-small blue pt-4">

                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">

                  <!-- Grid row -->
                  <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">

                      <!-- Content -->
                      <h5 class="text-uppercase">About Us</h5>
                      <p>Here you can use rows and columns to organize your footer content.</p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none pb-3">

                   <!-- Grid column -->
                   <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Our Partners</h5>

                    <ul class="list-unstyled">
                      <li>
                        <a href="#!">Carrefour</a>
                      </li>
                      <li>
                        <a href="#!">Fathalla Market</a>
                      </li>
                      <li>
                        <a href="#!">Zahran Market</a>
                      </li>
                      <li>
                        <a href="#!">Metro Market</a>
                      </li>
                      <li>
                        <a href="#!">Sakr</a>
                      </li>
                      <li>
                        <a href="#!">Ragab Sons</a>
                      </li>
                      <li>
                        <a href="#!">Kheir Zaman</a>
                      </li>
                      <li>
                        <a href="#!">Kazyon</a>
                      </li>
                    </ul>

                  </div>
                  <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                      <!-- Links -->
                      <h5 class="text-uppercase">JOIN US ON</h5>

                      <ul class="list-unstyled">
                        <li>
                          <a href="#!">facebook</a>
                        </li>
                        <li>
                          <a href="#!">twitter</a>
                        </li>
                        <li>
                          <a href="#!">google plus</a>
                        </li>
                        <li>
                          <a href="#!">instagram</a>
                        </li>
                      </ul>

                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                </div>
                <!-- Footer Links -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2019 Copyright:
                  <a href="https://mdbootstrap.com/education/bootstrap/"> T-Express.com All Rights Reserved.</a>
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