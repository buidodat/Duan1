<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Chi tiết đơn hàng</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="index.php?act=them-moi-san-pham" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                            </div>
                        </div>
                        <!-- //form tìm kiếm -->
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Dung tích</th>
                                    <th>Số lượng</th>
                                    <th>Giá tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($list_dhct as $dhct): 
                                        extract($dhct);
                                ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td><?=$ten_nguoinhan?></td>
                                    <td><?=$sdt_nguoinhan?></td>
                                    <td><?=$diachi_nguoinhan?></td>
                                    <td><?=$ghichu?></td>
                                    <td><?=$pttt?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>