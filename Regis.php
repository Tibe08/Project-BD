<?php

require 'Konek.php';

$username = $_POST["username"];
$pw = $_POST["password"];
$email = $_POST["email"];

$query_sql = "INSERT INTO user (username, password, email)
              VALUES ('$username', '$pw', '$email')";

if(isset($koneksi)){
    echo "Koneksi berhasil";
}


if(mysqli_query($koneksi, $query_sql)){
    header("Location: LogReg.html");
} else{
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}

?>