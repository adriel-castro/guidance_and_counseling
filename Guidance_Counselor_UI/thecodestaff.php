<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '', 'db_guidancems');

//this is for registering the staff profile in the database
 
if (isset($_POST['register_staff-btn'])) {

$staff_id = $_POST['staff_id'];
$staff_fname = $_POST['staff_fname'];
$staff_lname = $_POST['staff_lname'];
$staff_mname = $_POST['staff_mname'];
$staff_address = $_POST['staff_address'];
$staff_contact = $_POST['staff_contact'];
$staff_position = $_POST['staff_position'];
$user_role = $_POST['usertype'];


$query = "INSERT INTO staff_tbl (STAFF_ID, STAFF_FNAME, STAFF_LNAME, STAFF_MNAME, STAFF_ADDRESS, STAFF_CONTACT, STAFF_POSITION)
VALUES ('$staff_id','$staff_fname','$staff_lname', '$staff_mname', '$staff_address', '$staff_contact', '$staff_program')";
$query_run = mysqli_query($connection, $query);

if ($query_run) {
// echo "Saved";
$_SESSION['status'] = "Profile Added";
$_SESSION['status_code'] = "success";
header('Location: gc___all-staff.php');
} else {
// echo "Not saved";
$_SESSION['status'] = "Profile Not Added";
$_SESSION['status_code'] = "error";
header('Location: gc___all-staff.php');
}
}







if (isset($_POST['register_gc_staff-btn'])) {

    $Gc_id = $_POST['gc_id'];
    $Gc_fname = $_POST['gc_fname'];
    $Gc_lname = $_POST['gc_lname'];
    $Gc_mname = $_POST['gc_mname'];
    $Gc_address = $_POST['gc_address'];
    $Gc_contact = $_POST['gc_contact'];
    // $staff_position = $_POST['staff_position'];
    // $user_role = $_POST['usertype'];


    $query = "INSERT INTO gc_tbl (GC_ID, GC_FNAME, GC_LNAME, GC_MNAME, GC_ADDRESS, GC_CONTACT)
    VALUES ('$Gc_id','$Gc_fname','$Gc_lname', '$Gc_mname', '$Gc_address', '$Gc_contact')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        // echo "Saved";
        $_SESSION['status'] = "Profile Added";
        $_SESSION['status_code'] = "success";
        header('Location: gc___main-all-gc.php');
    } else {
        // echo "Not saved";
        $_SESSION['status'] = "Profile Not Added";
        $_SESSION['status_code'] = "error";
        header('Location: gc___main-all-gc.php');
    }
}


?>