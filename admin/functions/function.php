<?php
// include('../config/dbcon.php');
include(__DIR__ . '/../config/dbcon.php');

// Function to retrieve data from the database
function getAll($table){
    global $connection;
    $getall_query = "SELECT * FROM $table";
    $getall_query_run = mysqli_query($connection, $getall_query);

    return $getall_query_run;
}

function getByID($table, $_id){
    global $connection;
    $getByID_query = "SELECT * FROM $table WHERE id='$_id' ";
    $getByID_query_run = mysqli_query($connection, $getByID_query);

    return $getByID_query_run;
}


function getTotalProductsCount() {
    $products = getAll("products"); // Assuming getAll() fetches all rows from the "products" table
    
    // Count the number of rows fetched
    $total_products = mysqli_num_rows($products);
    
    return $total_products;
}

?>