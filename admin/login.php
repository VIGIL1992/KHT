<?php 
    session_start();
    if(isset($_SESSION['auth']))
    {
        $_SESSION['message'] = "you are already loggedin";
        header('Location: index.php'); 
    }
    
    include 'includes/header.php'; 
    // include 'includes/navbar.php'; 

?>

<!-- <body class="bg-gradient-primary"> -->

    <div class="container">
        <?php 
        if(isset($_SESSION['message'])) {  
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?= $_SESSION['message']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php 
            unset($_SESSION['message']);
        } ?>

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                            </div>
                            <form class="user" action="code.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="username"
                                            placeholder="Username">
                                    </div>
                                </div>
                                <br>
                                <!-- <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email"
                                        placeholder="Email Address">
                                </div> -->
                                
                                <div class="form-group">
                                    <div class="">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" placeholder="Password">
                                    </div>
                                    
                                </div>
                                <br>
                                <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">Login</button>
                            </form>
                            <br>    
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> -->
                            <div class="text-center">
                                <a class="small" href="#">Forget Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
<?php 
    include 'includes/footer.php'; 
    include 'includes/scripts.php';   
?>