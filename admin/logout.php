<?php
session_start();

if (isset($_SESSION['auth'])) {
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    $_SESSION['messaqge'] = "Logged Out Successfully";

}
header('Location: login.php');
// exit();

?>