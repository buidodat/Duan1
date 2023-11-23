<?php
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/giohang.php";
include "model/pdo.php";
include "global.php";
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
            if($_SERVER['REQUEST_METHOD'] == 'POST' &&isset($_POST['themgiohang'])){
                extract($_POST);
                $check = check_giohang($id_sanpham_thetich,1);
                if(is_array($check)){
                    $soluong +=$check['soluong'];
                    update_giohang($soluong,$check['id']);
                }else{
                    insert_giohang($id_sanpham_thetich,$soluong,1);
                }
                $thongbao ="**Bạn đã thêm vào giỏ hàng thành công";
            }
            include "view/single-product.php";
            break;

        case 'giohang':
            include "view/cart.php";
            break;
        
        case 'thanhtoan':
            include "view/checkout.php";
            break;
    
        case 'taikhoanuser':
            include "view/account/myaccount.php";
            break;

        case 'dangnhap':
            include "view/account/login.php";
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