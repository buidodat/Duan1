<?php 
    function loadall_giohang($id){
        $sql = "select hinh,ten,thetich,sanpham_thetich.soluong as conlai ,giohang.soluong ,gia from giohang 
        join sanpham_thetich on giohang.id_sanpham_thetich =  sanpham_thetich.id
        join sanpham on sanpham.id = sanpham_thetich.id_sanpham
        join thetich on thetich.id = sanpham_thetich.id_thetich
        where id_taikhoan=$id";
        $giohang = pdo_query($sql);
        return $giohang; 
    }
    function insert_giohang($id_sanpham_thetich,$soluong,$id_taikhoan){
        $sql= "INSERT INTO giohang(id_sanpham_thetich,soluong,id_taikhoan) 
            VALUES ($id_sanpham_thetich,$soluong,$id_taikhoan)";
        pdo_execute($sql); 
    }
    function check_giohang($id_sanpham_thetich,$id_taikhoan){
        $sql="SELECT * FROM `giohang` 
        WHERE id_sanpham_thetich =$id_sanpham_thetich and id_taikhoan =$id_taikhoan";
        $check= pdo_query_one($sql);
        return $check;
    }
    function update_giohang($soluong,$id){
        $sql= "UPDATE giohang SET soluong =$soluong where id =$id";
        pdo_execute($sql); 
    }
    function check_soluong_cart($id_taikhoan){
        $sql="SELECT sum(soluong) as tongsoluong FROM giohang 
        where id_taikhoan =$id_taikhoan";
        $check= pdo_query_one($sql);
        return $check['tongsoluong'];
    }
?>