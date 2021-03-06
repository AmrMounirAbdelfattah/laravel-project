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
                      <a class="dropdown-item" href="T-Express_MarketPlace">English/????????????????????</a>
                      <a class="dropdown-item" href="T-Express_MarketPlace_RTL">Arabic/??????????????</a>
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

    <div class="px-lg-0">
      <!-- For demo purpose -->
      <div class="container text-white py-5 text-center">
        <h1 style="color: #2196f3 !important;" class="display-4">Cart</h1>
        <p class="lead mb-0"></p>
        <p class="lead"><a href="https://bootstrapious.com/snippets" class="text-white font-italic">
          <u></u></a>
        </p>
      </div>
      <!-- End -->
      <div class="pb-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 bg-white rounded shadow-sm mb-5">
              <!-- Shopping cart table -->
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr style="background-color:#c6e2ff!important;">
                      <th scope="col" class="border-0">
                        <div style="font-size: 20px!important;color: #2196f3 !important; font-weight: 500!important;"class="p-2 px-3 text-uppercase">Product</div>
                      </th>
                      <th scope="col" class="border-0">
                        <div style="font-size: 20px!important;color: #2196f3 !important;"class="py-2 text-uppercase"><i class="fas fa-money-bill-wave"></i></div>
                      </th>
                      <th scope="col" class="border-0">
                        <div style="font-size: 20px!important;color: #2196f3 !important;" class="py-2 text-uppercase"><i class="fas fa-cart-plus"></i></div>
                      </th>
                      <th scope="col" class="border-0">
                        <div style="font-size: 20px!important;color: #2196f3 !important;"class="py-2 text-uppercase"><i class="fas fa-shopping-cart"></i></div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="border-0">
                        <div class="p-2">
                          <img src="img/meet.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Fresh Beef Steak</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Meat &  Fish</span>
                          </div>
                        </div>
                      </th>
                      <td class="border-0 align-middle"><strong>103.5 EGP</strong></td>
                      <td class="border-0 align-middle"><strong>3</strong></td>
                      <td class="border-0 align-middle"><a style="font-size: 20px!important;color: #2196f3 !important;" href="#" class="text-dark"><i class="fas fa-plus-circle"></i> <i class="fas fa-minus-circle"></i>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="p-2">
                          <img src="img/chic.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Fresh Chicken Whole</a></h5><span class="text-muted font-weight-normal font-italic">Category: Meat &  Fish</span>
                          </div>
                        </div>
                      </th>
                      <td class="align-middle"><strong>47.99 EGP</strong></td>
                      <td class="align-middle"><strong>3</strong></td>
                      <td class="align-middle"><a style="font-size: 20px!important;color: #2196f3 !important;" href="#" class="text-dark"><i class="fas fa-plus-circle"></i> <i class="fas fa-minus-circle"></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End -->
            </div>
          </div>
          <div class="row py-5 p-4 bg-white rounded shadow-sm">
            <div class="col-lg-6">
              <div style="background-color: #c6e2ff;" class="rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
              <div class="p-4">
                <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                <div class="input-group mb-4 border rounded-pill p-2">
                  <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                  <div class="input-group-append border-0">
                    <button style="background-color: #2196f3 !important;color: #fff;" id="button-addon3" type="button" class="btn px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                  </div>
                </div>
              </div>
              <div style="background-color: #c6e2ff;" class="rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
              <div class="p-4">
                <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                <textarea name="" cols="30" rows="2" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-lg-6">
              <div style="background-color: #c6e2ff;" class="rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
              <div class="p-4">
                <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                <ul class="list-unstyled mb-4">
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>151.49 EGP</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>10.00 EGP</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>0.00 EGP</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                    <h5 class="font-weight-bold">161.49 EGP</h5>
                  </li>
                </ul><a style="background-color: #2196f3 !important;color: #fff;" href="#" class="btn rounded-pill py-2 btn-block">Procceed to checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- End body -->
        

<!--Start Footer-->
              <footer
              style="bottom: 0;width:100%;"
              class="page-footer font-small blue pt-4" id="f">

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
                <div class="footer-copyright text-center py-3">?? 2019 Copyright:
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