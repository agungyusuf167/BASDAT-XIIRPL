<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="proses_login.php" method="POST">
                    <h2 class="text-center">Login Form</h2>
                    <hr>
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>
                    
                   
                    <div class="form-group">
                    <label for="email">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>

                    <p>Belum Memiliki Akun ? <a href="../register/index.php">Register</a></p>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</body>
</html>