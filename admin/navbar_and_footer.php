<?php 
    session_start();
    include 'functions/function.php';
    include 'includes/header.php'; 
    include 'includes/navbar.php';


?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <?php 
            $navbar_and_footer = getAll("navbar_and_footer");
                    
            if(mysqli_num_rows($navbar_and_footer) > 0) {
                $data = mysqli_fetch_assoc($navbar_and_footer);
                ?>   
                <div> 
                    <!-- Nav Bar Starts Here -->
                    <div class="card shadow col-xl-12 col-md-12 mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample-1" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Navbar</Section></h6> 
                        </a>

                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample-1">
                            
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Current Logo</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <img src="../img/logo/<?= $data['nav_logo'] ?>" width="80px" height="80px" alt="KHT " >
                                            <input type="hidden" name="old_nav_logo" value="<?= $data['nav_logo'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="coloumn col-xl-3 col-md-6">
                                            <p>Change image</p>
                                        </div>
                                        <div class="coloumn">
                                                    
                                            <input type="file" class="form-control-file" id="new_nav_logo " name="new_nav_logo">
                                            <small id="imageHelp" class="form-text text-muted">image dimension: 500px * 600px</small>
                                                        
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Home Page</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="page1" name="page1" value="<?= $data['page1'] ?>" placeholder="page1">

                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>About Us</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="page2" name="page2" value="<?= $data['page2'] ?>" placeholder="page2">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Products</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="page3" name="page3" value="<?= $data['page3'] ?>" placeholder="page3">
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Service Us</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="page4" name="page4" value="<?= $data['page4'] ?>" placeholder="page4">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Contact</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="page5" name="page5" value="<?= $data['page5'] ?>" placeholder="page5">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-3">
                                            <!-- <p>Edit Product Header Discription</p> -->
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-3">
                                            <button type="submit" class="btn btn-primary" name="navbar_btn">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Bar Section Ends Here  -->

                    <!-- Footer Starts Here -->
                    <div class="card shadow col-xl-12 col-md-12 mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample-1" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Footer</Section></h6> 
                        </a>

                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample-1">
                            
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Current Logo</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <img src="../img/logo/<?= $data['footer_logo'] ?>" width="80px" height="80px" alt="KHT " >
                                            <input type="hidden" name="old_footer_logo" value="<?= $data['footer_logo'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="coloumn col-xl-3 col-md-6">
                                            <p>Change image</p>
                                        </div>
                                        <div class="coloumn">
                                                    
                                            <input type="file" class="form-control-file" id="new_footer_logo " name="new_footer_logo">
                                            <small id="imageHelp" class="form-text text-muted">image dimension: 500px * 600px</small>
                                                        
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Footer Description</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <textarea class="form-control" id="footer_description" name="footer_description" placeholder=" footer_description" rows="3" value="<?= $data['footer_description'] ?>" ><?= $data['footer_description'] ?></textarea>

                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-3">
                                            <!-- <p>Edit Product Header Discription</p> -->
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-3">
                                            <button type="submit" class="btn btn-primary" name="footer_btn">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Footer Section Ends Here  -->
                </div>
                <?php 
            }
        ?> 

    </div>
    <!-- /.container-fluid -->


<?php include 'includes/footer.php'; ?>