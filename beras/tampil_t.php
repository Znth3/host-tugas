<?php 
	include "koneksi.php";
	$qr="SELECT transaksi.id_transaksi, 
			transaksi.tgl_transaksi, 
			beras.nama_beras,
			petugas.nama,
			transaksi.berat,
			transaksi.jenis,
			transaksi.client
		FROM transaksi 
		JOIN beras ON transaksi.id_beras=beras.id_beras
		JOIN petugas ON transaksi.nip=petugas.nip";
	$sql=mysqli_query($db,$qr);
?>
<!-- OVERVIEW -->
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Transaksi</h3>
		</div>

		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nama Beras</th>
						<th>Tanggal Transaksi</th>
						<th>Nama Client</th>
						<th>Jenis Transaksi</th>
						<th>Berat Transaksi</th>
						<?php
							if($_SESSION['akses']='admin'){
								echo "<th>Aksi</th>";
							}
						?>
					</tr>
				</thead>
				<tbody>
					<?php
						while($r=mysqli_fetch_array($sql)){
							echo "<tr>
							<td>$r[2]</td>
							<td>$r[1]</td>
							<td>$r[6]</td>
							<td>$r[5]</td>
							<td>$r[4] Kg</td>

							";
							if($_SESSION['akses']='admin'){
							echo"
							<td align='center'>
						
					
							<a href='edit_b.php?id=$r[id_transaksi]'>
									<button class='btn btn-info btn-xs'><i class='fa fa-edit'></i>Edit</button>
								</a>
								<a href='hapus_trans.php?id=$r[id_transaksi]'>
									<button class='btn btn-danger btn-xs' name='delete'><i class='fa fa-trash-o'></i>Hapus</button>    
								</a>
							</td>
							";
							}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>