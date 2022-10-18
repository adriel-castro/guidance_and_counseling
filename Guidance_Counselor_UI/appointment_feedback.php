<?php

session_start();

include_once("../connections/connection.php");

if(!isset($_SESSION['UserEmail'])){
        
  echo "<script>window.open('../homepage___login.php','_self')</script>";
  
}else{

    $con = connection();

    if(isset($_SESSION['AppId'])) {
      $app_id = $_SESSION['AppId'];
    }

  if(isset($_POST['add_feedback'])) {
    $stud_name = $_POST['stud_name'];
    $program = $_POST['program'];
    $section = $_POST['section'];
    $session_date = $_POST['session_date'];
    $action_taken = $_POST['action_taken'];
    $remarks = $_POST['remarks'];
    $feedback_date = date("Y-m-d");

    $query = "INSERT INTO `feedback`(`student_name`, `program`, `section`, `app_id`, `session_date`, `feedback_date`, `action_taken`, `remarks`) ".
            "VALUES ('$stud_name','$program','$section','$app_id','$session_date','$feedback_date','$action_taken','$remarks')";
    $con->query($query) or die ($con->error);
    header("Location: gc___all_appointment.php");
  
}

}