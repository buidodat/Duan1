<!-- Đầu trang -->

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/looki/looki/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Nov 2023 10:25:55 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="" />
  <title>Looki - Beauty & Cosmetics eCommerce Bootstrap 5 Template</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="view/assets/logo/logomoi.png" />

  <!--********************************** 
      all css files   
  *************************************-->

  <!--*************************************************** 
     fontawesome,bootstrap,plugins and main style css
   ***************************************************-->
  <!-- cdn links -->

  <link rel="stylesheet" href="view/assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="view/assets/css/ionicons.min.css" />
  <link rel="stylesheet" href="view/assets/css/simple-line-icons.css" />
  <link rel="stylesheet" href="view/assets/css/plugins/jquery-ui.min.css">
  <link rel="stylesheet" href="view/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="view/assets/css/plugins/plugins.css" />
  <link rel="stylesheet" href="view/assets/css/style.min.css" />

</head>

<body>
<!-- offcanvas-overlay start -->
  <div class="offcanvas-overlay"></div>
  <!-- offcanvas-overlay end -->
  <div id="offcanvas-mobile-menu" class="offcanvas theme1 offcanvas-mobile-menu">
    <div class="inner">
      <div class="border-bottom mb-4 pb-4 text-end">
        <button class="offcanvas-close">×</button>
      </div>
      <div class="offcanvas-head mb-4">
        <nav class="offcanvas-top-nav">
          <ul class="d-flex flex-wrap">
            <li class="my-2 mx-2">
              <a href="wishlist.html">
                <i class="icon-bag"></i> Wishlist <span>(0)</span></a>
            </li>
            <li class="my-2 mx-2">
              <a href="wishlist.html">
                <i class="ion-android-favorite-outline"></i> Wishlist
                <span>(3)</span></a>
            </li>
            <li class="my-2 mx-2">
              <a class="search search-toggle" href="javascript:void(0)">
                <i class="icon-magnifier"></i> Search</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <!-- OffCanvas Wishlist Start -->
  <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist theme1">
    <div class="inner">
      <div class="head d-flex flex-wrap justify-content-between">
        <span class="title">Wishlist</span>
        <button class="offcanvas-close">×</button>
      </div>
      <ul class="minicart-product-list">
        <li>
          <a href="single-product.html" class="image"><img src="view/assets/img/mini-cart/4.png"
              alt="Cart product Image" /></a>
          <div class="content">
            <a href="single-product.html" class="title">orginal Age Defying Cosmetics Makeup</a>
            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
            <a href="#" class="remove">×</a>
          </div>
        </li>
        <li>
          <a href="single-product.html" class="image"><img src="view/assets/img/mini-cart/5.png"
              alt="Cart product Image" /></a>
          <div class="content">
            <a href="single-product.html" class="title">On Trend Makeup and Beauty Cosmetics</a>
            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
            <a href="#" class="remove">×</a>
          </div>
        </li>
        <li>
          <a href="single-product.html" class="image"><img src="view/assets/img/mini-cart/6.png"
              alt="Cart product Image" /></a>
          <div class="content">
            <a href="single-product.html" class="title">orginal Age Defying Cosmetics Makeup</a>
            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
            <a href="#" class="remove">×</a>
          </div>
        </li>
      </ul>
      <a href="wishlist.html" class="btn btn-secondary btn--lg d-block d-sm-inline-block mt-30">view wishlist</a>
    </div>
  </div>
  <!-- OffCanvas Wishlist End -->

  <!-- OffCanvas Cart Start -->
  <div id="offcanvas-cart" class="offcanvas offcanvas-cart theme1">
    <div class="inner">
      <div class="head d-flex flex-wrap justify-content-between">
        <span class="title">Cart</span>
        <button class="offcanvas-close">×</button>
      </div>
      <ul class="minicart-product-list">
        <li>
          <a href="single-product.html" class="image"><img src="view/assets/img/mini-cart/1.png"
              alt="Cart product Image" /></a>
          <div class="content">
            <a href="single-product.html" class="title">orginal Age Defying Cosmetics Makeup</a>
            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
            <a href="#" class="remove">×</a>
          </div>
        </li>
        <li>
          <a href="single-product.html" class="image"><img src="view/assets/img/mini-cart/2.png"
              alt="Cart product Image" /></a>
          <div class="content">
            <a href="single-product.html" class="title">On Trend Makeup and Beauty Cosmetics</a>
            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
            <a href="#" class="remove">×</a>
          </div>
        </li>
        <li>
          <a href="single-product.html" class="image"><img src="view/assets/img/mini-cart/3.png"
              alt="Cart product Image" /></a>
          <div class="content">
            <a href="single-product.html" class="title">orginal Age Defying Cosmetics Makeup</a>
            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
            <a href="#" class="remove">×</a>
          </div>
        </li>
      </ul>
      <div class="sub-total d-flex flex-wrap justify-content-between">
        <strong>Subtotal :</strong>
        <span class="amount">$144.00</span>
      </div>
      <a href="cart.html" class="btn btn-secondary btn--lg d-block d-sm-inline-block me-sm-2">view cart</a>
      <a href="checkout.html" class="btn btn-dark btn--lg d-block d-sm-inline-block mt-4 mt-sm-0">checkout</a>
      <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
    </div>
  </div>
  <!-- OffCanvas Cart End -->

  <!-- header start -->
  <header>
    <!-- header-middle satrt -->
    <div id="sticky" class="header-middle theme1 py-15 py-lg-0">
      <div class="container position-relative">
        <div class="row align-items-center">
          <div class="col-6 col-lg-2 col-xl-2">
            <div class="logo">
              <a href="index.html"><img src="view/assets/img/logo/logomoi.png" alt="logo" /></a>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-none d-lg-block">
            <ul class="main-menu d-flex justify-content-center">
              <li class="active ml-0">
                <a href="index.php" class="ps-0">Home</a>
              </li>
              <li class="position-static">
                <a href="index.php?act=cuahang">Shop <i class="ion-ios-arrow-down"></i></a>
                <ul class="sub-menu">
                  <li><a href="#">Codedeco</a></li>
                  <li><a href="#">Dior</a></li>
                  <li><a href="#">Jilian</a></li>
                  <li><a href="#">Calvin Klein</a></li>
                  <li><a href="#">Lelabo</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
                <ul class="sub-menu">
                  <li><a href="index.php?act=gioithieu">About Page</a></li>
                  <li><a href="index.php?act=giohang">Cart Page</a></li>
                  <li><a href="index.php?act=thanhtoan">Checkout Page</a></li>
                  <li><a href="index.php?act=dangnhap">Login & Register Page</a></li>
                  <li><a href="index.php?act=taikhoanuser">Account Page</a></li>
                  <li><a href="index.php?act=spyeuthich">Wishlist Page</a></li>
                </ul>
              </li>
              <li>
                <a href="index.php?act=thongtin">Blog</a>
              </li>
              <li><a href="index.php?act=lienhe">contact Us</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-3 col-xl-2">
            <!-- search-form end -->
            <div class="d-flex align-items-center justify-content-end">
              <!-- static-media end -->
              <div class="cart-block-links theme1 d-none d-sm-block">
                <ul class="d-flex">
                  <li>
                    <a href="javascript:void(0)" class="search search-toggle">
                      <i class="icon-magnifier"></i>
                    </a>
                  </li>
                  <li>
                    <a href="compare.html">
                      <span class="position-relative">
                        <i class="icon-shuffle"></i>
                        <span class="badge cbdg1">1</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                      <span class="position-relative">
                        <i class="icon-heart"></i>
                        <span class="badge cbdg1">3</span>
                      </span>
                    </a>
                  </li>
                  <li class="mr-xl-0 cart-block position-relative">
                    <a class="offcanvas-toggle" href="#offcanvas-cart">
                      <span class="position-relative">
                        <i class="icon-bag"></i>
                        <span class="badge cbdg1">3</span>
                      </span>
                    </a>
                  </li>
                  <!-- cart block end -->
                </ul>
              </div>
              <div class="mobile-menu-toggle theme1 d-lg-none">
                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                  <svg viewbox="0 0 700 550">
                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                      id="top"></path>
                    <path d="M300,320 L540,320" id="middle"></path>
                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                      id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header-middle end -->
  </header>
  <!-- header end -->