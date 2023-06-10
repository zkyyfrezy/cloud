<?php 

$conn = mysqli_connect("localhost", "root", "", "web");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) 
        { $rows[] = $row;
    }
    return $rows;
}

// ------------------------------------------------------------------------------

function tambah($data) {
    global $conn;
   
    $nama = htmlspecialchars($data['nama']) ;
    $email = htmlspecialchars($data['email']) 

    $query = "INSERT INTO test
                    value ( '', '$nama','$email')
                    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

 ?>