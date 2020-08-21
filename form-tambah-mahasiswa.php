<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Mahasiswa</title>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran Mahasiswa</h3>
	</header>
	
	<form action="proses-tambah-mahasiswa.php" method="POST">
		
		<fieldset>
		<p>
			<label for="nama">NPM: </label><br/>
			<input type="text" name="npm" placeholder="NPM" required/>
		</p>
		<p>
			<label for="nama">Nama: </label><br/>
			<input type="text" name="nama" placeholder="nama lengkap" required/>
		</p>
		<p>
			<label for="alamat">Alamat: </label><br/>
			<textarea name="alamat"></textarea>
		</p>
		
		<p>
			<label for="no_hp">Nomor HP: </label><br/>
			<input type="text" name="no_hp" placeholder="Nomor HP yang masik aktif" />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
