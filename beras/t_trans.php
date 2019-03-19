<?php
    include "koneksi.php";
    session_start();
    if(isset($_POST['coba'])){
        $jml=$_POST['j_karung'];
        $client=$_POST['nama_client'];
        $date=date('Y-m-d H:i:s');
        $id=$_POST['sberas'];
        $sql=mysqli_query($db,"INSERT INTO transaksi (tgl_transaksi,id_beras,nip,berat,jenis,client) VALUES ('$date','$id','$_SESSION[nip]','$jml','Masuk','$client')");
        if($sql){
            header("Location: menu.php?page=t_trans");
        }else{
            echo "gagal input";
        }
    }else{
        echo "Alun takan";
    }

?>