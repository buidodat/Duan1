
<?php
session_start();
include "../global.php";
if(isset($taikhoan)){
  if( $taikhoan['capbac']==1){
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/donhang.php";
    include "../model/thetich.php";
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
          case 'thoat':
            session_unset();
            header("location:index.php");
            break;
          ////////////-------QUản--------\\\\\\\\\\\\
          ////////////-----  Lý  --------\\\\\\\\\\\\
          ////////////-------Danh--------\\\\\\\\\\\\
          ////////////------ Mục --------\\\\\\\\\\\\

          case "danh-sach-danh-muc": 
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danh-sach-danh-muc.php";
            break;
          case "them-moi-danh-muc": 
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
              $ten= $_POST['ten']; 
              $slogan = $_POST['slogan'];
              insert_danhmuc($ten,$slogan);
              $thongbao= "thêm thành công";
            }
            include "danhmuc/them-moi-danh-muc.php";
            break;
          case "xoa-danh-muc": 
            if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
                $danhmuc_fk = fk_danhmuc ($_GET['id_danhmuc']);
                if(empty($danhmuc_fk)){
                  delete_danhmuc($_GET['id_danhmuc']);
                }else{
                  $thongbao = 'Danh mục còn sản phẩm , cần xóa sản phẩm trước khi xóa danh mục';
                }      
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danh-sach-danh-muc.php";
            break;
          case 'sua-danh-muc':
            if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
                $dm = loadone_danhmuc($_GET['id_danhmuc']);
            }            
            include "danhmuc/cap-nhat-danh-muc.php";
            break; 
          case 'cap-nhat-danh-muc':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $ten= $_POST['ten'];
                $id= $_POST['id'];
                $slogan= $_POST['slogan'];
                update_danhmuc($id,$ten,$slogan);
                $thongbao= "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danh-sach-danh-muc.php";
            break;  
          ///----The end quản lý danh mục

          ////////////-------QUản--------\\\\\\\\\\\\
          ////////////-----  Lý  --------\\\\\\\\\\\\
          ////////////------ Sản --------\\\\\\\\\\\\
          ////////////-------Phẩm--------\\\\\\\\\\\\
          case "danh-sach-san-pham":
              $listdanhmuc = loadall_danhmuc();
              $kyw = "";
              $iddm = 0;
              if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];   
                $iddm = $_POST['iddm'];
              }
              $listsanpham = loadall_sanpham($kyw,$iddm);
              include "sanpham/danh-sach-san-pham.php";
              break;
          case "them-moi-san-pham":
              if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $ten= $_POST['ten']; 
                $xuatxu= $_POST['xuatxu']; 
                $phongcach= $_POST['phongcach']; 
                $mota= $_POST['mota']; 
                $iddm= $_POST['iddm'];
                $file = $_FILES['hinh'];
                $hinh = '';
                if($file['size']>0){
                  //hinh là tên file ảnh
                  $hinh = $file['name'];
                  // foder_hinh là dẫn đến thư mục chứa hình ảnh;
                  $foder_hinh ="../upload/" . $hinh;
                  //tải ảnh vài foder upload
                  move_uploaded_file($file['tmp_name'], $foder_hinh);
                }
                insert_sanpham($ten, $hinh, $xuatxu , $phongcach , $mota, $iddm);
                $thongbao= "thêm thành công";
              }
              $listdanhmuc = loadall_danhmuc();
              include "sanpham/them-moi-san-pham.php";
              break;
          case 'sua-san-pham':
            if(isset($_GET['id_sanpham'])&&($_GET['id_sanpham']>0)){
              $sanpham = loadone_sanpham($_GET['id_sanpham']);
            }
            $listdanhmuc = loadall_danhmuc();            
            include "sanpham/cap-nhat-san-pham.php";
            break; 
          case 'cap-nhat-san-pham':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
              $id_sanpham = $_POST['id_sanpham'];
              $ten= $_POST['ten']; 
              $xuatxu= $_POST['xuatxu']; 
              $phongcach= $_POST['phongcach']; 
              $mota= $_POST['mota']; 
              $iddm= $_POST['iddm'];
              $file = $_FILES['hinh'];
              $hinh = '';
              if($file['size']>0){
                //hinh là tên file ảnh
                $hinh = $file['name'];
                // foder_hinh là dẫn đến thư mục chứa hình ảnh;
                $foder_hinh ="../upload/" . $hinh;
                //tải ảnh vài foder upload
                move_uploaded_file($file['tmp_name'], $foder_hinh);
              }
              update_sanpham($id_sanpham,$ten, $hinh, $xuatxu , $phongcach , $mota, $iddm);
              $thongbao= "cập nhật thành công";
            }
            $listsanpham = loadall_sanpham("",0);
            include "sanpham/danh-sach-san-pham.php";
            break;
          case "danh-sach-bien-the":
            $id_sanpham = $_GET['id_sanpham'];
            $sanpham =loadone_sanpham($id_sanpham);
            $listsanpham_thetich = loadall_sanpham_thetich($id_sanpham);
            include "sanpham/danh-sach-bien-the.php";
            break;
          case "them-moi-bien-the":
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
              extract($_POST);
              insert_sanpham_thetich($id_sanpham,$id_thetich,$gia,$soluong);
              header("location:index.php?act=danh-sach-bien-the&id_sanpham=$id_sanpham");
            }
            $id_sanpham = $_GET['id_sanpham'];
            $sanpham =loadone_sanpham($id_sanpham);
            $check_thetich =check_thetich($id_sanpham);
            $listthetich = loadall_thetich();
            include "sanpham/them-moi-bien-the.php";
            break;
          case "sua-bien-the":
            if(isset($_GET['id_bienthe'])&&$_GET['id_bienthe']>0){
              $sanpham_thetich = loadone_sanpham_thetich($_GET['id_bienthe']);
              extract($sanpham_thetich);
            }            
            include "sanpham/cap-nhat-bien-the.php";
            break;
          case 'cap-nhat-bien-the':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
              extract($_POST);
              update_sanpham_thetich($id,$id_sanpham,$id_thetich,$gia,$soluong);
              header("location:index.php?act=danh-sach-bien-the&id_sanpham=$id_sanpham");
            }
            break; 
          case "xoa-bien-the":
            if(isset($_GET['id_bienthe'])&&($_GET['id_bienthe']>0)){
              delete_sanpham_thetich($_GET['id_bienthe']);
            }
            $id_sanpham = $_GET['id_sanpham'];
            header("location:index.php?act=danh-sach-bien-the&id_sanpham=$id_sanpham");
            break;
          case "khoi-phuc-bien-the":
            if(isset($_GET['id_bienthe'])&&($_GET['id_bienthe']>0)){
              restore_sanpham_thetich($_GET['id_bienthe']);
            }
            $id_sanpham = $_GET['id_sanpham'];
            header("location:index.php?act=danh-sach-bien-the&id_sanpham=$id_sanpham");
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
            include "taikhoan/cap-nhat-tai-khoan.php";
          case 'xoa-tai-khoan':
            if(isset($_GET['id'])&&($_GET['id'])){
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/quan-ly-tai-khoan.php';
            break;
          case "danh-sach-don-hang":
            $list_dh=loadall_donhang_admin();
            include "donhang/danh-sach-don-hang.php";
            break;
          case "thay-doi-trang-thai":
            if(isset($_GET['id_donhang'])&&isset($_GET['id_trangthai'])){
              $id_donhang =$_GET['id_donhang'];
              $id_trangthai =$_GET['id_trangthai'];
              switch ($id_trangthai) {
                case '1':
                  $id_trangthai=2;
                  break;
                case '2':
                  $id_trangthai=3;
                  break;
              }
              update_donhang($id_trangthai,$id_donhang);
              header("location:index.php?act=danh-sach-don-hang");
            }
            break;
          case "huy-don-hang":
            if(isset($_GET['id_donhang'])&&$_GET['id_donhang']>0){
              $id_donhang=$_GET['id_donhang'];
              huy_donhang($id_donhang);
            }
            header("location:index.php?act=danh-sach-don-hang");
            break;
          case "chi-tiet-don-hang":
            if(isset($_GET['id_donhang'])){
              $id_donhang=$_GET['id_donhang'];
              $list_dhct=loadall_donhangchitiet($id_donhang);
            }
            include "donhang/chi-tiet-don-hang.php";
            break;
          case "bao-cao-thong-ke":
            break;
          }
    }else{
        include "home.php";
    }
    include "footer.php";
  }else{
    echo '<div style="margin:120px 30%">
          <img src="da4242" alt="">
          <h1 style="font-size:170px;padding 0;margin:0;">504</h1>
          <h2>Bạn không có quyền truy cập trang web này</h2>
          <a href="../index.php">Quay lại tại đây</a>
      </div>';
  }
}else{
  header("Location:../index.php?act=dangnhap");
}

?> 

