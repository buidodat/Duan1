<?php 
    function insert_donhang($id_taikhoan, $ten_nguoinhan, $email_nguoinhan, $sdt_nguoinhan, $diachi_nguoinhan, $pttt, $tongtien, $ghichu){
        $sql= "INSERT INTO donhang(id_taikhoan, ten_nguoinhan, email_nguoinhan, sdt_nguoinhan, diachi_nguoinhan, pttt, tongtien,  ghichu)
         VALUES ($id_taikhoan, '$ten_nguoinhan', '$email_nguoinhan', '$sdt_nguoinhan', '$diachi_nguoinhan', '$pttt', $tongtien,  '$ghichu')";
        $donhangnew = pdo_execute($sql); 
        return $donhangnew ;
    }
    function insert_donhangchitiet($id_donhang,$id_sanpham_thetich,$soluong){
        $sql= "INSERT INTO donhangchitiet(id_donhang,id_sanpham_thetich,soluong)
        VALUES ($id_donhang,$id_sanpham_thetich,$soluong)";
        pdo_execute($sql); 
    }
    function loadall_donhang(){
        
    }
?>