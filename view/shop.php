<!-- Cửa hàng -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">
          All Products
          </h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
          All Products <?=$namedm??""?>
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="product-tab bg-white pt-80 pb-80">
  <div class="container">
    <div class="grid-nav-wraper bg-lighten2 mb-30">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <nav class="shop-grid-nav">
            <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">
                  <i class="fa fa-th"></i>
                </a>
              </li>
              <li class="nav-item mr-0">
                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab"
                  aria-controls="pills-profile" aria-selected="false"><i class="fa fa-list"></i></a>
              </li>
              <li>
                <span class="total-products text-capitalize">There are 13 products.</span>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-12 col-md-6 position-relative">
          <div class="shop-grid-button d-flex align-items-center">
            <span class="sort-by">Sort by:</span>
            <button class="d-flex justify-content-between" type="button" id="dropdownMenuButton"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Relevance <span class="ion-android-arrow-dropdown"></span>
            </button>
            <div class="dropdown-menu shop-grid-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Relevance</a>
              <a class="dropdown-item" href="#"> Name, A to Z</a>
              <a class="dropdown-item" href="#"> Name, Z to A</a>
              <a class="dropdown-item" href="#"> Price, low to high</a>
              <a class="dropdown-item" href="#"> Price, high to low</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- product-tab-nav end -->
    <div class="tab-content" id="pills-tabContent">
      <!-- first tab-pane -->
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row grid-view theme1">
        <?php 
          foreach($listsp as $sp): 
            extract($sp);
        ?>
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="card product-card">
              <div class="card-body">
                <div class="product-thumbnail position-relative" style="height: 450px;" >
                  <a href="index.php?act=sanphamct&id_sanpham=<?=$id?>">
                    <img class="first-img" src="upload/<?=$hinh?>" alt="thumbnail" style="width: 100% ;"/>
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
                      <a class="action" href="index.php?act=sanphamct&id_sanpham=<?=$id?>">
                        <span data-bs-toggle="tooltip" data-placement="bottom" title="Xem chi tiết"
                          class="icon-magnifier"></span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="product-desc py-0 px-0">
                  <h3 class="title">
                    <a href="index.php?act=sanphamct&id_sanpham=<?=$id?>"><?=$tensp?></a>
                  </h3>
                  <div class="star-rating">
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star de-selected"></span>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <?php
                      $gia = $giamin." - ".$giamax;
                      if($giamin == $giamax){
                        $gia = $giamin;
                      }
                      $gia.=" VNĐ";
                    ?> 
                    <span class="product-price"><?=$gia?></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- product-list End -->
          </div>
          <?php endforeach ;?>
        </div>
      </div>
      <!-- second tab-pane -->
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row grid-view-list theme1">
          <div class="col-12 mb-30">
            <?php 
            foreach($listsp as $sp): 
              extract($sp);
            ?>
            <div class="card product-card">
              <div class="card-body">
                <div class="media flex-column flex-md-row">
                  <div class="product-thumbnail position-relative" style="width: 330px;height: 330px;">
                    <a href="index.php?act=sanphamct&id_sanpham=<?=$id?>">
                      <img class="first-img" src="upload/<?=$hinh?>" alt="thumbnail" />
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
                        <a class="action" href="index.php?act=sanphamct&id_sanpham=<?=$id?>" >
                          <span data-bs-toggle="tooltip" data-placement="bottom" title="Xem chi tiết"
                            class="icon-magnifier"></span>
                        </a>
                      </li>
                    </ul>
                    <!-- product links end-->
                  </div>
                  <div class="media-body ps-md-4">
                    <div class="product-desc py-0 px-0">
                      <h3 class="title">
                        <a href="shop-grid-4-column.html"><?=$tensp?></a>
                      </h3>
                      <div class="star-rating mb-10">
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star de-selected"></span>
                      </div>
                      <?php
                        $gia = $giamin." - ".$giamax;
                        if($giamin == $giamax){
                          $gia = $giamin;
                        }
                        $gia.=" VNĐ";
                      ?> 
                      <span class="product-price"><?=$gia?></span>
                    </div>
                    <ul class="product-list-des">
                      <p> Mô tả:<?=$mota?></p>
                      <li>Xuất xứ: <?=$xuatxu?></li>
                      <li>Phong cách: <?=$phongcach?></li>
                    </ul>
                    <a href="index.php?act=sanphamct&id_sanpham=<?=$id?>">
                      <span class="btn btn-dark btn--xl" >
                        Xem Chi Tiết
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- product-list End -->
            <?php endforeach ;?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <nav class="pagination-section mt-30">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#"><i class="ion-chevron-left"></i></a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- product tab end -->

<?php
include "view/footer.php";
?>

