<?php 
    session_start();

    include 'functions/function.php';
    include 'includes/header.php'; 
    include 'includes/navbar.php'; 

?>


    <!-- Begin Page Content -->
    <div class="container-fluid">

    <?php 
        $home_page = getAll("home_page");
                
        if(mysqli_num_rows($home_page) > 0) {
            $data = mysqli_fetch_assoc($home_page);
            ?>    
            <!-- 1st section -->
            <div class="card shadow col-xl-12 col-md-12 mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample-1" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Home Page 1st Section</Section></h6> 
                </a>

                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample-1">
                    
                    <form action="code.php" method="POST" >
                        <div class="card-body">
                            <div class="row">
                                <div class="coloumn col-xl-3 col-md-6 mb-4">
                                    <p>Section 1 Header</p>
                                </div>
                                <div class="coloumn col-xl-6 col-md-6 mb-4">
                                    <input type="text" class="form-control" id="s1_header" name="s1_header" value="<?= $data['s1_header'] ?>" placeholder="Page Header">

                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="coloumn col-xl-3 col-md-6 mb-4">
                                    <p>Change Section image</p>
                                </div>
                                <div class="coloumn col-xl-6 col-md-6 mb-4">
                                    <P>change image</P>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="coloumn col-xl-3 col-md-6 mb-4">
                                    <p>change About Section Heading</p>
                                </div>
                                <div class="coloumn col-xl-6 col-md-6 mb-4">
                                <textarea class="form-control" id="s1_description" name="s1_description" placeholder=" Description" rows="3" value="<?= $data['s1_description'] ?>" ><?= $data['s1_description'] ?></textarea>

                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="coloumn col-xl-3 col-md-6 mb-4">
                                    <p>Button name</p>
                                </div>
                                <div class="coloumn col-xl-6 col-md-6 mb-4">
                                    <input type="text" class="form-control" id="s1_button_name" name="s1_button_name" value="<?= $data['s1_button_name'] ?>" placeholder="s1_button_name">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="coloumn col-xl-3 col-md-6 mb-4">
                                    <p>Button Link</p>
                                </div>
                                <div class="coloumn col-xl-6 col-md-6 mb-4">
                                    <input type="text" class="form-control" id="s1_button_link" name="s1_button_link" value="<?= $data['s1_button_link'] ?>" placeholder=" s1_button_link">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="coloumn col-xl-3 col-md-6 mb-3">
                                    <!-- <p>Edit Product Header Discription</p> -->
                                </div>
                                <div class="coloumn col-xl-6 col-md-6 mb-3">
                                    <button type="submit" class="btn btn-primary" name="section1_btn">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>

            <!-- 2nd Section -->
            <div class="card shadow col-xl-12 col-md-12 mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample-2" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Edit 2nd Section</h6> 
                </a>
                
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>2nd section header</p>
                            </div>
                            <div class="coloumn col-xl-6 col-md-6 mb-4">
                                <input type="text" class="form-control" id="s2_header" name="s2_header" value="<?= $data['s2_header'] ?>" placeholder="s2_header">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-0">
                            <div class="coloumn col-xl-3 col-md-6 ">
                                <p>2nd section Image</p>
                            </div>
                            <div class="coloumn">
                                <P>change image</P>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-0">
                            <div class="coloumn col-xl-3 col-md-6 ">
                                <p>2nd section description</p>
                            </div>
                            <div class="coloumn col-xl-6 col-md-6 ">
                                <textarea class="form-control" id="s1_button_link" name="s1_button_link" placeholder=" Description" rows="3" value="<?= $data['s2_description'] ?>" ><?= $data['s2_description'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- First card Start -->
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="coloumn col-xl-3 col-md-6">
                                <p>1st card image</p>
                            </div>
                            <div class="coloumn col-xl-3 col-md-6">
                                <P>Image</P>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>1st card Header</p>
                            </div>
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <input type="text" class="form-control" id="s2_header" name="s2_header" value="<?= $data['s2_header'] ?>" placeholder="s2_header">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>1st card description</p>
                            </div>
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <input type="text" class="form-control" id="s2_desc" name="s2_desc" value="<?= $data['s2_card1_icon_description	'] ?>" placeholder="s2_desc">
                            </div>
                        </div>
                    </div>
                    <!-- First card End -->

                    <hr>
                    <!-- Second card Start -->
                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>2nd card image</p>
                            </div>
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <P>Image</P>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>2nd card Header</p>
                            </div>
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <input type="text" class="form-control" id="s2_header" name="s2_header" value="<?= $data['s2_header'] ?>" placeholder="s2_header">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>2nd card description</p>
                            </div>
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <input type="text" class="form-control" id="s2_desc" name="s2_desc" value="<?= $data['s2_card2_icon_description	'] ?>" placeholder="s2_desc">
                            </div>
                        </div>
                    </div>
                    <!-- Second card End -->

                    <hr>

                    <!-- Third card Start -->
                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>3rd card image</p>
                            </div>
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <P>Image</P>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>3rd card Header</p>
                            </div>
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <input type="text" class="form-control" id="s2_header" name="s2_header" value="<?= $data['s2_header'] ?>" placeholder="s2_header">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>3rd card description</p>
                            </div>
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <input type="text" class="form-control" id="s2_desc" name="s2_desc" value="<?= $data['s2_card2_icon_description	'] ?>" placeholder="s2_desc">
                            </div>
                        </div>
                    </div>
                    <!-- Third card End -->


                </div>
            </div>


            <!-- 4th Section -->
            <div class="card shadow col-xl-12 col-md-12 mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample-3" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Product Section</h6> 
                </a>
                
                <!-- Card Content - Collapse -->
                <div class="collapse " id="collapseCardExample-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>edit product header</p>
                            </div>
                            <div class="coloumn">
                                <p>header</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>edit product discription</p>
                            </div>
                            <div class="coloumn">
                                <P>change image</P>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </div>
            <?php 
        }
    ?>

    </div>
    <!-- /.container-fluid -->

<?php 
    include 'includes/footer.php'; 
    include 'includes/scripts.php';   
?>