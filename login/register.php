<?php
require '../koneksi/koneksi.php';

if( isset($_POST["register"]) ) {
    
    if (register($_POST) > 0) {
        echo "<script>
        window.location.href='login.php';
        alert('User successfully registered');
        </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/petshopqu/css/register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    </head>

<body>
<div class="container">
    <div class="title" >Register Form PetShopQu</div>

    <div class="content">
    <form action="" method="post">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Full name:</span>
            <input type="text" name="full_name" placeholder="Input full name" required>
        </div>

        <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Input username" required> <br>
        </div>

        <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Input password" required>
        </div>

        <div class="input-box">
            <label for="details">Email</label>
            <input type="text" name="email" placeholder="Input email" required> <br>
        </div>

        <div class="input-box">
            <label for="details">Address</label>
            <input type="text" name="address" placeholder="Input address" required>
        </div>

        <div class="input-box">
            <label for="details">Phone No</label>
            <input type="text" name="no_hp" placeholder="Input phone number">
        </div>
        </div>
        </div>

        <div class="row"> <!-- BUTTON -->
            <div class="col-sm-4">
                <button class="button" type="submit" name="register">Register</button>
                <br> <br> <br> <br> <br>
                <a href="login.php" class="button">I have an Account</a>
            </div>
        </div>
    </div>
    </form>


</body>
</html>
