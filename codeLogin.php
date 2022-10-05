<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "db_web");

if (isset($_POST['login_btn'])) {
    $login_email = $_POST['user_email'];
    $login_password = $_POST['user_password'];

    $query = "SELECT * FROM user_login_tbl WHERE user_name='".$login_email."' AND user_password='".$login_password."'";
    $query_run = mysqli_query($connection, $query);
    $row=mysqli_fetch_array($query_run);

    if($row["user_role"]=="Student"){
        header('Location: ./Student_UI/stud___dashboard.php');
    }
    elseif($row["user_role"]=="Guidance Counselor"){
        header('Location: ./Guidance_Counselor_UI/gc___dashboard.php');
    }

    else {
        $_SESSION['status'] = 'Email Address / Password is Invalid';
        header('Location: homepage___login.php');
    }

    
}
?>