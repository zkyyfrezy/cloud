<?php 

require 'functions.php';

// --------------------------------------------

if ( isset($_POST["submit"]) ) {	
	if ( tambah($_POST) > 0 ){
		echo "
		<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'manajemen pengguna.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan');
			document.location.href = 'manajemen pengguna.php';
		</script>
		";
	}

// ----------------------------------------------

}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>tambah pengguna</title>
 	<link rel="stylesheet" type="text/css" href="tambah pengguna.css">
 </head>
 <body>

 	<nav class="navbar">
        <ul>
            <li>SMK LKS ACEH</li>
        </ul>
    </nav>

  <div class="sidebar">
    <ul>
      <li><a href="dashboard.html">beranda</a></li>
      <li><a href="manajemen pengguna.php">manajemen pengguna</a></li>
      <li><a href="berita.php">berita</a></li>
      <li><a href="kategori.php">kategori</a></li>
      <li><a href="profil.php">profil</a></li>
      <li><a href="program.php">program keahlian</a></li>
      <li><a href="fasilitas.php">fasilitas</a></li>
      <li><a href="download.php">download</a></li>
      <li><a href="album.php">album</a></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
  </div>

  <div class="tambah">
  	<div class="kotak">
	 		<h1>Tambahkan Data Anda</h1>
					<form action="" method="post">
						<table>
								
								<tr>
									<td>username</td>
									<td>:</td>
									<td><input type="text" name="username"></td>
								</tr>
								<tr>
									<td>password</td>
									<td>:</td>
									<td><input type="password" name="password"></td>
								</tr>
								<tr>
									<td>nama lengkap</td>
									<td>:</td>
									<td><input type="text" name="nama lengkap"></td>
								</tr>
								<tr>
									<td>email</td>
									<td>:</td>
									<td><input type="text" name="email"></td>
								</tr>
								<tr>
									<td>level</label></td>
									<td>:</td>
									<td>
										<input type="radio" value="Admin" name="level">Admin
										<input type="radio" value="User" name="level">User
									</td>
								</tr>

								<tr>
									<td>blokir</td>
									<td>:</td>
									<td>
										<input type="radio" value="Y" name="blokir">Ya
										<input type="radio" value="N" name="blokir">TidaK
									</td>
								</tr>							

						</table>
							<br>
						<button type="submit" name="submit">kirimkan !</button>

					</form>
		</div>
 </div>

 </body>
 </html>