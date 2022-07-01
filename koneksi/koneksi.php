<?php 
$koneksi = mysqli_connect("localhost","root","","petshopqu");

// fungsi register
function register($data) {
    global $koneksi;
    $full_name = $data["full_name"];
    $address = $data["address"];
    $email = $data["email"];
    $username = strtolower(stripslashes($data["username"]));
    $password = $data["password"];
    $no_hp = $data["no_hp"];

//tambah user ke database (REGISTER)
mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$full_name', '$address', '$email', '$username', '$password', '$no_hp', 'user')"); }

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>