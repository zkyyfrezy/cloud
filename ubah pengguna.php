<?php 
require 'functions.php';

// ambil data di url
$id = $_GET['id_user'];
// query data siswa berdasarkan id
$ssw = query("SELECT * FROM user WHERE id_user = $id")[0];





// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
	
// cek apakah data berhasil diubah atau tidak
	if ( ubah($_POST) > 0 ){
		echo "
		<script>
			alert('data berhasil diubah');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal diubah');
			document.location.href = 'index.php';
		</script>
		";
	}


}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tambah data</title>
</head>
<body>

	<h1>ubah data anda</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $ssw["id_user"]; ?>">
		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username" required value="<?php echo $ssw["username"]; ?>">
			</li>
			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password" required value="<?php echo $ssw["password"]; ?>">
			</li>
			<li>
				<label for="nama_lengkap">Nama lengkap : </label>
				<input type="text" name="nama_lengkap" id="nama_lengkap" required value="<?php echo $ssw["nama_lengkap"]; ?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required value="<?php echo $ssw["email"]; ?>">
			</li>
			<li>
				<label>level : </label>
				<input type="radio" name="admin" required value="<?php echo $ssw["level"]; ?>>Admin
				<input type="radio" name="user" required value="<?php echo $ssw["level"]; ?>>User
			</li>
			<li>
				<label>blokir : </label>
				<input type="radio" name="Y" required value="<?php echo $ssw["blokir"]; ?>>Ya
				<input type="radio" name="N"required value="<?php echo $ssw["blokir"]; ?>>Tidak
			</li>
			<li>
				<button type="submit" name="submit">ubah data!</button>
			</li>
			<br>
			<a href="manajemen pengguna.php">kembali</a>

		</ul>

	</form>

</body>
</html>