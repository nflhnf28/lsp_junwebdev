<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- IMPORT JS & CSS Bootstrap 5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
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
                <a class="nav-link active" aria-current="page" href="/">Home</a>
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

      

      <div class="-fluid">
        <div class="row">
          <div class="col bg-light">  <!-- IMAGE SLIDER START -->
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/petshopqu/images/petstore.jfif" class="w-100 -fluid" data-bs-interval="7500" style="height: 1000px;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="/petshopqu/images/food.png" class="w-100 -fluid" data-bs-interval="7500" style="height: 1000px;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="/petshopqu/images/catsowl.jfif" class="w-100 -fluid" data-bs-interval="7500" style="height: 1000px;" alt="...">
                
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div> 
          </div> <!-- IMAGE SLIDER END -->

          <!-- Text Start -->
          <div class="col bg-light">
            <div class="text-bg-secondary p-3 position-absolute top-50 start-50 translate-middle">
              <h1>PetShopQu</h1>
              <p>Share love for your pets!</p> 
            </div>
          </div>
        </div> <!-- Text End -->


</body>
</html>
