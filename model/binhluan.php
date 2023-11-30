<?php
function loadall_binhluan($id_sanpham)
{
    $sql = "SELECT * FROM binhluan WHERE 1";
    if ($id_sanpham > 0) {
        $sql .= " AND id_sanpham = $id_sanpham";
        $sql .= " order by id desc";
        $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    }
}
function insert_binhluan($id_sanpham, $text)
{
    $taikhoanDetail = $_SESSION['taikhoan'];
    $id_taikhoan = $taikhoanDetail['id'];
    $date = date('Y-m-d');
    $sql = " INSERT INTO binhluan (id_sanpham,id_taikhoan,ngaybinhluan,noidung) VALUES ('$id_sanpham','$id_taikhoan','$date','$text')";
    $result = pdo_execute($sql);
    return $result;
    
}
