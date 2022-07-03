<?php 
$koneksi = mysqli_connect("localhost","root","","petshopqu");


// fungsi query
function query ($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;

    }
    return $rows;
}

// fungsi register
function register($data) {
    global $koneksi;
    $full_name = htmlspecialchars($data["full_name"]);
    $address = htmlspecialchars($data["address"]);
    $email = htmlspecialchars($data["email"]);
    $username = htmlspecialchars(strtolower(stripslashes($data["username"])));
    $password = htmlspecialchars($data["password"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

//tambah user ke database (REGISTER)
mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$full_name', '$address', '$email', '$username', '$password', '$no_hp', 'user')"); }

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


// Function Input data
function input($data) {
    global $koneksi;
    // ambil data dari tiap elemen dalam form
    $image = htmlspecialchars($data["image"]);
    $product_name = htmlspecialchars($data["product_name"]);
    $detail_product = htmlspecialchars($data["detail_product"]);
    $quantity = htmlspecialchars($data["quantity"]);
    $price = htmlspecialchars($data["price"]);

    // query insert data
    $insert = "INSERT INTO product VALUES
                ('', '$image', '$product_name', '$detail_product', '$quantity', '$price')";
    mysqli_query($koneksi, $insert);

    return mysqli_affected_rows($koneksi);
}

function delete($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM product WHERE id_product = $id");

    return mysqli_affected_rows($koneksi);
}
?>