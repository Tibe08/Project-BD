<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'project_web1';

$koneksi = mysqli_connect($host, $user, $pass, $db);

if(isset($koneksi)){
    echo "Koneksi berhasil";
}

?>