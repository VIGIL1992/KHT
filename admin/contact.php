<?php 
    session_start();

    include 'functions/function.php';
    include 'includes/header.php'; 
    include 'includes/navbar.php'; 

?>


    <!-- Begin Page Content -->
    <div class="container-fluid">

    <?php 
        $contact_page = getAll("contact_page");
                
        if(mysqli_num_rows($contact_page) > 0) {
            $data = mysqli_fetch_assoc($contact_page);
            ?>   
            <div> 
            <!-- 1st section -->
                <div class="card shadow col-xl-12 col-md-12 mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardExample-1" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">Contact Page</Section></h6> 
                    </a>

                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample-1">
                        
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="coloumn col-xl-3 col-md-6 mb-4">
                                        <p>Phone Number</p>
                                    </div>
                                    <div class="coloumn col-xl-6 col-md-6 mb-4">
                                        <input type="text" class="form-control" id="phone_num" name="phone_num" value="<?= $data['phone_num'] ?>" placeholder="phone_num">

                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="coloumn col-xl-3 col-md-6 mb-4">
                                        <p>Email</p>
                                    </div>
                                    <div class="coloumn col-xl-6 col-md-6 mb-4">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $data['email'] ?>" placeholder="  email">

                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="coloumn col-xl-3 col-md-6 mb-4">
                                        <p>Address</p>
                                    </div>
                                    <div class="coloumn col-xl-6 col-md-6 mb-4">
                                        <input type="text" class="form-control" id="address" name="address" value="<?= $data['address'] ?>" placeholder="address">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="coloumn col-xl-3 col-md-6 mb-4">
                                        <p>Location url</p>
                                    </div>
                                    <div class="coloumn col-xl-6 col-md-6 mb-4">
                                        <textarea class="form-control" id="location_url" name="location_url" placeholder="Description" rows="5" ><?= $data['location_url'] ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="coloumn col-xl-3 col-md-6 mb-3">
                                        <!-- <p>Edit Product Header Discription</p> -->
                                    </div>
                                    <div class="coloumn col-xl-6 col-md-6 mb-3">
                                        <button type="submit" class="btn btn-primary" name="contact_btn">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php 
        }
    ?> 
        
    <hr>

        

        

    </div>
    <!-- /.container-fluid -->

<?php 
    include 'includes/footer.php'; 
    include 'includes/scripts.php';   
?>