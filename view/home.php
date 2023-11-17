<!-- Trang chủ -->

<!-- main slider start -->
<section class="bg-light">
    <div class="main-slider dots-style theme1">
      <div class="slider-item bg-img bg-img1">
        <div class="container">
          <div class="row align-items-center slider-height">
            <div class="col-12">
              <div class="slider-content">
                <p class="text animated" data-animation-in="fadeInDown" data-delay-in=".300">
                  Face Makeup Brush
                </p>
                <h2 class="title animated">
                  <span class="animated d-block" data-animation-in="fadeInLeft" data-delay-in=".800">Skincare Brush
                    Set</span>
                  <span class="animated font-weight-bold" data-animation-in="fadeInRight" data-delay-in="1.5">Sale 30%
                    Off</span>
                </h2>
                <a href="shop-grid-4-column.html" class="btn btn-outline-primary btn--lg animated mt-45 mt-sm-25"
                  data-animation-in="fadeInLeft" data-delay-in="1.9">Shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- slider-item end -->
      <div class="slider-item bg-img bg-img2">
        <div class="container">
          <div class="row align-items-center slider-height">
            <div class="col-12">
              <div class="slider-content">
                <p class="text animated" data-animation-in="fadeInLeft" data-delay-in=".300">
                  Morneva Shampoo
                </p>

                <h2 class="title">
                  <span class="animated d-block" data-animation-in="fadeInRight" data-delay-in=".800">scalpcare
                    Shampoo</span>
                  <span class="animated font-weight-bold" data-animation-in="fadeInUp" data-delay-in="1.5">Sale 40%
                    Off</span>
                </h2>
                <a href="shop-grid-4-column.html" class="btn btn-outline-primary btn--lg animated mt-45 mt-sm-25"
                  data-animation-in="fadeInLeft" data-delay-in="1.9">Shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- slider-item end -->
      <div class="slider-item bg-img bg-img3">
        <div class="container">
          <div class="row align-items-center slider-height">
            <div class="col-12">
              <div class="slider-content">
                <p class="text animated" data-animation-in="fadeInLeft" data-delay-in=".300">
                  Runway Lip Palette red
                </p>
                <h2 class="title">
                  <span class="animated d-block" data-animation-in="fadeInRight" data-delay-in=".800">Lipscare
                    Lipsticks</span>
                  <span class="animated font-weight-bold" data-animation-in="fadeInUp" data-delay-in="1.5">Sale 60%
                    Off</span>
                </h2>
                <a href="shop-grid-4-column.html" class="btn btn-outline-primary btn--lg animated mt-45 mt-sm-25"
                  data-animation-in="fadeInLeft" data-delay-in="1.9">Shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- slider-item end -->
    </div>
  </section>
  <!-- main slider end -->
  <!-- staic media start -->
<!-- <section class="static-media-section py-80 bg-white">
  <div class="container">
    <div class="static-media-wrap theme-bg">
      <div class="row">
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img
              class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
              src="view/assets/img/icon/2.png"
              alt="icon"
            />
            <div class="media-body">
              <h4 class="title">Free Shipping</h4>
              <p class="text">On all orders over $75.00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img
              class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
              src="view/assets/img/icon/3.png"
              alt="icon"
            />
            <div class="media-body">
              <h4 class="title">Free Returns</h4>
              <p class="text">Returns are free within 9 days</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img
              class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
              src="view/assets/img/icon/4.png"
              alt="icon"
            />
            <div class="media-body">
              <h4 class="title">100% Payment Secure</h4>
              <p class="text">Your payment are safe with us.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img
              class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
              src="view/assets/img/icon/5.png"
              alt="icon"
            />
            <div class="media-body">
              <h4 class="title">Support 24/7</h4>
              <p class="text">Contact us 24 hours a day</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
  <!-- staic media end -->

  <!-- product tab start -->
  <?php 
    $list_danhmuc =loadall_danhmuc();
  ?> 
  <?php foreach($list_danhmuc as $dm ){?>
  <section class="product-tab bg-white pt-50 pb-80">
    <div class="col-12">
      <div class="section-title text-center">
        <h2 class="title pb-3 mb-3"><?=$dm['ten']?></h2>
        <p class="text">
          "Mỗi gói hàng như một gói quà!"
        </p>
      </div>
    </div>
    <!-- common banner  start -->
  <!-- <div class="common-banner bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-30">
          <div class="banner-thumb">
            <a
              href="shop-grid-4-column.html"  
              class="zoom-in d-block overflow-hidden"
            >
              <img src="view/assets/img/banner/1.jpg" alt="banner-thumb-naile" />
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-30">
          <div class="banner-thumb">
            <a
              href="shop-grid-4-column.html"
              class="zoom-in d-block overflow-hidden"
            >
              <img src="view/assets/img/banner/2.jpg" alt="banner-thumb-naile" />
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-30">
          <div class="banner-thumb">
            <a
              href="shop-grid-4-column.html"
              class="zoom-in d-block overflow-hidden"
            >
              <img src="view/assets/img/banner/3.jpg" alt="banner-thumb-naile" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    <!-- common banner  end -->
    <div class="container">
      <!-- <div class="product-tab-nav mb-50">
        <div class="row align-items-center">
          
          <div class="col-12">
            <nav class="product-tab-menu theme1">
            <ul
              class="nav nav-pills justify-content-center"
              id="pills-tab"
              role="tablist"
            >
              <li class="nav-item">
                <a
                  class="nav-link active"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  href="#pills-home"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                  >new products</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="pills-profile-tab"
                  data-bs-toggle="pill"
                  href="#pills-profile"
                  role="tab"
                  aria-controls="pills-profile"
                  aria-selected="false"
                  >onsale</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="pills-contact-tab"
                  data-bs-toggle="pill"
                  href="#pills-contact"
                  role="tab"
                  aria-controls="pills-contact"
                  aria-selected="false"
                  >upcoming products</a
                >
              </li>
            </ul>
          </nav>
          </div> 
        </div>
      </div> -->
      <!-- product-tab-nav end -->

      <div class="row">
        <div class="col-12">
          <div class="tab-content" id="pills-tabContent">
            <!-- first tab-pane -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="product-slider-init theme1 slick-nav">
                <?php 
                  $listspnew= sanphamnew_in_danhmuc($dm['id']);
                  foreach($listspnew as $spnew):
                ?>
                <div class="slider-item">
                  <div class="card product-card">
                    <div class="card-body p-0">
                      <div class="media flex-column">
                        <div class="product-thumbnail position-relative" style="width: 300px;height: 300px;">
                          <span class="badge badge-danger top-right">New</span>
                          <a href="single-product.html">
                            <img class="first-img" src="upload/<?=$spnew['hinh']?>" alt="thumbnail" />
                          </a>
                          <!-- product links -->
                          <ul class="actions d-flex justify-content-center">
                            <li>
                              <a class="action" href="wishlist.html">
                                <span data-bs-toggle="tooltip" data-placement="bottom" title="add to wishlist"
                                  class="icon-heart">
                                </span>
                              </a>
                            </li>
                            <li>
                              <a class="action" href="#" data-bs-toggle="modal" data-bs-target="#compare">
                                <span data-bs-toggle="tooltip" data-placement="bottom" title="Add to compare"
                                  class="icon-shuffle"></span>
                              </a>
                            </li>
                            <li>
                              <a class="action" href="#" data-bs-toggle="modal" data-bs-target="#quick-view">
                                <span data-bs-toggle="tooltip" data-placement="bottom" title="Quick view"
                                  class="icon-magnifier"></span>
                              </a>
                            </li>
                          </ul>
                          <!-- product links end-->
                        </div>
                        <div class="media-body">
                          <div class="product-desc">
                            <h3 class="title">
                              <a href="shop-grid-4-column.html"><?=$spnew['tensp']?></a>
                            </h3>
                            <div class="star-rating">
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star de-selected"></span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                              <span class="product-price">$11.90</span>
                              <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                <i class="icon-basket"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
                <!-- slider-item end -->
                <!-- New women's Fresh Faced Trendy cream -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php } ?>
  <!-- product tab end -->

  <?php
  include "view/footer.php";
  ?>