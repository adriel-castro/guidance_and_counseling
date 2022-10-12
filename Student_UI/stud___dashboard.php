<?php

session_start();

include_once("../connections/connection.php");

if(!isset($_SESSION['UserEmail'])){
        
    echo "<script>window.open('../homepage___login.php','_self')</script>";
    
}else{


include('includes/stud___header.php');
include('includes/stud___left-menu-area.php');
include('includes/stud___top-menu-area.php');
include('includes/stud___mobile_menu.php');
?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <!-- this is for the search bar that has been removed since this is a dashboard-->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dashboard</span>
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




<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-12">
                            <div id='calendar'></div>
                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Offense Monitoring</h3>
                    <ul class="basic-list">
                        <li>Google Chrome <span class="pull-right label-danger label-1 label">95.8%</span></li>
                        <li>Mozila Firefox <span class="pull-right label-purple label-2 label">85.8%</span></li>
                        <li>Apple Safari <span class="pull-right label-success label-3 label">23.8%</span></li>
                        <li>Internet Explorer <span class="pull-right label-info label-4 label">55.8%</span></li>
                        <li>Opera mini <span class="pull-right label-warning label-5 label">28.8%</span></li>
                        <li>Mozila Firefox <span class="pull-right label-purple label-6 label">26.8%</span></li>
                        <li>Safari <span class="pull-right label-purple label-7 label">31.8%</span></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>




</div>
</div>
</div>


<?php
include('includes/stud___scripts.php');
?>

<?php } ?>