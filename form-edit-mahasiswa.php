<?php 

include("koneksi.php");

if( !isset($_GET['npm']) ){
	// kalau tnpmak ada npm di query string
	header('Location: list-mahamahasiswa.php');
}

//ambil npm dari query string
$npm = $_GET['npm'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_mahasiswa WHERE npm=$npm";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tnpmak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tydac ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Mahamahasiswa</title>
</head>

<body>
	<header>
		<h3>Formulir Edit mahasiswa</h3>
	</header>
	
	<form action="proses-edit-mahasiswa.php" method="POST">
		
		<fieldset>
			
			<input type="text" readonly name="npm" value="<?php echo $mahasiswa['npm'] ?>" />
		
		<p>
			<label for="nama">Nama: </label><br/>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $mahasiswa['nama'] ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label><br/>
			<textarea name="alamat"><?php echo $mahasiswa['alamat'] ?></textarea>
		</p>
		 
		<p>
			<label for="no_hp">Nomor HP: </label><br/>
			<input type="text" name="no_hp" placeholder="Nomor HP yang masik aktif" value="<?php echo $mahasiswa['no_hp'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
