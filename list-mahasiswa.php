<?php include("koneksi.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>

<body>
	<header>
		<h3>Daftar Mahasiswa - Universitas Indraprasta PGRI</h3>
	</header>
	
	<nav>
		<a href="form-tambah-mahasiswa.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No HP</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM tbl_mahasiswa";
		$query = mysqli_query($db, $sql);
		$no=1;
		while($mahasiswa = mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td>".$no."</td>"; 
			echo "<td>".$mahasiswa['npm']."</td>";
			echo "<td>".$mahasiswa['nama']."</td>";
			echo "<td>".$mahasiswa['alamat']."</td>";
			echo "<td>".$mahasiswa['no_hp']."</td>"; 
			
			echo "<td>";
			echo "<a href='form-edit-mahasiswa.php?npm=".$mahasiswa['npm']."'>Edit</a> | ";
			echo "<a href='hapus-mahasiswa.php?npm=".$mahasiswa['npm']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
			$no++;
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
