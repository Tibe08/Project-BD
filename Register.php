<?php

require 'Konek.php';

if($_POST){

$username = $_POST["username"];
$pw = $_POST["password"];
$email = $_POST["email"];

$query_sql = "INSERT INTO user (username, password, email)
              VALUES ('$username', '$pw', '$email')";

// if(isset($koneksi)){
//     echo "Koneksi berhasil";
// }
if(mysqli_query($koneksi, $query_sql)){
    header("Location: Login.php");
} else{
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
    
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
                <form class="register-form" method="POST">
                    <input type="text" placeholder="name" name="username" />
                    <input type="password" placeholder="password" name="password" />
                    <input type="text" placeholder="email address" name="email" />
                    <button>create</button>
                    <p class="message">Already registered? <a href="Login.php">Sign In</a></p>
                </form>
                
            </div>
        </div> 
<
    </body>

    </html>