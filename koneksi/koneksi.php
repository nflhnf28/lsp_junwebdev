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
mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$full_name', '$username', '$password', '$email', '$address', '$no_hp', 'user')"); 

return mysqli_affected_rows($koneksi); }




// Function Input data
function input($data) {
    global $koneksi;
    // ambil data dari tiap elemen dalam form
    $image = $data["image"];
    $product_name = htmlspecialchars($data["product_name"]);
    $detail_product = htmlspecialchars($data["detail_product"]);
    $quantity = htmlspecialchars($data["quantity"]);
    $price = htmlspecialchars($data["price"]);

    // query insert data
    $insert = "INSERT INTO product VALUES
                ('', '$image', '$product_name', '$detail_product', '$quantity', '$price')";
    mysqli_query($koneksi, $insert);

    return mysqli_affected_rows($koneksi);
    header("location:input.php?msg=update");
}

function delete($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM product WHERE id_product = $id");

    return mysqli_affected_rows($koneksi);
}

function edit($data) {
    global $koneksi;
    // ambil data dari tiap elemen dalam form
    $id_product = $data["id_product"];
    $image = $data["image"];
    $product_name = htmlspecialchars($data["product_name"]);
    $detail_product = htmlspecialchars($data["detail_product"]);
    $quantity = htmlspecialchars($data["quantity"]);
    $price = htmlspecialchars($data["price"]);

    // query insert data
    $query = " UPDATE product SET 
                image = '$image',
                product_name = '$product_name',
                detail_product = '$detail_product',
                quantity = '$quantity',
                price = '$price'
                WHERE id_product = $id_product
                    ";

    mysqli_query($koneksi, $query);
}

?>