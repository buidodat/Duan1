
<?php
  include "../model/pdo.php";
  include "../model/danhmuc.php";
  include "../model/sanpham.php";
  include "../model/thetich.php";
  include "header.php";
  if(isset($_GET['act'])&&($_GET['act']!="")){
      $act=$_GET['act'];
      switch($act){
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
            insert_danhmuc($ten);
            $thongbao= "thêm thành công";
          }
          include "danhmuc/them-moi-danh-muc.php";
          break;
        case "xoa-danh-muc": 
          if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
            delete_danhmuc($_GET['id_danhmuc']);
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
              update_danhmuc($id,$ten);
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
            $listsanpham = loadall_sanpham();
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
          $listsanpham = loadall_sanpham();
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
          
        case "quan-ly-khach-hang":
          include "quan-ly-khac-hang.php";
          break;
        case "quan-ly-don-hang":
          break;
        case "bao-cao-thong-ke":
          break;
        }
  }else{
      include "home.php";
  }
  include "footer.php";
?> 

