<?php
include "koneksi.php";
include "login.php";

if(isset($_GET['id'])){
    $sql=mysqli_query($db,"delete from transaksi where id_transaksi='$_GET[id]'");
    var_dump($sql);
    if($sql){
        header('Location:menu.php?page=t_trans');
    }
    
}else{
    echo "gagal";
}
?>