
<?php include "koneksi.php";
$tgl=date('Y-m-d H:i:s');

echo $tgl;
mysqli_query($db, "INSERT INTO coba VALUE ('$tgl')");
