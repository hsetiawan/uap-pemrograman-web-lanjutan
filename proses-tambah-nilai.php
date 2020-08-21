<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$npm = $_POST['npm'];
	$nilaiTugas = $_POST['nilaiTugas'];
	$nilaiUTS = $_POST['nilaiUTS'];
	$nilaiUAS = $_POST['nilaiUAS']; 
	$mataKuliah = $_POST['mataKuliah']; 

	// buat query
	$sql = "INSERT INTO tbl_nilai (npm, kode_matkul, nilai_tugas, nilai_uts, nilai_uas ) VALUE ('$npm', '$mataKuliah', '$nilaiTugas', '$nilaiUTS', '$nilaiUAS')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		echo "Berhasil disimpan";
		echo "<br/>NPM : ".$npm;
		echo "<br/>Nilai Tugas : ".$nilaiTugas;
		echo "<br/>Nilai UTS".$nilaiUTS;
		echo "<br/>Nilai UAS".$nilaiUAS;
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: list-mahasiswa.php?status=gagal=code='.mysqli_error());
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
