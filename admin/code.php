<?php
session_start();
// CREATING DATABASE CONNECTION
$connection = mysqli_connect("localhost","root","","KHT");
if(!$connection){
    die("Connection Failed: ".mysqli_connect_error());
}

function redirect($url, $message) {
    $_SESSION['message'] = $message;
    header("Location:". $url);
    exit();
}



// REGISTER NEW USER
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['repeatPassword'];
    // $rpassword = $_POST['repeatPassword'];

    

    if($password === $rpassword) {
        $user_query = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
        $user_query_run = mysqli_query($connection, $user_query);

        if($user_query_run) {
            // echo "saved"
            $_SESSION['message'] = "Admin Profile Added";
            // header('Location: register.php');
            header("Location: index.php");
            // exit();
        }
        else {
            $_SESSION['message'] = "Admin Profile Not Added";
            header('Location: register.php');
            
        }

    }

    else {
        $_SESSION['message'] = "Password Does Not Match";
            header('Location: register.php');
    }

    

}


if(isset($_POST['login_btn'])){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $login_query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
    $login_query_run = mysqli_query($connection, $login_query);

    if (mysqli_num_rows($login_query_run)>0) {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['username'];
        $useremail = $userdata['email'];
        
        $_SESSION['auth_user'] = [
            'username' => $username,
            'email' => $useremail
        ];
        
        $_SESSION['message'] = "Loged in Sucesfully";
        header('Location: index.php');
        exit();
    }
    else{
        $_SESSION['message'] = "Invalid Credentials";
        header('Location: login.php');

    }

}


//Index Page Start Here
//Index Page Section1 Start Here
if(isset($_POST['home_s1_btn'])) {
    
    $s1_header = $_POST['s1_header'];
    $s1_desc = $_POST['s1_description'];
    $s1_button_name = $_POST['s1_button_name'];
    $s1_button_link = $_POST['s1_button_link'];

    $old_image = $_POST['old_image'];
    $new_image = $_FILES['s1_newimage']['name'];


 if ($new_image != "") {
        $update_filename = $new_image;
    }
    else {
        $update_filename = $old_image;
    }

    $path = "../img/home";
    
    $update_homepage_query = "UPDATE home_page SET s1_header='$s1_header', s1_description	='$s1_desc', s1_button_name='$s1_button_name' , 
                            s1_button_link='$s1_button_link', s1_image='$update_filename' WHERE id='1' ";
    
    $update_homepage_query_run = mysqli_query($connection, $update_homepage_query);
   
    if($update_homepage_query_run){
        if($_FILES['s1_newimage']['name'] != ""){
            move_uploaded_file($_FILES['s1_newimage']['tmp_name'], $path.'/'.$new_image);
            
            // Check if the old image exists before attempting to delete
            if(file_exists("../img/home/".$old_image)){
                // echo "Old image exists!";
                unlink("../img/home/".$old_image);
            }
        }

        echo "Error: " . mysqli_error($connection);
        redirect("home.php", "Update Succesfully ");
    }

    else{
        echo "Error: " . mysqli_error($connection);
        redirect("home.php", "Not Updated ");
    }
}
//Index Page Section1 End Here

//Index Page Section2 Start Here
if(isset($_POST['home_s2_btn'])) {
    
    $s2_header = $_POST['s2_header'];
    $s2_desc = $_POST['s2_description'];

    $s2_card1_header = $_POST['s2_card1_header'];
    $s2_card1_desc = $_POST['s2_card1_description'];

    $s2_card2_header = $_POST['s2_card2_header'];
    $s2_card2_desc = $_POST['s2_card2_description'];

    $s2_card3_header = $_POST['s2_card3_header'];
    $s2_card3_desc = $_POST['s2_card3_description'];    
    //////////


    $card1_old_image = $_POST['card1_old_image'];
    $card1_new_image = $_FILES['card1_newimage']['name'];

    $card2_old_image = $_POST['card2_old_image'];
    $card2_new_image = $_FILES['card2_newimage']['name'];

    $card3_old_image = $_POST['card3_old_image'];
    $card3_new_image = $_FILES['card3_newimage']['name'];
    
    if ($card1_new_image != "") {
        $card1_update_filename = $card1_new_image;
    }
    else {
        $card1_update_filename = $card1_old_image;
    }

    if ($card2_new_image != "") {
        $card2_update_filename = $card2_new_image;
    }
    else {
        $card2_update_filename = $card2_old_image;
    }

    if ($card3_new_image != "") {
        $card3_update_filename = $card3_new_image;
    }
    else {
        $card3_update_filename = $card3_old_image;
    }

    $path = "../img/home";
    
    $update_homepage_query = "UPDATE home_page SET s2_header='$s2_header', s2_description ='$s2_desc', 
                        s2_card1_icon='$card1_update_filename', s2_card1_header='$s2_card1_header', s2_card1_description='$s2_card1_desc', 
                        s2_card2_icon='$card2_update_filename', s2_card2_header='$s2_card2_header', s2_card2_description='$s2_card2_desc', 
                        s2_card3_icon='$card3_update_filename', s2_card3_header='$s2_card3_header', s2_card3_description='$s2_card3_desc' 
                        WHERE id='1' ";
    
    $update_homepage_query_run = mysqli_query($connection, $update_homepage_query);
   
    if($update_homepage_query_run){
        
        // For Card 1
        if($_FILES['card1_newimage']['name'] != ""){
            move_uploaded_file($_FILES['card1_newimage']['tmp_name'], $path.'/'.$card1_new_image);
            
            // Check if the old image exists before attempting to delete
            if(file_exists("../img/home/".$card1_old_image)){
                // echo "Old image exists!";
                unlink("../img/home/".$card1_old_image);
            }
        }
        // For Card 2
        if($_FILES['card2_newimage']['name'] != ""){
            move_uploaded_file($_FILES['card2_newimage']['tmp_name'], $path.'/'.$card2_new_image);
            
            // Check if the old image exists before attempting to delete
            if(file_exists("../img/home/".$card2_old_image)){
                // echo "Old image exists!";
                unlink("../img/home/".$card2_old_image);
            }
        }
        // For Card 3
        if($_FILES['card3_newimage']['name'] != ""){
            move_uploaded_file($_FILES['card3_newimage']['tmp_name'], $path.'/'.$card3_new_image);
            
            // Check if the old image exists before attempting to delete
            if(file_exists("../img/home/".$card3_old_image)){
                // echo "Old image exists!";
                unlink("../img/home/".$card3_old_image);
            }
        }

        echo "Error: " . mysqli_error($connection);
        redirect("home.php", "Update Succesfully ");
    }

    else{
        echo "Error: " . mysqli_error($connection);
        redirect("home.php", "Not Updated ");
    }
}
//Index Page Section2 End Here
//Index Page End Here

// Product Page Start Here
if(isset($_POST['update_product_page_btn'])) {
    
    $product_id = $_POST['product_id'];
    $product_header = $_POST['product_header'];
    $product_desc = $_POST['product_desc'];
    
    $update_product_page_query = "UPDATE product_page SET header='$product_header', description	='$product_desc' WHERE id='1' ";
                                    // UPDATE `product_page` SET `id`='[value-1]',`header`='[value-2]',`description`='[value-3]' WHERE 1
    $update_product_page_query_run = mysqli_query($connection, $update_product_page_query);
    echo "proid";
    if($update_product_page_query_run){

        echo "Error: " . mysqli_error($connection);
        redirect("product.php", "Update Succesfully ");
    }

    else{
        echo "Error: " . mysqli_error($connection);
        redirect("product.php", "Not Updated ");
    }
}

//Add new Product
if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];

    $product_image = $_FILES['product_image']['name'];

    $path = "../img/products";

    $image_ext = pathinfo($product_image, PATHINFO_EXTENSION);
    // $filename = time().'.'.$image_ext;
    $filename = $product_name.'.'.$image_ext;

    if($product_name != "" && $product_image !="" ){
        $product_query = "INSERT INTO products(name,image) VALUES ('$product_name','$filename')";
        $product_query_run = mysqli_query($connection, $product_query);

        if($product_query_run){
            move_uploaded_file($_FILES['product_image']['tmp_name'], $path.'/'.$filename);

            redirect("product.php", "Product Added Succesfully");
        }
        else {
            redirect("product.php", "Something Went Wrong");
        }
    }
    else {
        redirect("product.php", "All field are Mandatory ");
    }

    
}

//Edit Product
if(isset($_POST['edit_product_btn'])) {

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $old_image = $_POST['old_image'];

    $new_image = $_FILES['product_image']['name'];

    if ($new_image != "") {
        $update_filename = $new_image;
    }
    else {
        $update_filename = $old_image;
    }

    $path = "../img/products";

    $update_query = "UPDATE products SET name='$product_name', image='$update_filename' WHERE id='$product_id' ";
    $update_query_run = mysqli_query($connection, $update_query);

    if($update_query_run){
        if($_FILES['product_image']['name'] != ""){
            move_uploaded_file($_FILES['product_image']['tmp_name'], $path.'/'.$new_image);
            
            // Check if the old image exists before attempting to delete
            if(file_exists("../img/products/".$old_image)){
                // echo "Old image exists!";
                unlink("../img/products/".$old_image);
            }
           
        }
        redirect("edit_product.php?id=$product_id", "Product Update Succesfully");
        
    }
    else {
        redirect("edit_product.php?id=$product_id", "something went wrong");
    }
}

//Delete Products
if(isset($_POST['delete_product_btn'])) {
    $product_id = mysqli_real_escape_string($connection, $_POST['product_id']);

    $product_query = "SELECT * FROM products WHERE id='$product_id' ";
    $product_query_run = mysqli_query($connection, $product_query);

    $delete_query = "DELETE FROM products WHERE id='$product_id' ";
    $delete_query_run = mysqli_query($connection, $delete_query);
    $product_data = mysqli_fetch_array($product_query_run);
    $image = $product_data["image"];

    if($delete_query_run){
        // Check if the old image exists before attempting to delete
        if(file_exists("../img/products/".$image)){
            // echo "Old image exists!";
            unlink("../img/products/".$image);
        }
        redirect("product.php", "Product Delete Succesfully");
    }
    else {
        redirect("product.php?", "something went wrong");
    }
}
// Product Page End Here




?>