<?php
    include "koneksi.php";
?>

<div class='panel'>
    <div class='panel-heading'>
        <h2 class='panel-title text-center'>Transaksi Beras Keluar Ke Gudang</h2>
    </div>
    <div class='panel-body'>
        <form action="trans_kel.php" method="POST">  
            <div class="form-group">
                <select class="form-control input-lg" name="sberas">
                    <option disabled selected>Nama Beras</option>
                    <?php
                        $lihat=mysqli_query($db,"SELECT id_beras,nama_beras FROM beras");
                        while ($r=mysqli_fetch_array($lihat)){
                            echo "<option value='$r[id_beras]'>$r[nama_beras]</option>";
                        }
                        
                    ?>
                </select>
            </div>

            <div class="form-group">
                <input class="form-control input-lg" type="number" name="j_karung" placeholder="Berat(dalam Kg)">
            </div>

            <div class="form-group">
                <input class="form-control input-lg" type="text" name="nama_client" placeholder="Client">
            </div>
            
            <button class="btn btn-success btn-lg" type="submit" name='coba'>Submit</button>
            
            <button class="btn btn-danger btn-danger btn-lg" type="reset">Reset</button>
        </form>
      
    </div>
</div>