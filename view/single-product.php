<!-- Sản phẩm chi tiết -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">
            <?=$name_dm?>
          </h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">
          <?=$name_dm?>
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<style>
        .thetich {
          text-align: center;
          align-items: center;
          border: 1px solid #d1d5db;
          border-radius: 8px;
          color: #444;
          display: column;
          font-size: 14px;
          justify-content: center;
          margin: 0 25px 0;
          overflow: hidden;
          padding: 5px 0px;
          width: 20%;
        }
        .thetich:hover{
          color:orangered;
          border-color: orangered;
        }
        .product{
          display:none;
        }
        
      </style>
<!-- product-single start -->
<section class="product-single theme1 pt-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div>
          <div class="position-relative">
            <span class="badge badge-danger top-right">New</span>
          </div>
          <div class="product-sync-init mb-20">
            <div class="single-product">
              <div class="product-thumb">
                <img src="upload/<?=$hinhanh?>" alt="product-thumb" />
              </div>
            </div>
            <!-- single-product end -->
            <!-- single-product end -->
          </div>
        </div>
      </div>
      <div class="col-lg-6">
          <span style="color:red"><?=$thongbao??""?></span>
          <?php 
            foreach($sp_tt as $sp): 
            extract($sp);
          ?>
          <div class="single-product-info product">
            <div class="single-product-head">
              <h2 class="title mb-20"><?=$ten?></h2>
            </div>
            <div class="d-flex align-items-center mb-30">
              <?php 
                $i=-1;
                foreach($thetich_in_sanpham as $tt){
                  $i++;
                  $check= $gia==$tt["gia"]?"style='color:orangered;border-color: orangered;'":"";
                  echo '<span class="thetich" onclick="showthetich('.$i.')" '.$check.'>
                        <strong>'.$tt["thetich"].'</strong> <br>
                        <p>'.number_format($tt["gia"],0,",",".").'<u>đ</u></p>
                      </span>
                      <input type="hidden" name="id_sanpham_thetich" value='.$tt["id"].'>';
                  
                }
              ?> 
      
            
              <!-- <span class="thetich" href="#">
                <strong>100ML</strong> <br>
                <p>590.000 đ</p>
              </span>
              <span class="thetich" href="#">
                <strong>100ML</strong> <br>
                <p>590.000 đ</p>
              </span> -->
            </div>
            <div class="product-body mb-40">
              <div class="d-flex align-items-center mb-30">
                <span class="product-price me-2"><del class="del"><?=$giaao =$gia+10/100*$gia ."<u>đ</u>";?></del>
                  <span class="onsale"><?=$gia ."<u>đ</u>";?></span></span>
                <span class="badge position-static bg-dark rounded-0">Sale 10%</span>
              </div>
              <span>Còn lại: <?=$soluong?></span>
            </div>
            <div class="product-footer">
                <form action="index.php?act=themvaogiohang&id_sanpham=<?=$id_sanpham?>" method="post">
                  <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30">
                    <div class="count d-flex">
                      <input type="number" name="soluong" min="1" max="<?=$soluong?>" step="1" value="1" readonly />
                      <div class="button-group">
                        <span class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </span>
                        <span class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </span>
                      </div>
                    </div>
                    <div>
                      <button type="submit" name="themgiohang">
                        <span class="btn btn-dark btn--xl mt-5 mt-sm-0">
                          <span class="me-2"><i class="ion-android-add"></i></span>
                          Thêm Vào Giỏ Hàng
                        </span>
                      </button>
                    </div>
                    <div style="margin-left: 20px;">
                      <button type="submit" name="muangay">
                        <span class="btn btn-dark btn--xl mt-5 mt-sm-0" type="submit">
                          <span class="me-2"><i class="ion-android-add"></i></span>
                          Mua Ngay
                        </span>
                      </button>
                    </div>
                  </div>
                  <input type="hidden" name="id_sanpham_thetich" value="<?=$id?>">
                </form>
              <p>
                Mô tả: <?=$mota?>
              </p>
              <ul>
                <li>Xuất xứ: <?=$xuatxu?></li>
                <li>Phong cách: <?=$phongcach?></li>
              </ul>
              <!-- <div class="addto-whish-list">
                  <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                  <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                </div> -->
              <div class="pro-social-links mt-10">
                <ul class="d-flex align-items-center">
                  <li class="share">Share</li>
                  <li>
                    <a href="#"><i class="ion-social-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ion-social-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ion-social-google"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ion-social-pinterest"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<!-- product-single end -->
<!-- product tab start -->
<div class="product-tab theme1 bg-white pt-60 pb-80">
  <div class="container">
    <div class="product-tab-nav">
      <div class="row align-items-center">
        <div class="col-12">
          <nav class="product-tab-menu single-product">
            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab"
                  aria-controls="pills-contact" aria-selected="false">Reviews</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- product-tab-nav end -->
    <div class="row">
      <div class="col-12">
        <div class="tab-content" id="pills-tabContent">
            <div class="single-product-desc">
              <div class="row">
                <div class="col-lg-7">
                  <div class="review-wrapper">
                    <div class="single-review">
                      <div class="review-img">
                        <img src="view/assets/img/testimonial-image/1.png" alt="" />
                      </div>
                      <div class="review-content">
                        <div class="review-top-wrap">
                          <div class="review-left">
                            <div class="review-name">
                              <h4>White Lewis</h4>
                            </div>
                          </div>
                          <div class="review-left">
                            <a href="#">Reply</a>
                          </div>
                        </div>
                        <div class="review-bottom">
                          <p>
                            Vestibulum ante ipsum primis aucibus orci
                            luctustrices posuere cubilia Curae Suspendisse
                            viverra ed viverra. Mauris ullarper euismod
                            vehicula. Phasellus quam nisi, congue id nulla.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="single-review child-review">
                      <div class="review-img">
                        <img src="view/assets/img/testimonial-image/2.png" alt="" />
                      </div>
                      <div class="review-content">
                        <div class="review-top-wrap">
                          <div class="review-left">
                            <div class="review-name">
                              <h4>White Lewis</h4>
                            </div>
                            <div class="rating-product">
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                            </div>
                          </div>
                          <div class="review-left">
                            <a href="#">Reply</a>
                          </div>
                        </div>
                        <div class="review-bottom">
                          <p>
                            Vestibulum ante ipsum primis aucibus orci
                            luctustrices posuere cubilia Curae Sus pen disse
                            viverra ed viverra. Mauris ullarper euismod
                            vehicula.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="ratting-form-wrapper">
                    <h3>Add a Review</h3>
                    <div class="ratting-form">
                      <form action="#">
                        <div class="star-box">
                          <span>Your rating:</span>
                          <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="rating-form-style mb-10">
                              <input placeholder="Name" type="text" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="rating-form-style mb-10">
                              <input placeholder="Email" type="email" />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="rating-form-style form-submit">
                              <textarea name="Your Review" placeholder="Message"></textarea>
                              <input type="submit" value="Submit" />
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- product tab end -->
<!-- new arrival section start -->
<section class="theme1 bg-white pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-3 mb-3">You might also like</h2>
          <p class="text mt-10">Add Related products to weekly line up</p>
        </div>
      </div>
      <div class="col-12">
        <div class="product-slider-init theme1 slick-nav">
          <div class="slider-item">
            <div class="card product-card">
              <div class="card-body p-0">
                <div class="media flex-column">
                  <div class="product-thumbnail position-relative">
                    <span class="badge badge-danger top-right">New</span>
                    <a href="single-product.html">
                      <img class="first-img" src="view/assets/img/product/1.png" alt="thumbnail" />
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
                        <a href="shop-grid-4-column.html">All Natural Makeup Beauty Cosmetics</a>
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
          <!-- slider-item end -->
          <div class="slider-item">
            <div class="card product-card">
              <div class="card-body p-0">
                <div class="media flex-column">
                  <div class="product-thumbnail position-relative">
                    <span class="badge badge-danger top-right">New</span>
                    <a href="single-product.html">
                      <img class="first-img" src="view/assets/img/product/2.png" alt="thumbnail" />
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
                        <a href="shop-grid-4-column.html">On Trend Makeup and Beauty Cosmetics</a>
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
          <!-- slider-item end -->
          <div class="slider-item">
            <div class="card product-card">
              <div class="card-body p-0">
                <div class="media flex-column">
                  <div class="product-thumbnail position-relative">
                    <span class="badge badge-danger top-right">New</span>
                    <a href="single-product.html">
                      <img class="first-img" src="view/assets/img/product/3.png" alt="thumbnail" />
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
                        <a href="shop-grid-4-column.html">The Cosmetics and Beauty brand Shoppe</a>
                      </h3>
                      <div class="star-rating">
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star de-selected"></span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between">
                        <span class="product-price">$21.51</span>
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
          <!-- slider-item end -->
          <div class="slider-item">
            <div class="card product-card">
              <div class="card-body p-0">
                <div class="media flex-column">
                  <div class="product-thumbnail position-relative">
                    <span class="badge badge-danger top-right">New</span>
                    <a href="single-product.html">
                      <img class="first-img" src="view/assets/img/product/4.png" alt="thumbnail" />
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
                        <a href="shop-grid-4-column.html">orginal Age Defying Cosmetics Makeup</a>
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
          <!-- slider-item end -->
          <div class="slider-item">
            <div class="card product-card">
              <div class="card-body p-0">
                <div class="media flex-column">
                  <div class="product-thumbnail position-relative">
                    <span class="badge badge-danger top-right">New</span>
                    <a href="single-product.html">
                      <img class="first-img" src="view/assets/img/product/5.png" alt="thumbnail" />
                      <img class="second-img" src="view/assets/img/product/6.png" alt="thumbnail" />
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
                        <a href="shop-grid-4-column.html">orginal Clear Water Cosmetics On Trend</a>
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
          <!-- slider-item end -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- new arrival section end -->
<script>
  let index= 0;
  function showthetich(index){
    let thetich = document.getElementsByClassName('product');
    for(let i of thetich){
        i.style.display="none";
    }
    thetich[index].style.display="block";
  }
   showthetich(0);
</script>

<?php
include "view/footer.php";
?>