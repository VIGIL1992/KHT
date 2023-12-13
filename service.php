<?php 
    // session_start();

    // include 'admin/functions/function.php';
    include 'header.php'; 
    include 'navbar.php'; 
?>
    

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <?php 
                $navbar_and_footer = getAll("navbar_and_footer");
                        
                if(mysqli_num_rows($navbar_and_footer) > 0) {
                    $data = mysqli_fetch_assoc($navbar_and_footer);
                    ?>
            <h1 class="display-3 mb-3 animated slideInDown"><?= $data['page4'] ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-dark active" aria-current="page"><?= $data['page4'] ?></li>
                </ol>
                <?php 
                }
            ?>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <?php 
        $service_page = getAll("service_page");
                
        if(mysqli_num_rows($service_page) > 0) {
            $data = mysqli_fetch_assoc($service_page);
            ?> 
            <!-- Feature Start -->
            <div class="container-fluid bg-light bg-icon py-6">
                <div class="container">
                    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="display-5 mb-3"><?= $data['s2_header'] ?></h1>
                        <p><?= $data['s2_description'] ?></p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-white text-center h-100 p-4 p-xl-5">
                                <img class="img-fluid mb-4" src="img/service/<?= $data['s2_card1_icon'] ?>" alt="<?= $data['s2_card1_header'] ?>">
                                <h4 class="mb-3"><?= $data['s2_card1_header'] ?></h4>
                                <p class="mb-4"><?= $data['s2_card1_description'] ?></p>
                                    <br>
                                    <br>
                                <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="bg-white text-center h-100 p-4 p-xl-5">
                                <img class="img-fluid mb-4" src="img/quality.png" alt="">
                                <h4 class="mb-3"><?= $data['s2_card2_header'] ?></h4>
                                <p class="mb-4"><?= $data['s2_card2_description'] ?></p>
                                <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="bg-white text-center h-100 p-4 p-xl-5">
                                <img class="img-fluid mb-4" src="img/service/<?= $data['s2_card3_icon'] ?>" alt="<?= $data['s2_card3_header'] ?>">
                                <h4 class="mb-3"><?= $data['s2_card3_header'] ?></h4>
                                <p class="mb-4"><?= $data['s2_card3_description'] ?></p>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
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