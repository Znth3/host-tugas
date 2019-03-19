<?php
    include "koneksi.php";
    session_start();
    if(isset($_POST['coba'])){
        $jml=-($_POST['j_karung']);
        $client=$_POST['nama_client'];
        $date=date('Y-m-d');
        $id=$_POST['sberas'];
        $nip=$_SESSION['nip'];
        $sql=mysqli_query($db,"INSERT INTO transaksi(tgl_transaksi,id_beras,nip,berat,jenis,client) VALUES ('$date','$id','$nip','$jml','Keluar','$client')");
        if($sql){
            header("Location: menu.php?page=t_trans");
        }else{
            echo "gagal input";
        }
    }else{
        echo "Alun takan";
    }

?>