<?php 
    include 'includes/header.php'; 
    include 'includes/navbar.php'; 

?>



    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Products</h1>
            
        </div>

        <!-- 2nd section -->
        <div class="card shadow col-xl-12 col-md-12 mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample-1" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Edit About us</h6> 
            </a>

            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample-1">
                <div class="card-body">
                    <div class="row">
                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                            <p>about section image</p>
                        </div>
                        <div class="coloumn">
                            <img src="img/about.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                            <p>change About Section image</p>
                        </div>
                        <div class="coloumn">
                            <P>change image</P>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                            <p>change About Section Heading</p>
                        </div>
                        <div class="coloumn">
                            <P>change About Section Heading</P>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="coloumn col-xl-3 col-md-6 mb-4">
                            <p>change About Section Description</p>
                        </div>
                        <div class="coloumn">
                            <P>change About Section Description</P>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <hr>
    
    
        <!-- View Products Card  -->
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
                                        <td> <img src="..img/products/<?= $item['image'] ?>" width="50px" height="50px" alt=" <?= $item['name']; ?>  "> </td>
                                        <td>
                                            <a href="edit_product.php?id=<?= $item[id]; ?>" class="btn btn-primary">Edit</a>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="product_id" value="<?= $item[id] ?>">
                                                <button type="submit" class="btn btm-sm btn_danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                        else{
                            echo "No records Found";
                        }
                        ?>
                        
                    </tbody>
                </table>

                
            </div>
        </div>
    


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

        <!-- Example modal structure -->
        <!-- <div class="modal" id="messageModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"> -->
                        <!-- Display the message here -->
                        <!-- <p id="modalMessage"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
         -->




    </div>
    <!-- /.container-fluid -->


<?php 
    include 'includes/footer.php'; 
    include 'includes/scripts.php';   
?>