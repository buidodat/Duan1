<?php
function insert_danhmuc($ten,$slogan)
{
    $sql = "INSERT INTO danhmuc(ten,slogan) VALUES ('$ten','$slogan')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where id=" . $id;
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "select * from danhmuc order by id asc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = "select * from danhmuc where id=$id";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $ten,$slogan)
{
    $sql = "update danhmuc set ten='$ten',slogan='$slogan' where id=$id";
    pdo_execute($sql);
}
function name_danhmuc($id_sanpham){
    $sql = "SELECT danhmuc.ten as tendm FROM  sanpham 
    join danhmuc on sanpham.iddm =danhmuc.id
    WHERE sanpham.id = $id_sanpham";
    $tdm = pdo_query_one($sql);
    return $tdm['tendm'];
}
function check_name_danhmuc($iddm){
    $sql = "SELECT ten FROM  danhmuc where id = $iddm";
    $tdm = pdo_query_one($sql);
    return $tdm['ten'];
}
