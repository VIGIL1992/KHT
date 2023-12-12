
    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <?php 
                    $contact_page = getAll("contact_page");
                                
                    if(mysqli_num_rows($contact_page) > 0) {
                        $data = mysqli_fetch_assoc($contact_page);
                        ?>
                        <small><i class="fa fa-map-marker-alt me-2"></i><?=  $data['address'] ?></small>
                        <small class="ms-4"><i class="fa fa-envelope me-2"></i><?=  $data['email'] ?></small>
                    <?php 
                    }
                ?>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>


        
        <?php 
            $navbar_and_footer = getAll("navbar_and_footer");
                    
            if(mysqli_num_rows($navbar_and_footer) > 0) {
                $data = mysqli_fetch_assoc($navbar_and_footer);
                ?>   
                <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                        <img src="img/logo/<?= $data['nav_logo'] ?> " alt="LOGO" srcset="">
                    </a>
                    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto p-4 p-lg-0">
                            <a href="index.php" class="nav-item nav-link"><?=  $data['page1'] ?></a>
                            <a href="about.php" class="nav-item nav-link"><?= $data['page2'] ?></a>
                            <a href="product.php" class="nav-item nav-link"><?= $data['page3'] ?></a>
                            <a href="service.php" class="nav-item nav-link"><?= $data['page4'] ?></a>
                            
                            <a href="contact.php" class="nav-item nav-link"><?= $data['page5'] ?></a>
                        </div>
                        
                    </div>
                </nav>
                <?php 
            }
        ?>
    </div>
    <!-- Navbar End -->