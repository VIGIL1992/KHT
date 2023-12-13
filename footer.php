
<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <!-- <h1 class="fw-bold text-primary mb-4">F<span class="text-secondary">oo</span>dy</h1> -->
                    <?php 
                        $navbar_and_footer = getAll("navbar_and_footer");
                                
                        if(mysqli_num_rows($navbar_and_footer) > 0) {
                            $data = mysqli_fetch_assoc($navbar_and_footer);
                            ?> 
                            <img src="img/logo/<?= $data['footer_logo'] ?>" alt="LOGO" srcset="">
                            <br><br>
                            <p><?=  $data['footer_description'] ?></p>
                            <?php 
                        }
                    ?>
                    <?php 
                        $contact_page = getAll("contact_page");
                                
                        if(mysqli_num_rows($contact_page) > 0) {
                            $data = mysqli_fetch_assoc($contact_page);
                            ?>
                    <div class="d-flex pt-2">
                    <?php if( $data['twitter'] !=""){ ?>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href="<?= $data['twitter'] ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                    <?php   } 
                        if( $data['facebook'] !=""){
                    ?>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="<?= $data['facebook'] ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                        <?php   } 
                        if( $data['youtube'] !=""){
                     ?>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="<?= $data['youtube'] ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                        <?php   } 
                        if( $data['linkedIn'] !=""){
                     ?>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href="<?= $data['linkedIn'] ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                        <?php   } 
                        if( $data['whatsApp'] !=""){
                     ?>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href="<?= $data['whatsApp'] ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                        <?php   } 
                        if( $data['TikTok'] !=""){
                     ?>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href="<?= $data['TikTok'] ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok"></i></i></i></a>
                        <?php   } 
                        if( $data['instagram'] !=""){
                     ?>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href="<?= $data['instagram'] ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                        <?php   } 
                     ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                     
                            <h4 class="text-light mb-4">Address</h4>
                            <p><i class="fa fa-map-marker-alt me-3"></i><?= $data['address'] ?> </p>
                            <p><i class="fa fa-phone-alt me-3"></i><?= $data['phone_num'] ?></p>
                            <p><i class="fa fa-envelope me-3"></i><?= $data['email'] ?></p>
                            <?php 
                        }
                    ?>
                </div>
                <div class="col-lg-4 col-md-6">
                    <?php 
                        $navbar_and_footer = getAll("navbar_and_footer");
                                
                        if(mysqli_num_rows($navbar_and_footer) > 0) {
                            $data = mysqli_fetch_assoc($navbar_and_footer);
                            ?> 
                            <h4 class="text-light mb-4">Quick Links</h4>
                            <a class="btn btn-link" href="index.php"><?= $data['page1'] ?></a>
                            <a class="btn btn-link" href="about.php"><?= $data['page2'] ?> </a>
                            <a class="btn btn-link" href="service.php"><?= $data['page3'] ?></a>
                            <a class="btn btn-link" href="service.php"><?= $data['page4'] ?></a>
                            <a class="btn btn-link" href="contact.php"><?= $data['page5'] ?></a>
                            <?php 
                        }
                    ?>
                    
                </div>
                
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                <p class="text-center">Copyright <i class="far fa-copyright"></i> <script>document.write(new Date().getFullYear());</script> All rights reserved | 
                    Made with <i class="far fa-heart"></i> by <a href="http://www.pixellmedia.com/" target="_blank" style="color: #b052be;">PixellMedia</a></p>
                </div>
            </div>
        </div>
    </div>
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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