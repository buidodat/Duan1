<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Quản lý tài khoản</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
            <div class="col-md-12">
                <div class="tile">
                    
                    <h1>Danh Sách Tài Khoản</h1>
                    <div class="item-taikhoan">
                        <table>
                            <tr>
                                <!-- <th></th> -->
                                <th>ID</th>
                                <th>TÊN ĐĂNG NHẬP</th>
                                <th>EMAIL</th>
                                <th>ĐIỆN THOẠI</th>
                                <th>MẬT KHẨU</th>
                                <th>ĐỊA CHỈ</th>
                                <th>CẤP BẬC</th>
                                <th>CHỨC NĂNG</th>
                                <br>
                            </tr>
                                <?php
                            foreach ($listtaikhoan as $tk) {
                                
                                extract($tk);
                                $suataikhoan = "index.php?act=sua-tai-khoan&id=" . $id;
                                $xoataikhoan = "index.php?act=xoa-tai-khoan&id=" . $id;
                                if($capbac==1){
                                    $vaitro="Admin";
                                }else{
                                    $vaitro="Người dùng
                                    ";
                                }
                                echo 
                                '<tr>
                                <td>'. $id.'</td>
                                <td>'.$hoten.' </td>
                                <td>'.$email.'</td>
                                <td>'. $sdt .'</td>
                                <td>'. $matkhau .'</td>
                                <td>'. $diachi .'</td>
                                <td> '.$vaitro .'</td>
                                
                                <td>
                        
                                    <a href="'.$suataikhoan.'"> <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                        <a href="'.$xoataikhoan.'"> <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button></button> 
                        
                                </td>
                                </tr>';
                                
                                
                            }
                            ?>
                        </table>
        
                    <div class="row">
                    
                    </div>
                </div>
 </div>                  
    </main>
    
