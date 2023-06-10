<?php 


// --------------------------------------------

if ( isset($_POST["submit"]) ) {    
    if ( tambah($_POST) > 0 ){
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }



 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>tambah pengguna</title>
 </head>
 <body>
 
    <h1>tambahkan data anda</h1>

 </body>
 </html>