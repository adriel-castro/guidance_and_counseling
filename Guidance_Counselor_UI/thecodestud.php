<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '', 'db_guidancems');

//this is for registering the admin profile in the database
if (isset($_POST['register_student-btn'])) {
    $stud_id = $_POST['stud_id'];
    $stud_fname = $_POST['stud_fname'];
    $stud_lname = $_POST['stud_lname'];
    $stud_mname = $_POST['stud_mname'];
    $stud_address = $_POST['stud_address'];
    $stud_contact = $_POST['stud_contact'];
    $stud_program = $_POST['stud_program'];
    $stud_level = $_POST['stud_level'];
    $user_role =$_POST['usertype'];

    $query = "INSERT INTO student_tbl (STUD_ID, STUD_FNAME, STUD_LNAME, STUD_MNAME, STUD_ADDRESS, STUD_CONTACT, STUD_PROGRAM, STUD_LEVEL ) 
    VALUES ('$stud_id','$stud_fname','$stud_lname', '$stud_mname', '$stud_address', '$stud_contact', '$stud_program', '$stud_level')";
    $query_run = mysqli_query($connection, $query);
    // $query = "INSERT INTO user_login_tbl ( user_name, user_password,user_role ) 
    // VALUES ('$stud_email', '$stud_pass' , '$user_role')";
    // $query_run = mysqli_query($connection, $query);
    $msg = true;

    if ($query_run) {
        // echo "Saved";
        $_SESSION['status'] = "Profile Added";
        $_SESSION['status_code'] = "success";
        header('Location: gc___all-students.php');
    } else {
        // echo "Not saved";
        $_SESSION['status'] = "Profile Not Added";
        $_SESSION['status_code'] = "error";
        header('Location: gc___all-students.php');
    }
}
  
// this is for updating the student profiles on allstudent edit page

// if (isset($_POST['updatebtn'])) {
//     $id = $_POST['edit_username_id'];
//     $username = $_POST['edit_username'];
//     $email = $_POST['edit_email'];
//     $password = $_POST['edit_password'];
//     $usertypeupdate = $_POST['update_usertype'];

//     $query = "UPDATE user_admin_account_tbl SET GC_USERNAME='$username', GC_EMAIL='$email', GC_PASSWORD='$password', GC_USERTYPE='$usertypeupdate' WHERE GC_USER_ID='$id' ";
//     $query_run = mysqli_query($connection, $query);

//     if ($query_run) {
//         $_SESSION['success'] = "Your Data is updated successfully";
//         $_SESSION['status_code'] = "success";
//         header('Location: gc___all-gc.php');
//     } else {
//         $_SESSION['status'] = "Your Data is NOT updated";
//         $_SESSION['status_code'] = "error";
//         header('Location: gc___all-gc.php');
//     }
// }


// this is for the deleteing the student profiles on allstudent page

// if (isset($_POST['delete_stud_btn'])) {
//     $stud_id = $_POST['delete_stud_id'];

//     $query = "DELETE FROM student_tbl WHERE STUD_ID ='$stud_id' ";
//     $query_run = mysqli_query($connection, $query);

//     if ($query_run) {
//         $_SESSION['success'] = "Your data deleted successfully";
//         $_SESSION['status_code'] = "success";
//         header('Location: gc___all-students.php');
//     } else {
//         $_SESSION['status'] = "Your data not deleted";
//         $_SESSION['status_code'] = "error";
//         header('Location: gc___all-students.php');
//     }
// }






//this is for registering the staff profile in the database

// if (isset($_POST['register_staff-btn'])) {
//     $staff_id = $_POST['staff_id'];
//     $staff_fname = $_POST['staff_fname'];
//     $staff_lname = $_POST['staff_lname'];
//     $staff_mname = $_POST['staff_mname'];
//     $staff_address = $_POST['staff_address'];
//     $staff_contact = $_POST['staff_contact'];
//     $staff_position = $_POST['staff_position'];
//     $user_role = $_POST['usertype'];


//     $query = "INSERT INTO staff_tbl (STAFF_ID, STAFF_FNAME, STAFF_LNAME, STAFF_MNAME, STAFF_ADDRESS, STAFF_CONTACT, STAFF_POSITION) 
//     VALUES ('$staff_id','$staff_fname','$staff_lname', '$staff_mname', '$staff_address', '$staff_contact', '$staff_program')";
//     $query_run = mysqli_query($connection, $query);

//     if ($query_run) {
//         // echo "Saved";
//         $_SESSION['success'] = "Profile Added";
//         $_SESSION['status_code'] = "success";
//         header('Location: gc___all-staff.php');
//     } else {
//         // echo "Not saved";
//         $_SESSION['status'] = "Profile Not Added";
//         $_SESSION['status_code'] = "error";
//         header('Location: gc___all-staff.php');
//     }
// } 


?>