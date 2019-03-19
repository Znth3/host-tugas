<?php include "koneksi.php";
    $tampil=mysqli_query($db,"SELECT * FROM petugas");
?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Users</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Akses</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($r=mysqli_fetch_array($tampil)){
                    echo "<tr>
                    <td>$r[nip]</td>
                    <td>$r[nama]</td>
                    <td>$r[username]</td>
                    <td>$r[pass]</td>
                    <td>$r[akses]</td>
                    <td align='center'>
                        <a href='edit_ptgs.php?id=$r[nip]'>
                            <button class='btn btn-info btn-xs'><i class='fa fa-edit'></i>Edit</button>
                        </a>
                        <a href='hapus_ptgs.php?id=$r[nip]'>
                            <button class='btn btn-danger btn-xs' name='delete'><i class='fa fa-trash-o'></i>Hapus</button>    
                        </a>
                    </td></tr>";
				}
            ?>    
            </tbody>
        </table>
        <button class="btn btn-success btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Tambah Data</button>
    </div>
</div>

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
                <form action="t_user.php" method="POST">  
                    <div class="form-group">
                        <input class="form-control input-lg" type="text" name="nip" placeholder="NIP">
                    </div>

                    <div class="form-group">
                        <input class="form-control input-lg" type="text" name="nama" placeholder="Nama">
                    </div>

                    <div class="form-group">
                        <input class="form-control input-lg" type="text" name="name" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <input class="form-control input-lg" type="password" name="pass" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <input class="form-control input-lg" type="text" name="akses" placeholder="Akses">
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

