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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

      
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

            <!-- <button class="btn btn-light"><i class="bi bi-cart2" href> Cart</i></button> -->
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
      
      <div class="col-md-4 mt-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php
          $sql = "SELECT * FROM product ";
          $resultset = mysqli_query($koneksi, $sql) or die("database error:". mysqli_error($koneksi));			
          while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
          <div class="card" style="width: 18rem;">
            <img src="../images/<?php echo $record['image']; ?>" class="card-img-top" alt="product_image">
            <div class="card-body">
              <h5 class="card-title"><?php echo $record['product_name']; ?></h5>
              <p class="card-text"><?php echo $record['detail_product']; ?></p>
              <p class="card-text">Rp. <?php echo $record['price']; ?></p>
              <a href="info_product.php?id_product=<?php echo $record['id_product']; ?>" class="btn btn-secondary">See product</a>
            </div>
          </div>
      <?php } ?>
        </div>
      </div>
  



</body>
</html>