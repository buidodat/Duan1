<?php
include "view/header.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/pdo.php";
include "global.php";
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