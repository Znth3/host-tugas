<?php
    include "koneksi.php";
    include "login.php";
    
    if(isset($_POST['m_beras'])){
        $sql=mysqli_query($db,"INSERT INTO beras (id_beras,nama_beras) VALUES ('$_POST[id_beras]','$_POST[nama_beras]')");
        
        if($sql){
            header ("location: menu.php?page=bBeras");
        }else{
            echo "data gagal masuk";
        }
        
    }else{
        echo "submitted nothing";
    }
    
?>