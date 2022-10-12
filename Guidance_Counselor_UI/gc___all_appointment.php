<?php session_start(); ?>
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
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="./css/datapicker/datepicker3.css">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        input[type="radio"] {
            margin-left: 10px 0;
        }
    </style>
</head>

<body>

    <?php include('includes/gc___left-menu-area.php') ?>
    <?php include('includes/gc___top-menu-area.php') ?>
    <?php include('includes/gc___mobile_menu.php')  ?>


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
                                    <li><span class="bread-blod">All Appointment Schedule</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------------- THIS IS THE MODAL FORM FOR ADDING APPOINTMENT  ---------------------------------------------->
    <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="ADD_APPOINTMENT" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-1">
                        <h4 class="modal-title">Add New Appointment</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>

                    <form action="thecode.php">
                        <div class="modal-body">

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">User Type</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="form-select-list">
                                            <select id="mySelect" class="form-control custom-select-value" name="account" onchange="changeDropdown(this.value);">
                                                <option value="student">Student</option>
                                                <option value="staff">Staff</option>
                                                <option value="faculty">Faculty</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner" id="STUD_ID">
                                <div class="row">
                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">Student ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search Student">
                                            <div class="input-group-btn">
                                                <button tabindex="-1" class="btn btn-primary btn-md" type="button" data-toggle="modal" data-target="#SEARCH_STUDENT">Search</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner" id="STUD_NAME">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Student Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                        <input type="text" disabled class="form-control" placeholder="Enter Student Name" />
                                    </div>

                                </div>
                            </div>
                            <div class="form-group-inner" id="STUD_PROGRAM">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Program</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" disabled class="form-control" placeholder="Student Program" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner" id="STUD_LEVEL">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Level</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" disabled class="form-control" placeholder="Student Level" />
                                    </div>
                                </div>
                            </div>


                            <div class="form-group-inner" id="STAFF_ID" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Staff ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Enter Staff ID" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner" id="STAFF_NAME" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Staff Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" disabled class="form-control" placeholder="Enter Staff Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner" id="STAFF_POSITION" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Position</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" disabled class="form-control" placeholder="Staff Position" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner" id="FACULTY_ID" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Faculty ID</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Enter Faculty ID" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner" id="FACULTY_NAME" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Faculty Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" disabled class="form-control" placeholder="Faculty Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner" id="FACULTY_POSITION" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Position</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" disabled class="form-control" placeholder="Faculty Position" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Subject</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Enter Appointment Subject" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner data-custon-pick" id="data_2">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
                                        <label class="login2 pull-right" style="font-weight: bold;">Date</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="input-group date ">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" value="XX/XX/XXXX">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Type</span></label>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-9 col-xs-9">
                                        <div class=" bt-df-checkbox">
                                            <label for="APPOINT_OP1" style="margin-right: 15px;">
                                                <input class="pull-left radio-checked" type="radio" value="Walk-in" id="APPOINT_OP1" name="appoint1">
                                                Walk-In
                                            </label>

                                            <label for="APPOINT_OP2">
                                                <input class="pull-left radio-checked" type="radio" value="Online" id="APPOINT_OP2" name="appoint2">
                                                Online
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="login2 pull-right">Information</label>
                                    </div>
                                    <div class="form-group res-mg-t-15 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <textarea name="description" placeholder="Description of Appointment"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="save_excel_data" class="btn btn-primary btn-md">Add</button>
                    </div>
                </div>
            </div>
        </div>

    </div> -->

    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1> Appointment<span class="table-project-n"> Schedule</span> Table</h1>
                            </div>

                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <!-- <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select> -->

                                    <div class="card-header py-3">
                                        <h5 class="m-0 font-weight-bold text-primary">
                                            <!-- Guidance Counselor -->
                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ADD_APPOINTMENT">
                                                Add New Appointment
                                            </button> -->

                                        </h5>
                                    </div>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="appoint_stud_name">Student Name</th>
                                            <th data-field="appoint_reason">Appointment Reason</th>
                                            <th data-field="appoint_ref_reason">Referral Reason</th>
                                            <th data-field="appoint_concern">Concern</th>
                                            <th data-field="appoint_date">Date</th>
                                            <th data-field="appoint_time">Time</th>
                                            <th data-field="appoint_type">Type</th>
                                            <th data-field="appoint_link">Meeting Link</th>
                                            <th data-field="appoint_status">Status</th>
                                            <!-- <th data-field="appoint_edit">Edit</th> -->
                                            <th data-field="appoint_cancel">Cancel</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>Abigail Nazal</td>
                                            <td>Bullying</td>
                                            <td>Bullying</td>
                                            <td>Concern</td>
                                            <td>September 5, 2022</td>
                                            <td>5:00pm</td>
                                            <td>Walk-in</td>
                                            <td></td>
                                            <td>
                                                <button class="pd-setting " style="background-color: green; color:white;">Approved</button>
                                            </td>

                                            <!-- <td>
                                                <form action="gc___EDIT.php" method="post">
                                                    <input type="hidden" name="edit_username_id" value="<?php echo $row['GC_USER_ID']; ?>">
                                                    <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                                </form>
                                            </td> -->
                                            <td>
                                                <form action="thecode.php" method="post">
                                                    <input type="hidden" name="delete_username_id" value="<?php echo $row['GC_USER_ID']; ?>">
                                                    <button type="submit" name="cancel_btn" class="btn btn-danger">Cancel</button>
                                                </form>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>Abigail Nazal</td>
                                            <td>Bullying</td>
                                            <td>Bullying</td>
                                            <td>Concern</td>
                                            <td>September 5, 2022</td>
                                            <td>5:00pm</td>
                                            <td>Online-Meeting</td>
                                            <td>https://meetinglink101.com</td>
                                            <td>
                                                <button class="pd-setting " style="background-color: red; color:white;">Cancelled</button>
                                            </td>

                                            <!-- <td>
                                                <form action="gc___EDIT.php" method="post">
                                                    <input type="hidden" name="edit_username_id" value="<?php echo $row['GC_USER_ID']; ?>">
                                                    <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                                </form>
                                            </td> -->
                                            <td>
                                                <form action="thecode.php" method="post">
                                                    <input type="hidden" name="delete_username_id" value="<?php echo $row['GC_USER_ID']; ?>">
                                                    <button type="submit" name="delete_btn" class="btn btn-danger">Cancel</button>
                                                </form>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>Abigail Nazal</td>
                                            <td>Bullying</td>
                                            <td>Bullying</td>
                                            <td>Concern</td>
                                            <td>September 5, 2022</td>
                                            <td>5:00pm</td>
                                            <td>Walk-in</td>
                                            <td></td>
                                            <td>
                                                <button class="pd-setting " style="background-color: blue; color:white;">Pending</button>
                                                <div class="form-group-inner">
                                                    <div class="row">

                                                        <!-- <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select id="mySelect" class="form-control custom-select-value" name="account" onchange="changeDropdown(this.value);">
                                                                    <option value="student">Ongoing</option>
                                                                    <option value="staff">Staff</option>
                                                                    <option value="faculty">Faculty</option>
                                                                </select>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- <td>
                                                <form action="gc___EDIT.php" method="post">
                                                    <input type="hidden" name="edit_username_id" value="<?php echo $row['GC_USER_ID']; ?>">
                                                    <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                                </form>
                                            </td> -->
                                            <td>
                                                <form action="thecode.php" method="post">
                                                    <input type="hidden" name="delete_username_id" value="<?php echo $row['GC_USER_ID']; ?>">
                                                    <button type="submit" name="delete_btn" class="btn btn-danger">Cancel</button>
                                                </form>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->

    </div>

    <?php
    include('includes/gc___scripts.php');
    ?>

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