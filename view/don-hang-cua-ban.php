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
                <th class="text-center" scope="col">Người Nhận</th>
                <th class="text-center" scope="col">SĐT</th>
                <th class="text-center" scope="col">Địa chỉ</th>
                <th class="text-center" scope="col">Phương Thức Thanh Toán</th>
                <th class="text-center" scope="col">Tổng Tiền</th>
                <th class="text-center" scope="col">Ghi Chú</th>
                <th class="text-center" scope="col">Trạng Thái</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              foreach($listdonhang as $key => $donhang):
                extract($donhang);
             ?>
              <tr>
                <td class="text-center" scope="row">
                  <?=$key+1??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$ten_nguoinhan??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$sdt_nguoinhan??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$diachi_nguoinhan??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$pttt??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$tongtien??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$ghichu??""?>
                </td>
                <td class="text-center " scope="row">
                  <span class="badge bg-info h1"><?=$trangthai_dh??""?></span>
                </td>
                <td class="text-center">
                  <a href="index.php?act=chi-tiet-don-hang&id_donhang=<?=$id??""?>" class="btn btn-dark btn--lg">Chi Tiết</a>
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