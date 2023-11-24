<!-- Giỏ hàng -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">Giỏ Hàng</h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="whish-list-section theme1 pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="title mb-30 pb-25 text-capitalize">Các sản phẩm trong giỏ hàng</h3>
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th class="text-center" scope="col">Hình ảnh</th>
                <th class="text-center" scope="col">Tên sản phẩm</th>
                <th class="text-center" scope="col">Thể tích</th>
                <th class="text-center" scope="col">Tổng kho</th>
                <th class="text-center" scope="col">Số lượng</th>
                <th class="text-center" scope="col">Giá tiền</th>
                <th class="text-center" scope="col">Chức năng</th>
                <th class="text-center" scope="col">Thanh toán</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              foreach($listgiohang as $giohang):
                extract($giohang);
             ?>
              <tr>
                <th class="text-center" scope="row">
                  <img src="upload/<?=$hinh?>" alt="img" />
                </th>
                <td class="text-center">
                  <span class="whish-title"><?=$ten?></span>
                </td>
                <td class="text-center">
                  <span class="whish-title"><?=$thetich?></span>
                </td>
                <td class="text-center">
                  <span class="badge badge-danger position-static"><?=$conlai?></span>
                </td>
                <td class="text-center">
                  <div class="product-count style">
                    <div class="count d-flex justify-content-center">
                      <input type="number" min="1" max="<?=$conlai?>" step="1" value="<?=$soluong?>" readonly />
                      <div class="button-group">
                        <button class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </button>
                        <button class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <span class="whish-list-price"> <?=$gia?> VNĐ</span>
                </td>

                <td class="text-center">
                  <a href="index.php?act=xoagiohang&id_giohang=<?=$id?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này chứ ?')">
                    <span class="trash"><i class="fas fa-trash-alt"></i> </span>
                  </a>
                </td>
                <td class="text-center">
                  <a href="index.php?act=thanhtoan&id_giohang=<?=$id?>" class="btn btn-dark btn--lg">Mua Ngay</a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="Place-order mt-25" style="text-align:right">
            <a class="btn btn--lg btn-primary me-3" href="#">Cập Nhật Giỏ Hàng</a>
            <a class="btn btn--lg btn-primary my-2 my-sm-0" href="index.php?act=thanhtoan" >Mua Tất Cả</a>
          </div>
  </div>

</section>
<!-- product tab end -->

<?php
include "view/footer.php";
?>