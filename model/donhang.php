<?php 
    function insert_donhang($id_taikhoan, $ten_nguoinhan, $email_nguoinhan, $sdt_nguoinhan, $diachi_nguoinhan, $pttt, $tongtien, $ghichu){
        $sql= "INSERT INTO donhang(id_taikhoan, ten_nguoinhan, email_nguoinhan, sdt_nguoinhan, diachi_nguoinhan, pttt, tongtien,  ghichu)
         VALUES ($id_taikhoan, '$ten_nguoinhan', '$email_nguoinhan', '$sdt_nguoinhan', '$diachi_nguoinhan', '$pttt', $tongtien,  '$ghichu')";
        $donhangnew = pdo_execute($sql); 
        return $donhangnew ;
    }
    function insert_donhangchitiet($id_donhang,$id_sanpham_thetich,$soluong,$gia){
        $sql= "INSERT INTO donhangchitiet(id_donhang,id_sanpham_thetich,soluong,gia)
        VALUES ($id_donhang,$id_sanpham_thetich,$soluong,$gia)";
        pdo_execute($sql); 
    }
    function loadall_donhang($id_taikhoan){
        $sql = "SELECT donhang.id,ten_nguoinhan,sdt_nguoinhan,diachi_nguoinhan,pttt,tongtien,ghichu,trangthai_dh FROM `donhang` 
        join trangthaidonhang on trangthaidonhang.id=donhang.id_trangthai
        WHERE id_taikhoan=$id_taikhoan";
        $donhang = pdo_query($sql);
        return $donhang;  
    }
    function loadall_donhangchitiet($id_donhang){
        $sql = "SELECT sanpham.ten ,hinh,thetich,donhangchitiet.soluong,donhangchitiet.gia FROM `donhangchitiet`
        join sanpham_thetich on sanpham_thetich.id=id_sanpham_thetich
        join sanpham on sanpham_thetich.id_sanpham = sanpham.id
        join thetich on thetich.id = sanpham_thetich.id_thetich
        WHERE id_donhang=$id_donhang";
        $donhang = pdo_query($sql);
        return $donhang;  
    }
    function loadall_donhang_admin(){
        $sql = "SELECT donhang.id,ten_nguoinhan,sdt_nguoinhan,diachi_nguoinhan,pttt,tongtien,ghichu,trangthai_dh,ngaydat FROM `donhang` 
        join trangthaidonhang on trangthaidonhang.id=donhang.id_trangthai";
        $donhang = pdo_query($sql);
        return $donhang;  
    }
?>