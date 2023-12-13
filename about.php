<?php 
    // session_start();

    // include 'admin/functions/function.php';
    include 'header.php';
    include 'navbar.php'; 
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <?php 
                $navbar_and_footer = getAll("navbar_and_footer");
                        
                if(mysqli_num_rows($navbar_and_footer) > 0) {
                    $data = mysqli_fetch_assoc($navbar_and_footer);
                    ?>
            <h1 class="display-3 mb-3 animated slideInDown"><?= $data['page2'] ?></h1>
                    
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-dark active" aria-current="page"><?= $data['page2'] ?></li>
                </ol>
                <?php 
                }
            ?>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <?php 
        $about_page = getAll("about_page");
                
        if(mysqli_num_rows($about_page) > 0) {
            $data = mysqli_fetch_assoc($about_page);
            ?>
            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                <img class="img-fluid w-100" src="img/about/<?= $data['s1_image'] ?>" alt="s1 Image">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="display-5 mb-4"><?= $data['s1_header'] ?></h1>
                            <p class="mb-4"> <?= $data['s1_description'] ?></p>
                            <!-- <p><i class="fa fa-check text-Tertiary me-3"></i>Premium Quality</p> -->
                            <!-- <p><i class="fa fa-check text-Tertiary me-3"></i>Food Safety</p> -->
                            <!-- <p><i class="fa fa-check text-Tertiary me-3"></i>Finest quality</p> -->
                            <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="<?= $data['s1_button_link'] ?>" ><?= $data['s1_button_name'] ?> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            
            <!-- Feature Start -->
            <div class="container-fluid bg-light bg-icon py-6">
                <div class="container">
                    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3"><?= $data['s2_header'] ?></h1>
                        <p><?= $data['s2_description'] ?></p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-white text-center h-100 p-4 p-xl-5">
                                <img class="img-fluid mb-4" src="img/about/<?= $data['s2_card1_icon'] ?>" alt="<?= $data['s2_card1_header'] ?>" >
                                <h4 class="mb-3"><?= $data['s2_card1_header'] ?></h4>
                                <p class="mb-4"><?= $data['s2_card1_description'] ?></p>
                                <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="bg-white text-center h-100 p-4 p-xl-5">
                                <img class="img-fluid mb-4" src="img/about/<?= $data['s2_card2_icon'] ?>" alt="<?= $data['s2_card2_header'] ?>">
                                <h4 class="mb-3"><?= $data['s2_card2_header'] ?></h4>
                                <p class="mb-4"><?= $data['s2_card2_description'] ?></p>
                                <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="bg-white text-center h-100 p-4 p-xl-5">
                                <img class="img-fluid mb-4" src="img/home/<?= $data['s2_card3_icon'] ?>" alt="<?= $data['s2_card3_header'] ?>">
                                <h4 class="mb-3"><?= $data['s2_card3_header'] ?></h4>
                                <p class="mb-4"><?= $data['s2_card3_description'] ?></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
            <?php 
        }
    ?>

    
    <?php include 'footer.php'; ?>