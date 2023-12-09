<?php 
    session_start();
    include 'functions/function.php';
    include 'includes/header.php'; 
    include 'includes/navbar.php';


?>


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <?php 
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $products = getByID("products", $id);

                    if (mysqli_num_rows($products) > 0) {
                        $data = mysqli_fetch_assoc($products);
                        ?>
                        <!-- Edit Product -->
                        <div class="card shadow col-xl-12 col-md-12 mb-4">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample-1" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6> 
                            </a>

                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseCardExample-1">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            
                                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                                <p>Product Name</p>
                                            </div>
                                            <div class="coloumn">
                                            <input type="hidden" name="product_id" value=" <?= $data['id'] ?> ">
                                            <input type="text" class="form-control" id="product_name" name="product_name" value="<?= $data['name'] ?>" aria-describedby="productName" placeholder="Product Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                                <p>Current Image</p>
                                            </div>
                                            <div class="coloumn">
                                                <img src="../img/products/<?= $data['image'] ?>" width="250px" height="250px" alt="<?= $data['name']; ?>">
                                                <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                <!-- <label >Current Image</label> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                                <p>Change Product image</p>
                                            </div>
                                            <div class="coloumn">
                                                
                                                <input type="file" class="form-control-file" id="product_image " name="product_image">
                                                <small id="imageHelp" class="form-text text-muted">image dimension</small>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                                <!-- <p>change About Section Description</p> -->

                                            </div>
                                            <div class="coloumn">
                                                <!-- <P>change About Section Description</P> -->
                                                <button type="submit" class="btn btn-primary" name="edit_product_btn">Save changes</button>
                                                <a href="product.php" class="btn btn-danger">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                
                        <?php
                    }
                    else {
                        echo"Product not found";
                    }
                }
                else {
                    echo "Id missing from url";
                }
            ?>
            
            <hr>

      
        </div>
    </div>
    <!-- /.container-fluid -->

<?php 
    include 'includes/footer.php'; 
    include 'includes/scripts.php';   
?>