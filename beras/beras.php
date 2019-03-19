<?php
    include "koneksi.php";
    $sql="SELECT id_beras,nama_beras
        FROM beras";
    $tampil=mysqli_query($db,$sql);
    
    
?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Jenis dan Keterangan Beras</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Beras</th>
                    <th>Nama Beras</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            <?php
                
                while($r=mysqli_fetch_array($tampil)){
                    $ss=mysqli_query($db,"SELECT SUM(berat) FROM transaksi Where id_beras='$r[0]'");
                    while($t=mysqli_fetch_array($ss)){
                        
                        echo "<tr>
                        <td>$r[id_beras]</td>
                        <td>$r[nama_beras]</td>
                        <td>$t[0]  Kg</td>
                        <td align='center'>
                    
                
                        <a href='edit_b.php?id=$r[id_beras]'>
                                <button class='btn btn-info btn-xs'><i class='fa fa-edit'></i>Edit</button>
                            </a>
                            <a href='hapus_b.php?id=$r[id_beras]'>
                                <button class='btn btn-danger btn-xs' name='delete'><i class='fa fa-trash-o'></i>Hapus</button>    
                            </a>
                        </td>
                        </tr>";
                    }
                    
                }
            ?>
            </tbody>
        </table>
        <button class="btn btn-success btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Tambah Data</button>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambahkan Data</h4>
      </div>
      <div class="modal-body">
        <div class='panel'>
            <div class='panel-body'>
                <form action="t_beras.php" method="POST">  
                    <div class="form-group">
                        <input class="form-control input-lg" type="text" max=5 name="id_beras" placeholder="Kode Beras">
                    </div>

                    <div class="form-group">
                        <input class="form-control input-lg" type="text" name="nama_beras" placeholder="Nama Beras">
                    </div>

                    <div align="center">
                        <button class="btn btn-success btn-lg" type="submit" name="m_beras">Submit</button>
                        <button class="btn btn-danger btn-danger btn-lg" type="reset">Reset</button>
                    </div>  
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
