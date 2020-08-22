<?php

include("koneksi.php");

if( isset($_GET['npm']) ){
	
	// ambil npm dari query string
	$npm = $_GET['npm'];
	
	// buat query hapus
	$sql = "DELETE FROM tbl_mahasiswa WHERE npm=$npm";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: list-mahasiswa.php');
	} else {
		die("gagal menghapus..."); 
	}
	
} else {
	die("akses dilarang...");
}

?>
