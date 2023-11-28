<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
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
                                    <th>Người Nhận</th>
                                    <th>SĐT</th>
                                    <th>Địa Chỉ</th>
                                    <th>Ghi chú</th>
                                    <th>Phương thức thành toán</th>
                                    <th>Trạng Thái</th>
                                    <th>Tổng Tiền</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($list_dh as $dh): 
                                        extract($dh);
                                ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td><?=$ten_nguoinhan?></td>
                                    <td><?=$sdt_nguoinhan?></td>
                                    <td><?=$diachi_nguoinhan?></td>
                                    <td><?=$ghichu?></td>
                                    <td><?=$pttt?></td>
                                    <td><?=$trangthai_dh?></td>
                                    <td><?=$tongtien?> VNĐ</td>
                                    <td>
                                        <a href="<?=$danhsachbienthe?>">
                                            <button class="btn btn-add btn-sm trash" type="button" title="Xem">
                                                <i class="fas fa-eye"></i>
                                            </button>   
                                        </a>
                                        <a href="<?=$themmoibienthe?>">
                                            <button class="btn btn-eye btn-sm trash" type="button" title="Thêm"
                                                ><i class="fas fa-ban"></i> 
                                            </button>   
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>