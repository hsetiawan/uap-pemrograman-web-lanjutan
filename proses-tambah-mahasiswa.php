<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$npm = $_POST['npm'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$noHp = $_POST['no_hp']; 
	
	// buat query
	$sql = "INSERT INTO tbl_mahasiswa (npm, nama, alamat, no_hp ) VALUE ('$npm', '$nama', '$alamat', '$noHp')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: list-mahasiswa.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: list-mahasiswa.php?status=gagal=code='.mysqli_error());
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
