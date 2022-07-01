<?php

// menampilkan header //
include "templates/header.php";

// Melakukan redirect jika bukan admin
if (!isset($_SESSION['user'])||$checkRole!=1) {
    header("location:login.php")
}

?>
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container" >
        <hi class="display-4"> Halo Selamat datang