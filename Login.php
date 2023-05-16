<?php

require 'Konek.php';

if($_POST){

    $username = $_POST["username"];
    $pw = $_POST["pw"];
    
    $query_sql = "SELECT * FROM user
                  WHERE usename = '$username' AND password = '$pw'";
    
    // if(isset($koneksi)){
    //     echo "Koneksi berhasil";
    // }

    $result = mysqli_query($koneksi, $query_sql);

    if(mysqli_num_rows($result) == 0 ){
        header("Location: index.html");
    } else{
        echo "<h1>Login GAGAL. Silahka Coba Lagi Kembali</h1>";
        
    }
    
    }



?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Modern Flat Design Login Form Example</title>
    
    </head>

    <body>

        <div class="login-page">
            <div class="form">
                 <form class="login-form" method="POST">
                    <input type="text" placeholder="username" name="username" />
                    <input type="password" placeholder="password" name="pw" />
                    <button class="fw-bold">login</button>
                    <p class="message">Not registered? <a href="Register.php">Create an account</a></p>
                </form>
            </div>
        </div> 
<
    </body>

    </html>