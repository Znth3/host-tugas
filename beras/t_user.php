<?php
    include "koneksi.php";
    include "login.php";
    $nip=$_POST['nip'];
    $nama=$_POST['nama'];
    $usern=$_POST['name'];
    $pass=$_POST['pass'];
    $akses=$_POST['akses'];
    echo $nip,$nama,$usern,$pass,$akses;
    if(isset($_POST['m_beras'])){
        $query=mysqli_query($db,"INSERT INTO petugas(nip,nama,username,pass,akses) VALUES ('$nip','$nama','$usern','$pass','$akses')");
        var_dump($query);
        if($query){
            header ("location: http://localhost/beras/menu.php?page=mimin");
            
        }else{
            echo "data gagal masuk";
        }
        
    }else{
        echo "submitted nothing";
    }
    
?>