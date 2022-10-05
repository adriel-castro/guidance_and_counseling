<?php
session_start();
$con = mysqli_connect('localhost', 'root','', 'db_web');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['save_excel_data']))
{
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls', 'csv', 'xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];

        /** Load $inputFileName to a Spreadsheet object **/
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        
        $count = "0";
        foreach($data as $row)
        {
            if($count > 0)
            {
                $Staff_ID = $row[0];
                $Last_Name = $row[1];
                $First_Name = $row[2];
                $Middle_Name = $row[3];
                $Address = $row[4];
                $Contant_No = $row[5];
                $Position = $row[6];
                $Email = $row[7];
                // $Gender = $row[9];
                // $Image = $row[10];
                $Status =$row[11];
            }
            else 
            {
                $count = "1";
            }

           $studentQuery = "INSERT INTO staff_tbl
           (STAFF_ID, STAFF_LNAME, STAFF_FNAME, STAFF_MNAME, STAFF_ADDRESS, STAFF_CONTACT, STAFF_POSITION, STAFF_EMAIL, STAFF_STATUS)
            VALUES ('$Staff_ID', '$Last_Name', '$First_Name', '$Middle_Name', '$Address', '$Contant_No', '$Position', '$Email', '$Status')";

            $result = mysqli_query($con, $studentQuery);
            $msg = true;
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully imported";
            header('Location: gc___all-staff.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not imported";
            header('Location: gc___all-staff.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid File";
        header('Location: gc___all-staff.php');
        exit(0);
    }





    //this is for the staff table to manipulate edit and delete profiles



}

?>