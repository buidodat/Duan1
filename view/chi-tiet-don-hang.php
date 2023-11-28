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
                <th class="text-center" scope="col">Tên Sản Phẩm</th>
                <th class="text-center" scope="col">Hình ảnh</th>
                <th class="text-center" scope="col">Dung tích</th>
                <th class="text-center" scope="col">Số lượng</th>
                <th class="text-center" scope="col">Giá tiền</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              foreach($list_dhct as $key => $dhct):
                extract($dhct);
             ?>
              <tr>
                <td class="text-center" scope="row">
                  <?=$key+1??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$ten??""?>
                </td>
                <td class="text-center" scope="row">
                  <img src="upload/<?=$hinh??""?>" alt="" width="80px"> 
                </td>
                <td class="text-center" scope="row">
                  <?=$thetich??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$soluong??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$soluong*$gia." VNĐ"??""?>
                </td>
                
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="Place-order mt-25" style="text-align:right">
        <a class="btn btn--lg btn-primary my-2 my-sm-0" href="index.php?act=don-hang-cua-ban" >Trở Về</a>
    </div>
  </div>

</section>
<!-- product tab end -->

<?php
include "view/footer.php";
?>