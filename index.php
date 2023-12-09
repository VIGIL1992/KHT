<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KHT General Trading</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <?php include 'navbar.php'; ?>



    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-01.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Welcome To KHT</h1>
                                    <a href="product.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5" >Products</a>
                                    <a href="service.php" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Tasty & Healthy  <br>Food Products</h1>
                                    <a href="product.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                    <a href="service.php" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/about-1.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">We Focused On Quality</h1>
                    <p class="mb-4"> The quality of  is <b>KHT General Trading</b> continuously improving, searching, setting and achieving new targets to meet customer satisfaction. </p>
                    <p><i class="fa fa-check text-Tertiary me-3"></i>Top Quality Products.</p>
                    <p><i class="fa fa-check text-Tertiary me-3"></i>Ability to handle diverse products and market segments.</p>
                    <p><i class="fa fa-check text-Tertiary me-3"></i>acquire products/services which are Cost effective, safe and reliable.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Features</h1>
                <p>We make sure to supply the best products and services with great value to our customers.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3">Mission</h4>
                        <p class="mb-4">To provide the best and pure quality products to our customers and be a pioneer in the food processing industry in terms of Quality, Technology, Innovation and servicing.</p>
                        <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                        <h4 class="mb-3">Vision</h4>
                        <p class="mb-4">To be all inclusive Food Supplier – association that put quality, organization, and motivation as need to satisfy the necessities of our customers, partners, and the society.</p>
                        <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                        <h4 class="mb-3">Values</h4>
                        <p class="mb-4">KHT General Trading looks forward to developing strong partnership with customers who demand the highest quality obtainable and insist on continuous improvement.</p>
                        <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Products</h1>
                        <p>KHT General Trading handles only the highest quality products. With commitment and experience in the industry, our mission is to provide premium healthy products for our customer worldwide.</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Powder & Masala</a>
                                    <!-- <span class="text-primary me-1">$19.00</span> -->
                                    <!-- <span class="text-body text-decoration-line-through">$29.00</span> -->
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Dhal</a>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Rice</a>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Oil</a>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Salt</a>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-6.png" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Jaggery</a>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-7.webp" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Sugar</a>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                                    <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Dry Fruits</a>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="product.php">More Products</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Product End -->


    
    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->


    

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