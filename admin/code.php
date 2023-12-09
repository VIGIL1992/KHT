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
            if(file_exists("../img/products".$old_image)){
                // echo "Old image exists!";
                unlink("../img/products".$old_image);
            }
            // else {
            //     echo "Old image not found!"; // Debug statement
            // }
        }
        redirect("edit_product.php?id=$product_id", "Product Update Succesfully");
        
    }
    else {
        redirect("edit_product.php?id=$product_id", "something went wrong");
    }


}
// Product Page End Here




?>