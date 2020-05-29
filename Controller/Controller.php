<?php
include_once("Model/loaiDanhMuc.php");
class Controller {

    public function index()
    {
      $loaiDanhMuc=new loaiDanhMuc();
      $Sp=$loaiDanhMuc->getAll();
      foreach ($Sp as $l) {
      
        echo $l['ten_loai'].$l['menu_index']."</br>";
      
    }
      

    }
   
}