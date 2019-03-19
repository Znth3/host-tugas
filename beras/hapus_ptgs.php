<?php
include "koneksi.php";
include "login.php";

if(isset($_GET['id'])){
    $sql=mysqli_query($db,"delete from petugas where nip='$_GET[id]'");
    if(sql){
        header('Location:menu.php?page=mimin');
    }
    
}else{
    echo "gagal";
}
?>