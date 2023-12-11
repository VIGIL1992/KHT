<?php
    session_start();

    include 'admin/functions/function.php';
?>



    <?php include 'header.php'; ?>
    <!-- Navbar Start -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-dark active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                <?php 
                    $product_page = getAll("product_page");
                    
                    if(mysqli_num_rows($product_page) > 0) {
                        $data = mysqli_fetch_assoc($product_page);
                    ?>
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3"><?= $data['header'] ?></h1>
                        <!-- <h1 class="display-5 mb-3">Our Products</h1> -->
                        <p><?= $data['description'] ?></p>
                    </div>
                    <?php 
                    }
                ?>
                </div>
                <!-- <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Vegetable</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fresh</a>
                        </li>
                    </ul>
                </div> -->
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php 
                        $products = getAll("products");

                        if(mysqli_num_rows($products) > 0) {
                            foreach($products as $item) {
                                ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="product-item">
                                        <div class="position-relative bg-light overflow-hidden">
                                            <!-- <img class="img-fluid w-100" src="img/product-1.jpg" alt=""> -->
                                            <img  class="" src="img/products/<?= $item['image'] ?>" alt="<?= $item['name']; ?> width="300px" height="300px""> 
                                        </div>
                                        <div class="text-center p-4">
                                            <a class="d-block h5 mb-2" href=""><?= $item['name']; ?></a>
                                            <!-- <span class="text-primary me-1">$19.00</span>
                                            <span class="text-body text-decoration-line-through">$29.00</span> -->
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else{
                            echo "<h6>No records Found</h6>";
                        }
                    ?>
                       
                        <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="product.php">More Products</a>
                        </div> -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Product End -->


    
   
    <?php include 'footer.php'; ?>    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>