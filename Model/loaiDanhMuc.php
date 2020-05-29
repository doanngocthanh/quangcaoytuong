<?php
include_once("Model/database.php");
class loaiDanhMuc extends DB {
  function getAll(){
     
    return $this->select("SELECT * FROM `loai_danh_muc`");
  }
  function getId($id){
    return $this->select("SELECT * FROM `hoadon` WHERE maHoaDon='$id' and trangThai=0");
  }
  function insertLoaiDanhMuc($ten_loai,$hide_show,$menu_index){
    return $this->select("INSERT INTO `loai_danh_muc` (`ten_loai`, `hide_show`, `menu_index`) VALUES ('$ten_loai','$hide_show','$menu_index')"); 
  }
}

?>