<?php 

require 'functions.php';

session_start();


if(isset($_POST["submit"])){
    if(tambahUser($_POST) > 0 ){
        echo "
        <script type='text/javascript'>
            alert('Data Berhasil Ditambahkan');
            window.location = 'user.php'
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Gagal Ditambahkan');
            window.location = 'user.php'
        </script>
    ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="simpan_user.php" method="POST">
                    <h2 class="text-center">Register Form</h2>
                    <hr>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label><br />
                        <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label for="email">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>

                    <input type="hidden" name="roles" value="Customer"> 
                    <p>Sudah Memiliki Akun ? <a href="../login/index.php">Login</a></p>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<!--  -->