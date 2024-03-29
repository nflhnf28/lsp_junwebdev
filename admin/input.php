<?php
// connect to db
require '../koneksi/koneksi.php';


if( isset($_POST["submit"]) ) {
    
    //
    if( input($_POST) > 0 ) {
        echo "<script>
        window.location.href='product.php';
        alert('Successfully insert a product');
        </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PetshopQu</title>

        <!-- IMPORT FONT & CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>


    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">PetshopQu</a>

            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <!-- Account Form-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>

            <!-- NAVBAR -->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../login/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

            <!-- Side Nav Content -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data PetshopQu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../admin/product.php">Product</a>
                                    <a class="nav-link" href="../admin/user.php">User</a>
                                </nav>
                            </div>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Account Footer Left
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> -->
                </nav>
            </div>

            <!-- MAIN / Dashboard Content -->
            <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                        <h1 class="mt-4">Input Product</h1>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                        </div>

                        <!-- CONTAINER CARD -->
                        <div class="row">
                            <div class="col-xl-6">
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>

                    <!-- TABLE -->
                    <div class="card mb-4">
                    <div class="container">
                    <form action="" method="post"> 
                        <div class="row">
                            <div class="col">
                            <label for="image">Image</label>
                            <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" id="image">
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                            <label for="product_name">Product Name</label>
                            <div class="row">
                            <input type="text" name="product_name" id="product_name">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <br>
                            <label for="detail_product">Detail</label>
                            <div class="row">
                            <input type="text" name="detail_product" id="detail_product">
                            </div>
                            <div class="col">
                                <br>
                            <label for="quantity">Quantity</label>
                            <div class="row">
                            <input type="text" name="quantity" id="quantity">
                            </div>
                            <div class="col">
                                <br>
                            <label for="price">Price</label>
                            <div class="row">
                            <input type="text" name="price" id="price">
                            </div>
                        </div></div></div></div>
                        </div>
                        </div>
                        <br>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Input Product </button>
                            </form>
                                </tbody>
                                </table>
                            </div>

                </main>


        <!-- IMPORT JS & Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

    </body>
</html>
