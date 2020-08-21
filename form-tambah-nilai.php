<?php 

include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulir Penilaian Mahasiswa</title>
</head>

<body>
	<header>
		<h3>Formulir Penilaian Mahasiswa</h3>
	</header>
	
	<form action="proses-tambah-nilai.php" method="POST">
		
		<fieldset>
		<p>
			<label for="nama">NPM: </label>
			<input type="text" name="npm" placeholder="NPM" required/>
		</p>
		<p>
			<label for="nilaiTugas">Nilai Tugas: </label>
			<input type="text" name="nilaiTugas" placeholder="Nilai Tugas" required/>
		</p>
		<p>
			<label for="nilaiUTS">Nilai UTS: </label>
			<input type="text" name="nilaiUTS" placeholder="Nilai UTS" required/>
		</p>
		<p>
			<label for="nilaiUAS">Nilai UAS: </label>
			<input type="text" name="nilaiUAS" placeholder="Nilai UAS" required/>
		</p>
		
		<p>
			<label for="mataKuliah">Mata Kuliah :</label>
 			<select name="mataKuliah">
			 <?php
			 $sql = "SELECT * FROM tbl_matkul";
			 $query = mysqli_query($db, $sql);
		 	 while($matkul = mysqli_fetch_array($query)){ 
				 echo "<option value=".$matkul['kode_matkul'].">".$matkul['nama_matkul']."</optional>"; 
				} 
			?>
			</select>

		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
