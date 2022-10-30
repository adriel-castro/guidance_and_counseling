<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../homepage___login.php','_self')</script>";
} else {

    $con = connection();

?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Guidance and Counseling - STI College Angeles</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- logo angeles_sti
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/sti_logo.png">
        <!-- Google Fonts
		============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- meanmenu icon CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- educate icon CSS
		============================================ -->
        <link rel="stylesheet" href="css/educate-custon-icon.css">
        <!-- morrisjs CSS
		============================================ -->
        <link rel="stylesheet" href="css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
		============================================ -->
        <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
		============================================ -->
        <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
        <!-- x-editor CSS
		============================================ -->
        <link rel="stylesheet" href="css/editor/select2.css">
        <link rel="stylesheet" href="css/editor/datetimepicker.css">
        <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
        <link rel="stylesheet" href="css/editor/x-editor-style.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
        <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
        <!-- modals CSS
		============================================ -->
        <link rel="stylesheet" href="./css/modals.css">
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
		============================================ -->

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>

        <?php include('includes/gc___mobile_menu.php')  ?>

        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    </div>
                </div>
            </div>
        </div>

        </div>

        <!-- Static Table Start -->

        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Search <span class="table-project-n"> Students</span></h1>
                                </div>
                            </div>


                            <div class="sparkline13-graph">

                                <div class="datatable-dashv1-list custom-datatable-overright">
                                </div>

                                <div id="toolbar">
                                    <div class="card-header py-3">
                                        <h5 class="m-0 font-weight-bold text-primary">

                                            <!-- <div id="">

                                                <select id="level" name="level">
                                                    <option value="" disabled="" selected="">Level</option>
                                                    <option value="G11">G11</option>
                                                    <option value="G12">G12</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                                <select id="level" name="level">
                                                    <option value="" disabled="" selected="">Programm/Track</option>
                                                    <option value="BSIT">BSIT</option>
                                                    <option value="CCTECH">CCTECH</option>
                                                    <option value="MAWD">MAWD</option>
                                                    <option value="CUART">CUART</option>
                                                    <option value="HUMSS">HUMSS</option>
                                                    <option value="CpE">CpE</option>
                                                </select>
                                                <button class="btn btn-primary" name="filter">Filter</button>
                                                <button class="btn btn-success" name="reset">Reset</button>
                                            </div> -->
                                            <div>
                                                <div class="form-group-inner">

                                                    <div class=" row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right">Level</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="selectLevel" class="form-control custom-select-value" name="account">
                                                                    <option value="" disabled="" selected="">Select Level</option>
                                                                    <option value="shs">Senior High School</option>
                                                                    <option value="tertiary">Tertiary</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner" style="display: none;">

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right">Track</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="selectLevel" class="form-control custom-select-value" name="account">
                                                                    <option value="" disabled="" selected="">Level</option>
                                                                    <option value="ABM">ABM</option>
                                                                    <option value="CCTECH">CCTECH</option>
                                                                    <option value="STEM">STEM</option>
                                                                    <option value="CULART">CULART</option>
                                                                    <option value="DIGIART">DIGIART</option>
                                                                    <option value="HUMMSS">HUMMSS</option>
                                                                    <option value="MAWD">MAWD</option>
                                                                    <option value="STEM">STEM</option>
                                                                    <option value="TOPER">TOPER</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right">SHS-Level</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="selectLevel" class="form-control custom-select-value" name="account">
                                                                    <option value="" disabled="" selected="">Level</option>
                                                                    <option value="shs">Grade 11</option>
                                                                    <option value="tertiary">Grade 12</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner" style="display: none;">

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right">Program</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="selectLevel" class="form-control custom-select-value" name="account">
                                                                    <option value="" disabled="" selected="">Level</option>
                                                                    <option value="BSIT">BSIT</option>
                                                                    <option value="BMMA">BMMA</option>
                                                                    <option value="BSBA">BSBA</option>
                                                                    <option value="BSHM">BSHM</option>
                                                                    <option value="BSTM">BSTM</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right">Tertiary-Level</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="selectLevel" class="form-control custom-select-value" name="account">
                                                                    <option value="" disabled="" selected="">Level</option>
                                                                    <option value="1yr">1st Year</option>
                                                                    <option value="2yr">2nd Year</option>
                                                                    <option value="3yr">3rd Year</option>
                                                                    <option value="4yr">4th Year</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </h5>

                                    </div>

                                </div>

                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th>Student ID</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Program</th>
                                            <th>Level</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        // $connection = mysqli_connect('localhost', 'root', '', 'guidance_and_counseling');

                                        $query = "SELECT * FROM users WHERE position = 'student' || 'Student'";
                                        $query_run = mysqli_query($con, $query);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $row) {
                                        ?>

                                                <tr>
                                                    <td></td>
                                                    <td><?= $row['id_number'] ?></td>
                                                    <td><?= $row['last_name'] ?></td>
                                                    <td><?= $row['first_name'] ?></td>
                                                    <td><?= $row['middle_name'] ?></td>
                                                    <td><?= $row['program'] ?></td>
                                                    <td><?= $row['level'] ?></td>
                                                    <!-- <td>
                                                            <a href="gc___student_profile.php?id=<?= $row['user_id'] ?>">
                                                                <button type="button" class="btn btn-primary">View</button>
                                                            </a>
                                                        </td> -->
                                                </tr>

                                            <?php

                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>

                                        <?php
                                        }
                                        ?>


                                    </tbody>
                                </table>
                                <br>
                                <a><button type="submit" name="add_student" class="btn btn-primary btn-md">Confirm</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Static Table End -->

        <?php
        include('includes/gc___scripts.php');
        ?>

        <!-- data table JS
		============================================ -->
        <script src="js/data-table/bootstrap-table.js"></script>
        <script src="js/data-table/tableExport.js"></script>
        <script src="js/data-table/data-table-active.js"></script>
        <script src="js/data-table/bootstrap-table-editable.js"></script>
        <script src="js/data-table/bootstrap-editable.js"></script>
        <script src="js/data-table/bootstrap-table-resizable.js"></script>
        <script src="js/data-table/colResizable-1.5.source.js"></script>
        <script src="js/data-table/bootstrap-table-export.js"></script>
        <!--  editable JS
		============================================ -->
        <script src="js/editable/jquery.mockjax.js"></script>
        <script src="js/editable/mock-active.js"></script>
        <script src="js/editable/select2.js"></script>
        <script src="js/editable/moment.min.js"></script>
        <script src="js/editable/bootstrap-datetimepicker.js"></script>
        <script src="js/editable/bootstrap-editable.js"></script>
        <script src="js/editable/xediable-active.js"></script>
        <!-- Chart JS
		============================================ -->
        <script src="js/chart/jquery.peity.min.js"></script>
        <script src="js/peity/peity-active.js"></script>
        <!-- icheck JS
		============================================ -->
        <script src="js/icheck/icheck.min.js"></script>
        <script src="js/icheck/icheck-active.js"></script>


    </body>

    </html>

<?php } ?>

<script>
    function changeDropdown() {
        var state = document.getElementById("mySelect").value;
        // alert(state);
        if (state == "student") {
            document.getElementById("STUD_ID").style.display = "block";
            document.getElementById("STUD_NAME").style.display = "block";
            document.getElementById("STUD_PROGRAM").style.display = "block";
            document.getElementById("STUD_LEVEL").style.display = "block";

            document.getElementById("STAFF_ID").style.display = "none";
            document.getElementById("STAFF_NAME").style.display = "none";

            document.getElementById("FACULTY_ID").style.display = "none";
            document.getElementById("FACULTY_NAME").style.display = "none";

        } else if (state == "staff") {
            document.getElementById("STUD_ID").style.display = "none";
            document.getElementById("STUD_NAME").style.display = "none";
            document.getElementById("STUD_PROGRAM").style.display = "none";
            document.getElementById("STUD_LEVEL").style.display = "none";

            document.getElementById("STAFF_ID").style.display = "block";
            document.getElementById("STAFF_NAME").style.display = "block";

            document.getElementById("FACULTY_ID").style.display = "none";
            document.getElementById("FACULTY_NAME").style.display = "none";

        } else if (state == "faculty") {
            document.getElementById("STUD_ID").style.display = "none";
            document.getElementById("STUD_NAME").style.display = "none";
            document.getElementById("STUD_PROGRAM").style.display = "none";
            document.getElementById("STUD_LEVEL").style.display = "none";

            document.getElementById("STAFF_ID").style.display = "none";
            document.getElementById("STAFF_NAME").style.display = "none";

            document.getElementById("FACULTY_ID").style.display = "block";
            document.getElementById("FACULTY_NAME").style.display = "block";

        } else {
            document.getElementById("STUD_ID").style.display = "none";
            document.getElementById("STUD_NAME").style.display = "none";
            document.getElementById("STUD_PROGRAM").style.display = "none";
            document.getElementById("STUD_LEVEL").style.display = "none";

            document.getElementById("STAFF_ID").style.display = "none";
            document.getElementById("STAFF_NAME").style.display = "none";

            document.getElementById("FACULTY_ID").style.display = "none";
            document.getElementById("FACULTY_NAME").style.display = "none";


        }
    }
</script>

<!-- <?php
        require 'connection.php';
        if (isset($_POST['filter'])) {
            $level = $_POST['level'];

            $query = mysqli_query($connection, "SELECT * FROM `users` WHERE `level`='$level'") or die(mysqli_error());
            while ($fetch = mysqli_fetch_array($query)) {
                echo "<tr><td>" . $fetch['last_name'] . "</td><td>" . $fetch['level'] . "</td></tr>";
            }
        } else if (isset($_POST['reset'])) {
            $query = mysqli_query($connection, "SELECT * FROM `users`") or die(mysqli_error());
            while ($fetch = mysqli_fetch_array($query)) {
                echo "<tr><td>" . $fetch['last_name'] . "</td><td>" . $fetch['level'] . "</td></tr>";
            }
        } else {
            $query = mysqli_query($connection, "SELECT * FROM `users`") or die(mysqli_error());
            while ($fetch = mysqli_fetch_array($query)) {
                echo "<tr><td>" . $fetch['last_name'] . "</td><td>" . $fetch['level'] . "</td></tr>";
            }
        }
        ?> -->