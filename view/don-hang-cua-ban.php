<!-- Giỏ hàng -->

<!-- breadcrumb-section start -->
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="whish-list-section theme1 pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="title mb-30 pb-25 text-capitalize">Đơn hàng của bạn</h3>
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Tên người nhận</th>
                <th class="text-center" scope="col">Số Điện Thoại</th>
                <th class="text-center" scope="col">Phương Thức Thanh Toán</th>
                <th class="text-center" scope="col">Tổng Tiền</th>
                <th class="text-center" scope="col">Địa chỉ</th>
                <th class="text-center" scope="col">Trạng Thái</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              foreach($listdonhang as $donhang):
                extract($donhang);
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
                  <a href="index.php?act=thanhtoan&id_giohang=<?=$id?>" class="btn btn-dark btn--lg">Xem Chi Tiết</a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- product tab end -->

<?php
include "view/footer.php";
?>