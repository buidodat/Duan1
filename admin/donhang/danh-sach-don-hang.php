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
                                        $dhct="index.php?act=chi-tiet-don-hang&id_donhang=$id";
                                        $huy="";
                                ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td><?=$ten_nguoinhan?></td>
                                    <td><?=$sdt_nguoinhan?></td>
                                    <td><?=$diachi_nguoinhan?></td>
                                    <td><?=$ghichu?></td>
                                    <td><?=$pttt?></td>
                                    <?php 
                                        $class_ttdh ="";
                                        switch ($trangthai_dh) {
                                            case 'Chờ xử lý':
                                                $class_ttdh ="bg-info";
                                                break;
                                            case 'Đang vận chuyển':
                                                $class_ttdh ="bg-warning";
                                                break;
                                            case 'Đã hoàn thành':
                                                $class_ttdh = "bg-success";
                                                break;
                                            case 'Đã hủy':
                                                $class_ttdh = "bg-danger";
                                                break;
                                        }
                                    ?>
                                    <td><span class="badge <?=$class_ttdh?>"><?=$trangthai_dh?></span></td>
                                    <td><?=$tongtien?> VNĐ</td>
                                    <td>
                                        <a href="<?=$dhct?>">
                                            <button class="btn btn-add btn-sm trash" type="button" title="Xem chi tiết">
                                                <i class="fas fa-eye"></i>
                                            </button>   
                                        </a>
                                        <a href="<?=$huy?>">
                                            <button class="btn btn-eye btn-sm trash" type="button" title="Hủy Đơn Hàng"
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