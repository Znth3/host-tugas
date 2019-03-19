<?php
include "koneksi.php";
include "login.php";

if(isset($_GET['id'])){
    $sql=mysqli_query($db,"delete from beras where id_beras='$_GET[id]'");
    var_dump($sql);
    if($sql){
        header('Location:menu.php?page=bBeras');
    }
    
}else{
    echo "gagal";
}
?>