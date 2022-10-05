<?php

$conn = mysqli_connect("localhost", "root", "", "db_web");

if($conn){
    echo "Connection Successfull";
}
else{
    echo "Connection is not Successfull";
}


?>