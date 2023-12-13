<?php
    // session_start();

    // include 'functions/function.php'; 
    include 'includes/header.php'; 
    include 'includes/navbar.php'; 

?>


    <!-- Begin Page Content -->
    <div class="container-fluid">

    <?php 
        $service_page = getAll("service_page");
                
        if(mysqli_num_rows($service_page) > 0) {
            $data = mysqli_fetch_assoc($service_page);
            ?>
             <!-- 2nd Section -->
             <div class="card shadow col-xl-12 col-md-12 mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample-2" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Service Section</h6> 
                </a>
                
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample-2">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
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
                                    <p>2nd section description</p>
                                </div>
                                <div class="coloumn col-xl-6 col-md-6 ">
                                    <textarea class="form-control" id="s2_description" name="s2_description" placeholder=" Description" rows="3" value="<?= $data['s2_description'] ?>" ><?= $data['s2_description'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- First card Start -->
                        <div>
                            <div class="card-body">
                                <div class="row mb-0">
                                    <div class="coloumn col-xl-3 col-md-6">
                                        <p>Current image</p>
                                    </div>
                                    <div class="coloumn col-xl-6 col-md-6 ">
                                        <img src="../img/service/<?= $data['s2_card1_icon'] ?>" width="80px" height="80px" alt="<?= $data['s2_card1_icon']; ?>" >
                                        <input type="hidden" name="card1_old_image" value="<?= $data['s2_card1_icon'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row mb-0">
                                    <div class="coloumn col-xl-3 col-md-6">
                                        <p>Change image</p>
                                    </div>
                                    <div class="coloumn">
                                                
                                        <input type="file" class="form-control-file" id="card1_newimage " name="card1_newimage">
                                        <small id="imageHelp" class="form-text text-muted">image dimension: 500px * 600px</small>
                                                    
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="coloumn col-xl-3 col-md-6 mb-4">
                                        <p>1st card Header</p>
                                    </div>
                                    <div class="coloumn col-xl-6 col-md-6 mb-4">
                                        <input type="text" class="form-control" id="s2_card1_header" name="s2_card1_header" value="<?= $data['s2_card1_header'] ?>" placeholder="s2_card1_header">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="coloumn col-xl-3 col-md-6 mb-4">
                                        <p>1st card description</p>
                                    </div>
                                    <div class="coloumn col-xl-6 col-md-6 mb-4">
                                        <!-- <input type="text" class="form-control" id="s2_card1_description" name="s2_card1_description" value="<?= $data['s2_card1_description'] ?>" placeholder="s2_card1_description"> -->
                                        <textarea class="form-control" id="s2_card1_description" name="s2_card1_description" placeholder=" Description" rows="3" value="<?= $data['s2_card1_description'] ?>" >
                                            <?= $data['s2_card1_description'] ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- First card End -->

                        <hr>
                        <!-- Second card Start -->
                        <div>
                            <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="coloumn col-xl-3 col-md-6">
                                            <p>Current image</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 ">
                                            <img src="../img/service/<?= $data['s2_card2_icon'] ?>" width="80px" height="80px" alt="<?= $data['s2_card2_icon']; ?>" >
                                            <input type="hidden" name="card2_old_image" value="<?= $data['s2_card2_icon'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="coloumn col-xl-3 col-md-6">
                                            <p>Change image</p>
                                        </div>
                                        <div class="coloumn">
                                                    
                                            <input type="file" class="form-control-file" id="card2_newimage " name="card2_newimage">
                                            <small id="imageHelp" class="form-text text-muted">image dimension: 500px * 600px</small>
                                                        
                                        </div>
                                    </div>
                                </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="coloumn col-xl-3 col-md-6 mb-4">
                                        <p>2nd card Header</p>
                                    </div>
                                    <div class="coloumn col-xl-6 col-md-6 mb-4">
                                        <input type="text" class="form-control" id="s2_card2_header" name="s2_card2_header" value="<?= $data['s2_card2_header'] ?>" placeholder="s2_card2_header">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="coloumn col-xl-3 col-md-6 mb-4">
                                        <p>2nd card description</p>
                                    </div>
                                    <div class="coloumn col-xl-6 col-md-6 mb-4">
                                        <!-- <input type="text" class="form-control" id="s2_card1_description" name="s2_card1_description" value="<?= $data['s2_card1_description'] ?>"  placeholder="s2_card1_descriptio"> -->
                                        <textarea class="form-control" id="s2_card2_description" name="s2_card2_description" placeholder=" Description" rows="3" ><?= $data['s2_card2_description'] ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Second card End -->

                        <hr>

                        <!-- Third card Start -->
                        <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="coloumn col-xl-3 col-md-6">
                                            <p>Current image</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 ">
                                            <img src="../img/service/<?= $data['s2_card3_icon'] ?>" width="80px" height="80px" alt="<?= $data['s2_card3_icon']; ?>" >
                                            <input type="hidden" name="card3_old_image" value="<?= $data['s2_card3_icon'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="coloumn col-xl-3 col-md-6">
                                            <p>Change image</p>
                                        </div>
                                        <div class="coloumn">
                                                    
                                            <input type="file" class="form-control-file" id="card3_newimage " name="card3_newimage">
                                            <small id="imageHelp" class="form-text text-muted">image dimension: 500px * 600px</small>
                                                        
                                        </div>
                                    </div>
                                </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="coloumn col-xl-3 col-md-6 mb-4">
                                    <p>3rd card Header</p>
                                </div>
                                <div class="coloumn col-xl-6 col-md-6 mb-4">
                                    <input type="text" class="form-control" id="s2_card3_header" name="s2_card3_header" value="<?= $data['s2_card3_header'] ?>" placeholder="s2_card3_header">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="coloumn col-xl-3 col-md-6 mb-4">
                                    <p>3rd card description</p>
                                </div>
                                <div class="coloumn col-xl-6 col-md-6 mb-4">
                                    <!-- <input type="text" class="form-control" id="s2_card3_description" name="s2_card3_description" value="<?= $data['s2_card3_description'] ?>" placeholder="s2_card3_header"> -->
                                    <textarea class="form-control" id="s2_card3_description" name="s2_card3_description" placeholder=" Description" rows="3" value="<?= $data['s2_card3_description'] ?>" ><?= $data['s2_card3_description'] ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Third card End -->
                        <div class="card-body">
                            <div class="row">
                                <div class="coloumn col-xl-3 col-md-6 mb-3">
                                    <!-- <p>Edit Product Header Discription</p> -->
                                </div>
                                <div class="coloumn col-xl-6 col-md-6 mb-3">
                                    <button type="submit" class="btn btn-primary" name="service_btn">Save changes</button>
                                </div>
                            </div>
                        </div>

                    </form>
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