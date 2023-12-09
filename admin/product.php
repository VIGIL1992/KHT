<?php 
    include 'functions/function.php';
    include 'includes/header.php'; 
    include 'includes/navbar.php'; 
    
?>


<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Products</h1>
            
    </div>

        <!-- product header edit -->
        <div class="card shadow col-xl-12 col-md-12 mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample-1" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Edit Product Header Section</h6> 
            </a>


            <?php 
                $product_page = getAll("product_page");
                
                if(mysqli_num_rows($product_page) > 0) {
                    $data = mysqli_fetch_assoc($product_page);
                ?>

            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample-1">
                <form action="code.php" method="POST" >
                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>Edit Product Header</p>
                            </div>
                            <div class="coloumn col-xl-6 col-md-6 mb-4">
                                <!-- <img src="img/about.jpg" alt=""> -->
                                <input type="text" class="form-control" id="product_header" name="product_header" value="<?= $data['header'] ?>" placeholder="Product Header">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <p>Edit Product Header Discription</p>
                            </div>
                            <div class="coloumn col-xl-6 col-md-6 mb-4">
                                <textarea class="form-control" id="product_desc" name="product_desc" placeholder="Product Description" rows="3" ><?= $data['description'] ?></textarea>

                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="coloumn col-xl-3 col-md-6 mb-4">
                                <!-- <p>Edit Product Header Discription</p> -->
                            </div>
                            <div class="coloumn col-xl-6 col-md-6 mb-4">
                                <button type="submit" class="btn btn-primary" name="update_product_page_btn">Save changes</button>
                            </div>
                        </div>
                    </div>

                
                </form>
                <?php 
                }
                ?>
            </div>
        </div>
        <hr>

        <!-- View Product -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">View Products</h6>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">Add Products</button>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Images</th>
                        <th scope="col">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $products = getAll("products");

                        if(mysqli_num_rows($products) > 0) {
                            foreach($products as $item) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $item['id']; ?></th>
                                        <td> <?= $item['name']; ?> </td>
                                        <td> <img src="../img/products/<?= $item['image'] ?>" width="80px" height="80px" alt="<?= $item['name']; ?>"> </td>
                                        <td>
                                            <!-- <a href="#" class="btn btn-primary">Edit</a> -->
                                            
                                            <a href="edit_product.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <!-- <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit_product?id=<?= $item['id']; ?>">Edit Products</button> -->

                                            <!-- <form action="code.php" method="POST"> -->
                                                <!-- <input type="hidden" name="product_id" value=""> -->
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            <!-- </form> -->
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                        else{
                            echo "<tr><td colspan='4'>No records Found</td></tr>";
                        }
                        ?>
                        
                    </tbody>
                   
                </table>
            </div>
            
        </div>
        <!-- View Product End -->

        
        <!-- Add Product Modal -->
        <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="ExampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">    
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label >Product Name</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" aria-describedby="productName" placeholder="Product Name">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Select Product Image</label>
                                <input type="file" class="form-control-file" id="product_image " name="product_image">
                                <small id="imageHelp" class="form-text text-muted">image dimension</small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="add_product">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Product Modal End -->




  
</div>
<!-- /.container-fluid -->


<?php 
    include 'includes/footer.php'; 
    include 'includes/scripts.php';   
?>