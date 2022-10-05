<?php
session_start();
	 $con = mysqli_connect('localhost', 'root' , '' , 'db_web');

	if(isset($_POST['referral_submit']))    
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
			header('Location: stud___set_referral.php');  
		}
		 else{
		 	$_SESSION['status'] = "failed";
			header('Location: stud___set_referral.php');
		 }

	}


?>