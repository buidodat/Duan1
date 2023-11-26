<?php
    session_start();
    include "global.php";
    include "model/giohang.php";
    include "model/taikhoan.php";
    include "model/donhang.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/pdo.php";
    if(isset($taikhoan['id'])){
        $id_user =$taikhoan['id'];
        $giohang =check_soluong_cart($id_user);
    }
    include "view/header.php";
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'cuahang':
                include "view/shop.php";
                break;
            case 'gioithieu':
                include "view/about-us.php";
                break;
            case 'sanphamct':
                $id_sanpham = $_GET['id_sanpham'];
                $sp_tt =loadall_sanpham_thetich_view($id_sanpham);
                $thetich_in_sanpham =load_thetich_in_sanpham($id_sanpham);
                include "view/single-product.php";
                break;
                
            case 'themvaogiohang':
                $id_sanpham = $_GET['id_sanpham'];
                if(isset($_POST['themgiohang'])){
                    extract($_POST);
                    $check = check_giohang($id_sanpham_thetich,$taikhoan['id']);
                    if(is_array($check)){
                        $soluong +=$check['soluong'];
                        update_giohang($soluong,$check['id']);  
                    }else{
                        insert_giohang($id_sanpham_thetich,$soluong,$taikhoan['id']);
                    }
                    $thongbao ="**Bạn đã thêm vào giỏ hàng thành công";
                    header("Location:index.php?act=sanphamct&id_sanpham=$id_sanpham");
                }
                break;
            case 'giohang':
                $listgiohang =loadall_giohang($taikhoan['id']);
                include "view/cart.php";
                break;
            //xóa 1 sản phẩm trong giỏ hàng
            case 'xoagiohang':
                if(isset($_GET['id_giohang'])&&$_GET['id_giohang']>0){
                    $id_giohang =$_GET['id_giohang'];
                    delete_giohang($id_giohang);
                    header("location:index.php?act=giohang");
                }
                break;
            case 'thanhtoan':
                //hiển thị
                $listsanpham =loadall_giohang($taikhoan['id']);
                $id_giohang="";
                if(isset($_GET['id_giohang'])&&$_GET['id_giohang']){
                    $listsanpham =mua1_giohang($taikhoan['id'],$_GET['id_giohang']);
                    $id_giohang=$_GET['id_giohang'];
                }
                $tong_gia_don_hang=tong_gia_don_hang($taikhoan['id'],$id_giohang);
                ///bấm nút đặt hàng
                if(isset($_POST['dathang'])){
                    extract($_POST);
                    $checkid =insert_donhang($id_taikhoan, $ten_nguoinhan, $email_nguoinhan,
                    $sdt_nguoinhan, $diachi_nguoinhan, $pttt,
                    $tongtien, $ghichu);
                    $id_donhang =$checkid;
                    foreach($listsanpham as $sp){
                        extract($sp);
                        insert_donhangchitiet($id_donhang,$id_sanpham_thetich,$soluong);
                        ///sau khi đặt hàng thành công thì xóa giỏ hàng
                        delete_giohang($id);
                    }
                    header("location:index.php?act=don-hang-cua-ban");
                }
                include "view/checkout.php";
                break;
            case 'don-hang-cua-ban':
                include "view/don-hang-cua-ban.php";
                break;
            case 'dangky':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $hoten = $_POST['hoten'];
                    $email = $_POST['email'];
                    $matkhau = $_POST['matkhau'];
                    $xacnhan_matkhau = $_POST['xacnhan_matkhau'];
                    $checkemail = checkemail_dangky($email);
                    $typeEmail = isEmail($email);
                    // var_dump($typeEmail);
                    $error = [];
                    // validate email: bat buoc nhap, email dung dinh dang, email ton tai
                    if (!$typeEmail) {
                        $error['email'] = 'Email không đúng định dạng';
                    } else {
                        if (!empty($checkemail)) {
                            $error['email'] = 'Email này đã tồn tại vui lòng nhập email khác';
                        }
                    }

                    // validate hoten
                    if (empty($hoten)) {
                        $error['hoten'] = 'Họ và tên không được để trống';
                    }

                    if (empty(trim($matkhau))) {
                        $error['matkhau'] = 'Mật khẩu không được để trống';
                    }

                    if ($matkhau !== $xacnhan_matkhau) {
                        $error['xacnhan_matkhau'] = 'Xác nhận mật khẩu không trùng khớp';
                    }

                    if (empty($error)) {
                        insert_taikhoan($hoten, $email, $matkhau);
                        echo "Đăng ký thành công bạn có thể đăng nhập";
                    }
                }
                include "view/account/dangky.php";
                break;
            case 'dangnhap':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $hoten = $_POST['hoten'];
                    $matkhau = $_POST['matkhau'];
                    $check_user = check_user($hoten, $matkhau);
                    if (is_array($check_user)) {
                        $_SESSION['taikhoan'] = $check_user;
                    } else {
                        $thongbao = "Tài khoản không tồn tại vui lòng đăng nhập lại hoặc đăng ký";
                    }

                    $error =[];
                    if(empty($hoten)){
                    $error['hoten'] = "Họ tên không được để trống";
                    } else if($hoten!== $check_user){
                    $error['hoten'] = "Tên người dùng không tồn tại vui lòng nhập lại ";
                    }
                    if(empty($matkhau)){
                    $error['matkhau'] = "Mật khẩu không được để trống";
                    } else if($matkhau!== $check_user){
                    $error['matkhau'] =  "Mật khẩu không trùng khớp";
                    }
                    if($_SESSION['taikhoan']['id']==1){
                        header("location:admin");
                    }
                }
                include "view/account/dangnhap.php";
                break;
            case 'edit_tk':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $hoten = $_POST['hoten'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $matkhau = $_POST['matkhau'];
                    $diachi = $_POST['diachi'];
                    $id = $_POST['id'];
                    edit_taikhoan($id, $hoten, $email, $sdt, $matkhau, $diachi);
                    $_SESSION['taikhoan'] = check_user($hoten, $matkhau);
                    header("Location: index.php?act=edit_tk");
                }
                include "view/account/edit_tk.php";
                break;

            case 'quenmk':
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                    $email = $_POST['email'];

                    $checkemail = checkemail($email);
                    if (is_array($checkemail)) {
                        $thongbao = "Mật khẩu của bạn là: " . $checkemail['matkhau'];
                    } else {
                        $thongbao = "Email này không tồn tại";
                    }
                }
                include "view/account/quenmk.php";
                break;
            case "quan-ly-tai-khoan":
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/quan-ly-tai-khoan.php";
                break;
                case "sua-tai-khoan":
                if(isset($_GET['id'])&& ($_GET['id'])>0){
                    $taikhoan = loadone_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/cap-nhat-tai-khoan.php";
                break;
            case "cap-nhat-tai-khoan":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $hoten = $_POST['hoten'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $matkhau = $_POST['matkhau'];
                    $diachi = $_POST['diachi'];
                    $capbac = $_POST['capbac'];
                    // extract($taikhoan);
                    update_taikhoan($id, $hoten, $email, $sdt, $matkhau, $diachi, $capbac);
                    $thongbao = 'Cập nhật tài khoản thành công';
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan.php/cap-nhat-tai-khoan.php";
            case 'xoa-tai-khoan':
                if(isset($_GET['id'])&&($_GET['id'])){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadall_taikhoan();
                include 'taikhoan.php/quan-ly-tai-khoan.php';
                break;
            case 'thoat':
                session_unset();
                include "view/account/dangnhap.php";
                break;
            break;
            case 'spyeuthich':
                include "view/wishlist.php";
                break;

            case 'thongtin':
                include "view/blog.php";
                break;
            
            case 'lienhe':
                include "view/contact.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }

?>