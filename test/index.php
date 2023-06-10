<?php
$host = "localhost";  // Ganti dengan host database Anda
$username = "root";  // Ganti dengan username database Anda
$password = "";      // Ganti dengan password database Anda
$database = "web";  // Ganti dengan nama database Anda

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Mengambil data pengguna dari database
$query = "SELECT * FROM test";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website Sederhana</title>
    <!-- Tambahkan CSS Anda di sini -->
</head>
<body>
    <h1>Data Pengguna</h1>
    <a href="tambah.php">tambah</a>
    <table border="2" cellpadding="10 " cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
        <?php endwhile ?>
    </table>
</body>
</html>
