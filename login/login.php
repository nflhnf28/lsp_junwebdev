<?php
require '../koneksi/koneksi.php';

if( isset($_POST["login"]) ) {

$username = $_POST["username"];
$password = $_POST["password"];

mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

// check username di database 
    if( mysqli_num_rows($result) === 1) {

        // cek password di database
        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }
}
    $error = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="/petshopqu/css/login.css">
</head>

<body>


    <!-- Login Form Start -->
    <div class="login">
        <form class="needs-validation" action="cek_login.php" method="post">
            <div class="form-group was-validated">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" name="username" type="username" id="username" placeholder="Please enter your username" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" name="password" type="password" id="password" placeholder="Please enter your password" required>
                <div class="invalid-feedback">
                </div>
            </div>

            <input class="btn btn-success w-100" type="submit" value="Login" name="login">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-6 col-md-4">
                    <a href="register.php" class="register">Register</a>
                </div>
            </div>
        </div>
                </div>
        </form>
    </div> <!-- Login Form End-->

</body>

</html>