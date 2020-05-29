<?php
// index.php file
include_once("Controller/Controller.php");
try {
   //code...
   $controller = new Controller();


 if(isset($_POST['btAction'])){
     if(($_POST['btAction'])=='add'){
        $controller->add(); 
     }else if($_POST['btAction']=='login'){
        $controller->login(); 
     }else if($_POST['btAction']=='search'){
       $controller->donhang();
   }
   

}else{
      $controller->index();
}
} catch (\Throwable $th) {

}


?>