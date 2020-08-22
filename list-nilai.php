<?php include("koneksi.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>

<body>
  <table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>NPM</th>
			<th>Nama Mahasiswa</th>
			<th>Mata kuliah</th>
			<th> Tugas</th>
			<th> UTS</th>
			<th> UAS</th>
			
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT m.npm, m.nama, mt.nama_matkul, n.nilai_tugas, n.nilai_uts, n.nilai_uas 
			  FROM tbl_mahasiswa AS m 
			  INNER JOIN tbl_nilai AS n ON m.npm = n.npm
			  INNER JOIN tbl_matkul AS mt ON mt.kode_matkul = n.kode_matkul
			  WHERE m.npm = '201743501839'  GROUP BY m.npm";
		$query = mysqli_query($db, $sql);
		$no=1;
		while($nilai = mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td>".$no."</td>"; 
			echo "<td>".$nilai['npm']."</td>";
			echo "<td>".$nilai['nama']."</td>";
			echo "<td>".$nilai['nama_matkul']."</td>";
			echo "<td>".$nilai['nilai_tugas']."</td>"; 
			echo "<td>".$nilai['nilai_uts']."</td>"; 
			echo "<td>".$nilai['nilai_uas']."</td>"; 
			 
			echo "</tr>";
			$no++;
		}		
		?>
		
	</tbody>
	</table>
 
	
	</body>
</html>
