<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "db_web");

//this is for registering the admin profile in the database
if (isset($_POST['register_admin-btn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];

    if ($password === $cpassword) {
        $query = "INSERT INTO user_admin_account_tbl (GC_USERNAME, GC_EMAIL, GC_PASSWORD, GC_USERTYPE ) VALUES ('$username','$email','$password', '$usertype')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            // echo "Saved";
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: gc___all-gc.php');
        } else {
            // echo "Not saved";
            $_SESSION['status'] = "Admin Profile Not Added";
            header('Location: gc___all-gc.php');
        }
    } else {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        header('Location: gc___all-gc.php');
    }
}


// this is for updating the admin profiles on register edit page

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_username_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];

    $query = "UPDATE user_admin_account_tbl SET GC_USERNAME='$username', GC_EMAIL='$email', GC_PASSWORD='$password', GC_USERTYPE='$usertypeupdate' WHERE GC_USER_ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your Data is updated successfully";
        header('Location: gc___all-gc.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT updated";
        header('Location: gc___all-gc.php');
    }
}






// this is for the deleteing the admin profiles on register page

if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_username_id'];

    $query = "DELETE FROM user_admin_account_tbl WHERE GC_USER_ID ='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your data deleted successfully";
        header('Location: gc___all-gc.php');
    } else {
        $_SESSION['status'] = "Your data not deleted";
        header('Location: gc___all-gc.php');
    }
}





// if(isset($_POST['login_btn']))
// {
//     $login_email = $_POST['user_email'];
//     $login_password = $_POST['user_password'];

//     $query = "SELECT * FROM user_admin_account_tbl WHERE GC_EMAIL='$login_email' AND GC_PASSWORD='$login_password' ";
//     $query_run = mysqli_query($connection, $query);

//     if(mysqli_fetch_array($query_run))
//     {
//         $_SESSION['username'] = $login_email;
//         header('Location: homepage___index.php');
//     }
//     else{
//         $_SESSION['status'] = 'Email Address / Password is Invalid';
//         header('Location: homepage___index.php');
//     }
// }







//this is for registering the admin profile in the database
// if (isset($_POST['register_student-btn'])) {
//     $stud_id = $_POST['stud_id'];
//     $stud_fname = $_POST['stud_fname'];
//     $stud_lname = $_POST['stud_lname'];
//     $stud_mname = $_POST['stud_mname'];
//     $stud_address = $_POST['stud_address'];
//     $stud_contact = $_POST['stud_contact'];
//     $stud_program = $_POST['stud_program'];
//     $stud_level = $_POST['stud_level'];

//     $query = "INSERT INTO student_tbl (STUD_ID, STUD_FNAME, STUD_LNAME, STUD_MNAME, STUD_ADDRESS, STUD_CONTACT, STUD_PROGRAM, STUD_LEVEL ) 
//     VALUES ('$stud_id','$stud_fname','$stud_lname', '$stud_mname', '$stud_address', '$stud_contact', '$stud_program', '$stud_level')";
//     $query_run = mysqli_query($connection, $query);

//     if ($query_run) {
//         // echo "Saved";
//         $_SESSION['success'] = "Profile Added";
//         header('Location: gc___all-students.php');
//     } else {
//         // echo "Not saved";
//         $_SESSION['status'] = "Profile Not Added";
//         header('Location: gc___all-students.php');
//     }
// }

// // this is for updating the student profiles on allstudent edit page

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
//         header('Location: gc___all-gc.php');
//     } else {
//         $_SESSION['status'] = "Your Data is NOT updated";
//         header('Location: gc___all-gc.php');
//     }
// }


// this is for the deleteing the student profiles on allstudent page

// if (isset($_POST['delete_stud_btn'])) {
//     $id = $_POST['delete_stud_id'];

//     $query = "DELETE FROM student_tbl WHERE STUD_ID ='$student_id' ";
//     $query_run = mysqli_query($connection, $query);

//     if ($query_run) {
//         $_SESSION['success'] = "Your data deleted successfully";
//         header('Location: gc___all-students.php');
//     } else {
//         $_SESSION['status'] = "Your data not deleted";
//         header('Location: gc___all-students.php');
//     }
// }

        if(isset($_POST['save_excel_data']))    
    {
        $reff_lname = $_POST['REFF_LNAME'];
        $reff_fname = $_POST['REFF_FNAME'];
        $reff_level = $_POST['REFF_LEVEL'];
        $reff_program = $_POST['REFF_PROGRAM'];
        $reff_source = $_POST['REFF_SOURCE'];
        $reff_date = $_POST['REFF_DATE'];
        $reff_nature = $_POST['REFF_NATURE'];
        $reff_reason = $_POST['REFF_REASON'];
        $reff_actions = $_POST['REFF_ACTIONS'];
        $reff_remarks = $_POST['REFF_REMARKS']; 

        $query = "INSERT INTO referrals_tbl(REFF_LNAME, REFF_FNAME, REFF_LEVEL, REFF_PROGRAM , REFF_SOURCE,REFF_DATE, REFF_NATURE, REFF_REASON, REFF_ACTIONS, REFF_REMARKS) 
        VALUES('$reff_lname','$reff_fname','$reff_level', '$reff_program','$reff_source', '$reff_date','$reff_nature','$reff_reason','$reff_actions','$reff_remarks')";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['success'] = "added";
            header('Location: gc___referral.php');  
        }
         else{
            $_SESSION['status'] = "failed";
            header('Location: gc___referral.php');
         }

    }


?>