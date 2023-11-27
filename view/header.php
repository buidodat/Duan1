<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Looki - Beauty & Cosmetics eCommerce Bootstrap 5 Template</title>
  <link rel="shortcut icon" type="image/x-icon" href="view/assets/logo/logomoi.png" />
  <link rel="stylesheet" href="view/assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="view/assets/css/ionicons.min.css" />
  <link rel="stylesheet" href="view/assets/css/simple-line-icons.css" />
  <link rel="stylesheet" href="view/assets/css/plugins/jquery-ui.min.css">
  <link rel="stylesheet" href="view/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="view/assets/css/plugins/plugins.css" />
  <link rel="stylesheet" href="view/assets/css/style.min.css" />
</head>
<body>
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
                  <?php foreach($listdm as $dm):?>
                  <li><a href="index.php?act=cuahang&iddm=<?=$dm['id']?>"><?=$dm['ten']?></a></li>
                  <?php endforeach ;?>
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
                    <a href="" class="search search-toggle">
                      <i class="icon-magnifier"></i>
                    </a>
                  </li>
                <!-- listlove -->
                  <li class="mr-xl-0 cart-block position-relative">
                    <a class="offcanvas-toggle" href="#offcanvas-cart">
                      <span class="position-relative">
                      <i class="fa-solid fa-heart fa-l" style="color: #020203;"></i>
                      </span>
                    </a>
                  </li>
                       
                <!-- cart -->
                  <li class="mr-xl-0 cart-block position-relative">
                    <a class="" href="index.php?act=giohang">
                      <span class="position-relative">
                      <i class="fa-solid fa-cart-shopping  fa-l" style="color: #000000;"></i>
                      <span class="badge cbdg1">
                        <?=$giohang??"0";
                        ?>
                      </span>
                      </span>
                    </a>
                  </li>
                  <span class="position-relative">
                  <!-- <i class="fa-solid fa-user"></i> -->
                  <a href="index.php?act=dangnhap"><i class="fa-solid fa-user fa-xl" style="color: #0d0d0d;" ></i></a></span>
                  <!-- cart block end -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header-middle end -->
  </header>
  <!-- header end -->