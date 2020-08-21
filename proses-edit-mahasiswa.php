<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$npm = $_POST['npm'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$noHp = $_POST['no_hp'];
	
	// buat query update
	$sql = "UPDATE tbl_mahasiswa SET nama='$nama', alamat='$alamat', no_hp='$noHp'  WHERE npm=$npm";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: list-mahasiswa.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
