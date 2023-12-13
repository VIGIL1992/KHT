<?php
    // session_start();

    // include 'admin/functions/function.php';
    include 'header.php';
    include 'navbar.php';
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php 
                    $slider = getAll("slider");
                            
                    if(mysqli_num_rows($slider) > 0) {
                        $data = mysqli_fetch_assoc($slider);
                        ?>

                        <div class="carousel-item active">
                            <img class="w-100" src="img/slider/<?= $data['Carousel_1_image'] ?>" alt="Image" style="height: 100vh">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-start">
                                        <div class="col-lg-7">
                                            <h1 class="display-2 mb-5 animated slideInDown"><?= $data['Carousel_1_header'] ?></h1>
                                            <a href="<?= $data['Carousel_1_button1_link'] ?>" class="btn btn-primary rounded-pill py-sm-3 px-sm-5" ><?= $data['Carousel_1_button1_name'] ?></a>
                                            <a href="<?= $data['Carousel_1_button2_link'] ?>" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3"><?= $data['Carousel_1_button2_name'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" src="img/slider/<?= $data['Carousel_2_image'] ?>" alt="Image" style="height: 100vh">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-start">
                                        <div class="col-lg-7">
                                            <h1 class="display-2 mb-5 animated slideInDown"><?= $data['Carousel_2_header'] ?></h1>
                                            <a href="<?= $data['Carousel_2_button1_link'] ?>" class="btn btn-primary rounded-pill py-sm-3 px-sm-5"><?= $data['Carousel_2_button1_name'] ?></a>
                                            <a href="<?= $data['Carousel_2_button2_link'] ?>" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3"><?= $data['Carousel_2_button2_name'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
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

    <?php 
        $home_page = getAll("home_page");
                
        if(mysqli_num_rows($home_page) > 0) {
            $data = mysqli_fetch_assoc($home_page);
            ?>   
            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                <img class="img-fluid w-100" src="img/home/<?= $data['s1_image'] ?>" alt="s1 Image">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="display-5 mb-4"><?= $data['s1_header'] ?></h1>
                            <p class="mb-4"> <?= $data['s1_description'] ?> </p>
                            <!-- <p><i class="fa fa-check text-Tertiary me-3"></i>Top Quality Products.</p>
                            <p><i class="fa fa-check text-Tertiary me-3"></i>Ability to handle diverse products and market segments.</p>
                            <p><i class="fa fa-check text-Tertiary me-3"></i>acquire products/services which are Cost effective, safe and reliable.</p> -->
                            <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="<?= $data['s1_button_link'] ?> "><?= $data['s1_button_name'] ?> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Feature Start -->
            <div class="container-fluid bg-light bg-icon my-5 py-6">
                <div class="container">
                    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3"><?= $data['s2_header'] ?></h1>
                        <p><?= $data['s2_description'] ?></p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-white text-center h-100 p-4 p-xl-5">
                                <img class="img-fluid mb-4" src="img/home/<?= $data['s2_card1_icon'] ?>" alt="<?= $data['s2_card1_header'] ?>" >
                                <h4 class="mb-3"><?= $data['s2_card1_header'] ?></h4>
                                <p class="mb-4"><?= $data['s2_card1_description'] ?></p>
                                <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="bg-white text-center h-100 p-4 p-xl-5">
                                <img class="img-fluid mb-4" src="img/home/<?= $data['s2_card2_icon'] ?>" alt="<?= $data['s2_card2_header'] ?>">
                                <h4 class="mb-3"><?= $data['s2_card2_header'] ?></h4>
                                <p class="mb-4"><?= $data['s2_card2_description'] ?> </p>
                                
                                <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="bg-white text-center h-100 p-4 p-xl-5">
                                <img class="img-fluid mb-4" src="img/home/<?= $data['s2_card3_icon'] ?>" alt="<?= $data['s2_card3_header'] ?>">
                                <h4 class="mb-3"><?= $data['s2_card3_header'] ?></h4>
                                <p class="mb-4"><?= $data['s2_card3_description'] ?></p>
                                <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
            <?php 
        }
    ?>


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
                            <p> <?= $data['description'] ?></p>
                        </div>
                        <?php 
                    }
                ?>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php 
                        $products = getAll("products");

                        if(mysqli_num_rows($products) > 0) {
                            $counter = 0; // Initialize a counter variable

                            foreach($products as $item) {
                                if ($counter < 8) {
                                    ?>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item">
                                            <div class="position-relative bg-light overflow-hidden">
                                                <!-- <img class="img-fluid w-100" src="img/products/<?= $item['image'] ?>" alt="<?= $item['name']; ?>"> -->
                                                <img class="" src="img/products/<?= $item['image'] ?>"  width="300px" height="300px" alt="<?= $item['name']; ?>">
                                            </div>
                                            <div class="text-center p-4">
                                                <!-- <a class="d-block h5 mb-2" href=""><?= $item['name']; ?></a> -->
                                                <p class="d-block h5 mb-2"><?= $item['name']; ?></p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <?php
                                     $counter++; // Increment the counter
                                } 
                                else {
                                    break; // Exit the loop once the limit is reached
                                }
                            }
                        }
                        else{
                            echo "<h6>No records Found</h6>";
                        }
                    ?>
                        
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


    

