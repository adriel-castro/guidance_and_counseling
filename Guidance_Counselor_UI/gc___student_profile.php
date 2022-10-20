<?php

session_start();

    include_once("../connections/connection.php");

    if(!isset($_SESSION['UserEmail'])){
        
        echo "<script>window.open('../homepage___login.php','_self')</script>";
        
    }else{

        $con = connection();            

        if(isset($_GET['id'])){

            $id = $_GET['id'];
            $query = "SELECT * FROM users WHERE user_id = '$id'";
            $get_user = $con->query($query) or die ($con->error);
            $row = $get_user->fetch_assoc();
        }

        // if(isset($_POST['update_details'])) {
        //     // $user_id = $row['user_id'];
        //     $first_name = $_POST['first_name'];
        //     $last_name = $_POST['last_name'];
        //     $middle_name = $_POST['middle_name'];
        //     $birthday = $_POST['birthday'];
        //     $position = $_POST['position'];
        //     $address = $_POST['address'];
        //     $gender = $_POST['gender'];
        //     $contact = $_POST['contact'];

        //     $update_query = "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name', `middle_name` = '$middle_name', `date_of_birth` = '$birthday', ".
        //                 "`position` = '$position', `address` = '$address', `gender` = '$gender', `contact` = '$contact' WHERE user_id = '$id'";
        //     $con->query($update_query) or die ($con->error);
        //     header("Location: gc___staff_profile.php?id=$id");
        // }
?>

<?php
include('includes/gc___header.php');
include('includes/gc___left-menu-area.php');
include('includes/gc___top-menu-area.php');
include('includes/gc___mobile_menu.php');
?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Student Profile</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="img/profile/1.jpg" alt="" />
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Student ID</b><br /> <?= $row['id_number'] ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Full Name </b><br /> <?= $row['first_name'] ?> <?= $row['last_name'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Program</b><br /> <?= $row['program'] ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Level</b><br /> <?= $row['level'] ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">

                        <li class="active"><a href="#description">Offense Monitoring</a></li>
                        <li><a href="#reviews"> Counseling Info</a></li>
                        <li><a href="#INFORMATION">Edit Account</a></li>
                        <li><a href="#INDIVIDUAL_INVENTORY">Inventory Form</a></li>

                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="chat-discussion" style="height: auto">
                                            <div class="chat-message">

                                                <div class="message">
                                                    <a class="message-author" href="#"> Bullying </a>
                                                    <span class="message-date"> Mon / Jan 26 2015 - 12:00pm </span>
                                                    <span class="message-content">Nambully ng student</span>
                                                    <a class="btn btn-s btn-danger"><i></i> Sanction: 15hrs left </a>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-s btn-success"><i></i> Set Counseling </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">

                                                <div class="message">
                                                    <a class="message-author" href="#"> Bullying </a>
                                                    <span class="message-date"> Mon / Jan 26 2015 - 12:00pm </span>
                                                    <span class="message-content">Nambully ng student
                                                    </span>

                                                    <a class="btn btn-s btn-danger"><i></i> Sanction: 15hrs left </a>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-s btn-success"><i></i> Set Counseling </a>

                                                        <!-- <a class="btn btn-s btn-danger"><i></i> Sanction: 15hrs left </a> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="chat-message">

                                                <div class="message">
                                                    <a class="message-author" href="#"> Jennifer sanchez </a>
                                                    <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                    <span class="message-content">reffered student, for counseling
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i></i> Set schedule </a>

                                                        <a class="btn btn-xs btn-default"><i></i> Done </a>
                                                    </div>
                                                </div>
                                            </div> -->


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="chat-discussion" style="height: auto">
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/1.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Michael Smith </a>
                                                    <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                    <span class="message-content">reffered student, for counseling
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i></i> Review </a>

                                                        <a class="btn btn-xs btn-default"><i></i> Archive </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/2.png" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> juan dela cruz </a>
                                                    <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                    <span class="message-content">reffered student, for counseling
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i></i> Review </a>

                                                        <a class="btn btn-xs btn-default"><i></i> Archive </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/3.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Jennifer sanchez </a>
                                                    <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                    <span class="message-content">reffered student, for counseling
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i></i> Review </a>

                                                        <a class="btn btn-xs btn-default"><i></i> archive </a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input type="text" class="form-control" placeholder="Password">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress mg-t-15">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INDIVIDUAL_INVENTORY">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="form-group">
                                                    <label>Individual Inventory Form</label>
                                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input type="text" class="form-control" placeholder="Password">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress mg-t-15">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('includes/gc___footer.php');
include('includes/gc___scripts.php');
?>

<?php } ?>