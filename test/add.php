<?php



require 'functions.php';





?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tambah pengguna</title>
</head>
<body>

    <h1>Tambah Pengguna</h1>

    <form action="index.php" method="post">
        <ul>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
        </ul>
        <ul>
            <li>
                <label for="email">Email:</label>
               <input type="email" name="email" id="email" required>
            </li>
        </ul>
        <input type="submit" name="submit" >simpan
    </form>

</body>
</html>