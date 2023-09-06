<?php

include "config.php";

date_default_timezone_set("Asia/Bangkok");


if(isset($_POST['submit'])) {
    
     $name = $_POST['name'];
    $img = $_FILES['img'];

    $allow = array("jpeg","png","jpg","jfif","gif"); //ອັບໂຫລດຮູບພາບຕາມນາມສະກຸນສະເພາະໃນນນີ້ ຕົວແປ $allow
    
    $img = explode(".",$_FILES['img']['name']);

    $imgextention = $img[1]; 

    $date = date("H-i-s-A-Y-m-d"); // ຕັ້ງເປັນຊື່

    $imgnew = $name."-".$date.".".$imgextention;

    $path ="upload/".$imgnew;
    
   if(in_array($imgextention,$allow)){

    if($_FILES["img"]["error"] == 0 && $_FILES["img"]["size"] > 0){ 

     if(move_uploaded_file($_FILES["img"]['tmp_name'],$path)){
            $sql_insert = $conn->prepare("INSERT INTO tbl_upload (img,name) VALUES(:img,:name)");
            $sql_insert->execute([

                "img"=>$imgnew,
                "name"=>$name
                
            ]);
            if($sql_insert){

             echo "<script>alert('ອັບໂຫລດສຳເລັດ')</script>";
            }else{

            echo "<script>alert('ອັບໂຫລດລົ້ມເຫຼວ')</script>";


            }
    }else{
             echo "<script>alert('ລົ້ມເຫຼວ')</script>";


    }
   }else{
             echo "<script>alert('ລົ້ມເຫຼວອັບໂຫລດສະເພາະຮູບພາບ')</script>";


   }
}else{
         echo "<script>alert('ອັບໂຫລດຮູບພາບ ນາມສະກຸນຮູບສະເພາະ jpeg jpg png jfif gif')</script>";

}
   

}


?>