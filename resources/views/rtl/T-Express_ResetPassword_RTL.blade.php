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
          @media (min-width: 768px){
            .page-footer {
                bottom: 0!important;
                width:100%!important;
                position:relative!important;
            }
          }
          @media (min-width: 1024px){
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
          <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fas fa-shopping-basket"></i>السوق</a>
      </li>
      <li class="nav-item dropdown">
          <a href="T-Express_MyOrders-Page-1_RTL"class="nav-link">
          <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fas fa-shipping-fast"></i>الطلبات</a>
      </li>
      <li class="nav-item dropdown">
          <a href="T-Express_MyFavorites_RTL"class="nav-link">
          <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class=" far fa-star"></i>المفضلة</a>
      </li>
      <li class="nav-item dropdown">
          <a href="T-Express_ContactUs_RTL"class="nav-link">
          <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fas fa-phone"></i>تواصل معنا</a>
      </li>
      <li class="nav-item dropdown">
        <a href=""class="nav-link">
        <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fas fa-bell"></i>الاشعارات</a>
    </li>
    <li class="nav-item dropdown">
      <a href="T-Express_Cart_RTL"class="nav-link">
      <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fab fa-opencart"></i>عربة التسوق</a>
  </li>
  <li class="nav-item dropdown">
    <a href=""class="nav-link" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    <i  style="margin-right:0px!important;float: right !important;text-align: center!important;"class="fas fa-user"></i>الحساب</a>
    <div style="margin-right:0px!important;float: right !important;text-align: center!important;" class="dropdown-menu dropdown-menu-right dropdown-default"
        aria-labelledby="navbarDropdownMenuLink-4">
        <a class="dropdown-item" href="T-Express_SignUp_RTL"> التسجيل</a>
            <a class="dropdown-item" href="T-Express_SignIn_RTL"> تسجيل الدخول</a>
            <a class="dropdown-item" href="T-Express_AccountSettings_RTL"> إعدادات الحساب</a>
            <a class="dropdown-item" href="T-Express_ResetPassword_RTL"> تغير كلمة المرور</a>
            <a class="dropdown-item" href="T-Express_ForgotPassword_RTL"> نسيت كلمة المرور</a>
            <a class="dropdown-item" href="T-Express_MarketPlace_RTL"> تسجيل الخروج</a>
      </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    <i style="margin-right:0px!important;float: right !important;text-align: center!important;" class="fas fa-globe-africa"></i>اللغة</a>
  <div style="margin-right:0px!important;float: right !important;text-align: center!important;"class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="T-Express_MarketPlace">English/الانجليزية</a>
          <a class="dropdown-item" href="T-Express_MarketPlace_RTL">Arabic/العربية</a>
  </div>
</li>
  </ul>
  <!-- Links -->
  </div>
  <!-- Collapsible content -->
  
</nav>
<div style="background-color: #fff!important;margin: 0px 0px!important;"class="input-group md-form form-sm form-2 pl-0">
  <input class="form-control my-0 py-1 amber-border" type="text" placeholder="البحث" aria-label="البحث">
  <div class="input-group-append">
    <span class="input-group-text amber " id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span>
  </div>
  </div>
</div>
<!-- End Navbar -->


<!-- End Header -->

<!--Start body-->

    <!--Start Change Password-->

        <div class="d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
        <div class="card">

            <form class="text-center border-light" action="#!">

              <p style="color: #2196f3 !important;"class="h4 mb-4">إعادة تعيين كلمة المرور؟</p>

              <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="كلمة المرور الحالية">

              <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="كلمة المرور الجديدة">

              <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="التحقق من كلمة المرور">

              <button style="background-color:#2196f3 !important;" class="btn btn-info btn-block my-4 rounded-pill" type="submit">إعادة تعيين كلمة المرور</button>
            </form>
        </div>
        </div>
        </div>       
  <!-- End Change Password -->

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
        <h5 class="text-uppercase">عن الشركة</h5>
        <p>شركة T-Express هي احدي الشركات الرائدة في مجال توصيل الطلبات و البقالة للمنازل.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

     <!-- Grid column -->
     <div style="margin-right:0px!important;float: right !important;text-align:right !important;" class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5  style="margin-right:0px!important;float: right !important;text-align: center!important;" class="text-uppercase">شركاؤنا</h5>

      <ul style="margin-right:0px!important;float: right !important;text-align:right !important;" class="list-unstyled">
        <li>
          <a href="https://www.carrefouregypt.com/">كارفور</a>
        </li>
        <li>
          <a href="http://gomlamarket.com/">فتح الله جملة ماركت</a>
        </li>
        <li>
          <a href="https://www.facebook.com/ZahranMarketEG/">زهران ماركت</a>
        </li>
        <li>
          <a href="https://www.facebook.com/MetroMarketEgypt/">مترو ماركت</a>
        </li>
        <li>
          <a href="https://www.facebook.com/DailyMarketEgypt/">صقر دايلى ماركت‎</a>
        </li>
        <li>
          <a href="http://www.awladragab.com/ar/Default.aspx">أولاد رجب</a>
        </li>
        <li>
          <a href="https://www.facebook.com/KheirZamanEgypt/">خير زمان</a>
        </li>
        <li>
          <a href="http://www.kazyon.com/">كازيون</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5   style="margin-right:0px!important;float: right !important;text-align: center!important;"class="text-uppercase">تابعنا على</h5>

        <ul  style="margin-right:0px!important;float: right !important;text-align: center!important;" class="list-unstyled">
          <li>
            <a href="#!">فيس بوك</a>
          </li>
          <li>
            <a href="#!">تويتر</a>
          </li>
          <li>
            <a href="#!">انستجرام</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">جميع الحقوق محفوظة © 2020 :
    <a href="https://mdbootstrap.com/education/bootstrap/"></a>لموقع T-Express.com</a>
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