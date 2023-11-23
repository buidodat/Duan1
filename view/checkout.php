<!-- Thanh toán -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">Tiến Hành Đặt Hàng</h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tiến Hành Đặt Hàng</li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->

<!-- checkout area start -->
<div class="check-out-section pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="billing-info-wrap">
          <h3 class="title">Thông tin nhận hàng</h3>
          <form class="personal-information"> <!--  action="https://htmldemo.net/looki/looki/assets/php/contact.php"> -->
            <div class="row">
              <div class="col-lg-12">
                <div class="billing-info mb-20px">
                  <label>Tên Người nhận:</label>
                  <input type="text" />
                </div>
              </div>
              <div class="col-lg-8 col-md-8">
                <div class="billing-info mb-20px">
                  <label>Email:</label>
                  <input type="email"  />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="billing-info mb-20px">
                  <label>Số điện thoại:</label>
                  <input type="text" />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="billing-info mb-20px">
                  <label>Địa chỉ:</label>
                  <input type="text" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="billing-info mb-20px">
                  <label>Tỉnh / thành:</label>
                  <input type="text" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="billing-info mb-20px">
                  <label>Quận / huyện:</label>
                  <input type="text" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="billing-info mb-20px">
                  <label>Phường / xã:</label>
                  <input type="text" />
                </div>
              </div>
              <!-- <div class="col-lg-12">
              <label  class="lb">Phương thức vận chuyển:</label>
                <div class="nut_radio" >
                  <input type="radio" class="ip" name="ppvc" id=""> Giao hàng tận nơi
                  <div class="phivc">100d</div>
                </div>
              </div> -->
              <div class="col-lg-12 pttt">
              <label class="lb">Phương thức thanh toán:</label>
                <div class="nut_radio" >
                  <input type="radio" class="ip" name="pptt" id=""> Thanh toán khi giao hàng (COD) <br>
                  <input type="radio" class="ip" name="pptt" id=""> Ví điện tử ZaloPay
                </div>
              </div>
              <div class="additional-info-wrap">
                <h4 class="title">Thông tin thêm:</h4>
                <div class="additional-info">
                  <label class="mb-2">Ghi chú đặt hàng</label>
                  <textarea placeholder="Ghi chú về đơn hàng của bạn, ví dụ ghi chú bí mật khi giao hàng. "
                    name="message"></textarea>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <style>
        .phivc{
          float:right;
          margin-right:10px;
        }
        .nut_radio{
          border: solid 1px #e6e6e6;
          padding: 10px 0;
        }
        .nut_radio label{
          display:block;
          margin-bottom:5px;
        }
        .ip{
          vertical-align: middle;
          margin-left:13px;
        }
        .pttt{
          margin-top:25px;
        }
        .lb{
          margin-bottom:10px;
        }
        .magiamgia{
          weight:100%;
          display:flex;
        }
      </style>
      <div class="col-lg-5 mt-4 mt-lg-0">
        <div class="your-order-area">
          <h3 class="title">Đơn hàng của bạn</h3>
          <div class="your-order-wrap gray-bg-4">
            <div class="your-order-product-info">
              <div class="your-order-top">
                <ul>
                  <li>Products</li>
                  <li>Total</li>
                </ul>
              </div>
              <div class="your-order-middle">
                <ul>
                  <?php 
                    foreach($listsanpham as $sp):
                      extract($sp);
                  ?>
                  <li>
                    <span class="order-middle-left"><?=$ten." - ".$thetich?> </span>
                    
                    <span class="order-price"><?="x".$soluong;?></span>
                    <span class="order-price"><?=$gia*$soluong. " VNĐ"?></span>
                  </li>
                  <?php endforeach ?>
                </ul>
              </div>
              <div class="your-order-bottom">
                <ul>
                  <li class="your-order-shipping">Phí vận chuyển</li>
                  <li>Miễn phí vận chuyển</li>
                </ul>
              </div>
              <div class="your-order-total">
                <ul>
                  <li class="order-total">Thành tiền</li>
                  <li><?=$tonggia. " VNĐ"?></li>
                </ul>
              </div>
              <div class="magiamgia">
                <div class="nhap">
                  <input type="text" name="" id="" placeholder="Nhập mã giảm giá">
                </div> 
                <div class="apdung">
                  <input type="submit" value="Áp dụng">
                </div>          
              </div>
            </div>
          </div>
          <div class="Place-order mt-25">
            <a class="btn btn--xl btn-block btn-primary" href="#">Hoàn Tất Đặt Hàng</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- checkout area end -->

<?php
include "view/footer.php";
?>