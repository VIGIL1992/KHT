<?php 
    session_start();
    include 'functions/function.php';
    include 'includes/header.php'; 
    include 'includes/navbar.php';


?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <?php 
            $slider = getAll("slider");
                    
            if(mysqli_num_rows($slider) > 0) {
                $data = mysqli_fetch_assoc($slider);
                ?>   
                <div> 
                    <!-- Nav Bar Starts Here -->
                    <div class="card shadow col-xl-12 col-md-12 mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample-1" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Slider</Section></h6> 
                        </a>

                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample-1">
                            
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Current slider 1</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <img src="../img/slider/<?= $data['Carousel_1_image'] ?>" width="80px" height="80px" alt="KHT " >
                                            <input type="hidden" name="old_Carousel_1_image" value="<?= $data['Carousel_1_image'] ?>" >
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="coloumn col-xl-3 col-md-6">
                                            <p>Change image</p>
                                        </div>
                                        <div class="coloumn">
                                                    
                                            <input type="file" class="form-control-file" id="new_Carousel_1_image " name="new_Carousel_1_image">
                                            <small id="imageHelp" class="form-text text-muted">image dimension: 500px * 600px</small>
                                                        
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Slider i Header</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="Carousel_1_header" name="Carousel_1_header" value="<?= $data['Carousel_1_header'] ?>" placeholder="Carousel_1_header">

                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Button 1 name</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="Carousel_1_button1_name" name="Carousel_1_button1_name" value="<?= $data['Carousel_1_button1_name'] ?>" placeholder="Carousel_1_button1_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Button 1 link</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="Carousel_1_button1_link" name="Carousel_1_button1_link" value="<?= $data['Carousel_1_button1_link'] ?>" placeholder="Carousel_1_button1_link">
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Button 2 name</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="Carousel_1_button2_name" name="Carousel_1_button2_name" value="<?= $data['Carousel_1_button2_name'] ?>" placeholder="Carousel_1_button2_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Button 2 link</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="Carousel_1_button2_link" name="Carousel_1_button2_link" value="<?= $data['Carousel_1_button2_link'] ?>" placeholder="Carousel_1_button2_link">
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Current slider 2</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <img src="../img/slider/<?= $data['Carousel_2_image'] ?>" width="80px" height="80px" alt="KHT " >
                                            <input type="hidden" name="old_Carousel_2_image" value="<?= $data['Carousel_2_image'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="coloumn col-xl-3 col-md-6">
                                            <p>Change image</p>
                                        </div>
                                        <div class="coloumn">
                                                    
                                            <input type="file" class="form-control-file" id="new_Carousel_2_image " name="new_Carousel_2_image">
                                            <small id="imageHelp" class="form-text text-muted">image dimension: 500px * 600px</small>
                                                        
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Slider 2 Header</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="Carousel_2_header" name="Carousel_2_header" value="<?= $data['Carousel_2_header'] ?>" placeholder="Carousel_2_header">

                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Button 1 name</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="Carousel_2_button1_name" name="Carousel_2_button1_name" value="<?= $data['Carousel_2_button1_name'] ?>" placeholder="Carousel_2_button1_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Button 1 link</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="Carousel_2_button1_link" name="Carousel_2_button1_link" value="<?= $data['Carousel_2_button1_link'] ?>" placeholder="Carousel_2_button1_link">
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row"2>
                                        
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Button 2 name</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="Carousel_2_button2_name" name="Carousel_2_button2_name" value="<?= $data['Carousel_2_button2_name'] ?>" placeholder="Carousel_2_button2_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Button 2 link</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <input type="text" class="form-control" id="Carousel_2_button2_link" name="Carousel_2_button2_link" value="<?= $data['Carousel_2_button2_link'] ?>" placeholder="Carousel_2_button2_link">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                                            <p>Background Image</p>
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-4">
                                            <img src="../img/slider/<?= $data['bg_image'] ?>" width="80px" height="80px" alt="KHT " >
                                            <input type="hidden" name="old_bg_image" value="<?= $data['bg_image'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="coloumn col-xl-3 col-md-6">
                                            <p>Change image</p>
                                        </div>
                                        <div class="coloumn">
                                                    
                                            <input type="file" class="form-control-file" id="new_bg_image " name="new_bg_image">
                                            <small id="imageHelp" class="form-text text-muted">image dimension: 500px * 600px</small>
                                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="coloumn col-xl-3 col-md-6 mb-3">
                                            <!-- <p>Edit Product Header Discription</p> -->
                                        </div>
                                        <div class="coloumn col-xl-6 col-md-6 mb-3">
                                            <button type="submit" class="btn btn-primary" name="slider_btn">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Bar Section Ends Here  -->

                   
                </div>
                <?php 
            }
        ?> 

    </div>
    <!-- /.container-fluid -->


<?php include 'includes/footer.php'; ?>