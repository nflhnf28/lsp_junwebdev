<?php
require '../koneksi/koneksi.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
<!-- NAVBAR SECTION START -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PetShopQu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../homepage/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../product/index.php">Product</a>
                </li>
            </ul>

            <!-- Account Section Start -->
            <div class="nav-item dropdown">
            <form class="d-flex">
                <button class="btn nav-link dropdown-toggle" href="#" type="button" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle" style="font-size: 35px;"></i></button>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../login/logout.php">Logout</a></li>
                </ul>
            </li>
            </form>
            </div>  <!-- Account Section End-->

        </div>
        </div>
        </nav>
        <!-- NAVBAR SECTION END -->

        <!-- CONTENT -->
        <div class="container mt-4 ">
            <div class="row align-items-center">

            <?php
            $sql = "SELECT * FROM product WHERE id_product='$_GET[id_product]'";
            $resultset = mysqli_query($koneksi, $sql) or die("database error:". mysqli_error($koneksi));			
            while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
                <div class="col">
                <img src="../images/<?php echo $record['image']; ?>" class="img-thumbnail" alt="product_image" >
                </div>
                
                <div class="col mb-4">
                <h2 class="h2"><?php echo $record['product_name']; ?></h1><hr>
                <p class="text-muted">Rp. <?=$record['price']?></p>
                <dt class="col-sm-4">Product Details</dt>
                <dd class="col-sm-12"><?php echo $record['detail_product']; ?></dd>
                </div>

                <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Amount</h5>
                        <div class="col-6">
                        <div class="input-group input-group-sm mb-2">
                            <button class="input-group-text" type="button"><i class="bi bi-dash"></i></button>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" 
                            value="1" min="1" max="100">
                            <button class="input-group-text" type="button"><i class="bi bi-plus"></i></button>
                            <p class="text-muted ml-2">Stock left: <?=$record['quantity']?></p>
                        </div>
                        </div>

                        <div class="d-flex flex-row justify-content-between">
                        <p class="text-muted">Price</p>
                        <p class="text-end"><strong>Rp. <?=$record['price']?></strong></p>
                        </div>

                            <div class="d-grid gap-2 mx-auto">
                        <a href="cart.php?id_product=<?php echo $record['id_product']; ?>" class="btn btn-success">Buy</a>
                            </div>
                    </div>
                </div>
                </div>
            </div>

            <?php } ?>
        </div>


</body>
</html>