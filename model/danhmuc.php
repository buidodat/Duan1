<?php
    function insert_danhmuc($ten){
        $sql= "INSERT INTO danhmuc(ten) VALUES ('$ten')";
        pdo_execute($sql); 
    }
    function delete_danhmuc($id){
        $sql = "delete from danhmuc where id=".$id;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql = "select * from danhmuc order by id asc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql = "select * from danhmuc where id=$id";
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$ten){
        $sql= "update danhmuc set ten='$ten' where id=$id";
        pdo_execute($sql);
    }

?>