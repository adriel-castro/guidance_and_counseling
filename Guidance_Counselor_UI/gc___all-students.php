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
  <link rel="shortcut icon" type="image/x-icon" href="img/sti_angeles_logo.ico">
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

  <?php include('includes/gc___left-menu-area.php') ?>
  <?php include('includes/gc___top-menu-area.php') ?>
  <?php include('includes/gc___mobile_menu.php')  ?>


  <div class="breadcome-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcome-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="breadcome-heading">
                  <!-- i remove the search bar because there is already a search bar in the table area -->
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul class="breadcome-menu">
                  <li><a href="gc___dashboard.php">Home</a> <span class="bread-slash">/</span>
                  </li>
                  <li><span class="bread-blod">All Students</span>
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

  <!----------------------------------------- THIS IS THE MODAL FORM OF ADDING STUDENT MANUALLY ---------------------------------------------->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div id="ADD_STUDENT_MANUAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title">Add New Student </h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>

          <form action="thecodestud.php" method="POST">
            <div class="modal-body">
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Student ID</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_id" class="form-control" placeholder="Enter Student ID" />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">First Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_fname" class="form-control" placeholder="Enter First Name" />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Middle Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_mname" class="form-control" placeholder="Enter Middle Name" />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Last Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_lname" class="form-control" placeholder="Enter Last Name" />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Address</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_address" class="form-control" placeholder="Enter Address" />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Contact No.</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_contact" class="form-control" placeholder="Enter Contact Number" />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Program</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_program" class="form-control" placeholder="Enter Program" />
                  </div>
                </div>
              </div>

              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Level</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_level" class="form-control" placeholder="Enter Level" />
                  </div>
                </div>
              </div>
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">EMAIL</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_email" class="form-control" placeholder="Set Email" />
                  </div>
                </div>
              </div>
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right">Password</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="stud_pass" class="form-control" placeholder="set password" />
                  </div>
                </div>
              </div>

              <!----------------- input type as student for login validation --------------------->
              <input type="hidden" name="usertype" value="Student">

            
          

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
            <button type="submit" name="register_student-btn" class="btn btn-primary btn-md">Save</button>
          </div>
        </div>  
        </form>

        </div>
      </div>
    </div>

  </div>




  <!----------------------------------------- THIS IS THE MODAL FORM OF ADDING STUDENT USING EXCEL FILE ---------------------------------------------->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div id="ADD_STUDENT_EXCEL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title"> Import Excel File to Add Students </h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>

          <form action="excelupload.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

              <div class="form-group-inner">
                <div class="row">
              
                  <div class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
                    <input type="file" name="import_file" class="form-control">
                  </div>
                </div>
              </div>

            </div>
          </form>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
            <button type="submit" name="save_excel_data" class="btn btn-primary btn-md">Upload</button>
          </div>
        </div>
      </div>
    </div>

  </div>


  

  <div class="modal fade" id="addstudentprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="thecodestud.php" method="POST">

          <div class="modal-body">

            <div class="form-group">
              <label> Student ID </label>
              <input type="text" name="stud_id" class="form-control" placeholder="Enter Student ID">
            </div>

            <div class="form-group">
              <label> First Name </label>
              <input type="text" name="stud_fname" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group">
              <label> Middle Name </label>
              <input type="text" name="stud_mname" class="form-control" placeholder="Enter Middle Name">
            </div>
            <div class="form-group">
              <label> Last Name </label>
              <input type="text" name="stud_lname" class="form-control" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
              <label> Address </label>
              <input type="text" name="stud_address" class="form-control" placeholder="Enter Address">
            </div>
            <div class="form-group">
              <label> Contact Number </label>
              <input type="text" name="stud_contact" class="form-control" placeholder="Enter Contact Number">
            </div>
            <div class="form-group">
              <label> Program </label>
              <input type="text" name="stud_program" class="form-control" placeholder="Enter Program">
            </div>
            <div class="form-group">
              <label> Level </label>
              <input type="text" name="stud_level" class="form-control" placeholder="Enter Level">
            </div> -->

    <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
              <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div> -->
    <input type="hidden" name="usertype" value="student">


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="register_student-btn" class="btn btn-primary">Save</button>
          </div>
        </form>

      </div>
    </div>
  </div> -->]


  <!-- Static Table Start -->

  <div class="data-table-area mg-b-15">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="sparkline13-list">
            <div class="sparkline13-hd">
              <div class="main-sparkline13-hd">
                <h1>All<span class="table-project-n"> Students</span> Table</h1>
              </div>
            </div>
            <div class="sparkline13-graph">

              <div class="datatable-dashv1-list custom-datatable-overright">

                <div id="toolbar">
                  <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">

                      <!-- <form action="excelupload.php" method="POST" enctype="multipart/form-data"> -->

                        <!-- <input type="file" name="import_file"><br> -->
                        <button type="button" class="btn btn-custon-four btn-primary btn-md" data-toggle="modal" data-target="#ADD_STUDENT_EXCEL">Import File</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ADD_STUDENT_MANUAL">
                          Add New
                        </button>
                      <!-- </form> -->

                    </h5>
                  </div>

                </div>

                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                  <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Address</th>
                      <th>Contact Number</th>
                      <th>Program</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'db_web');

                    $query = "SELECT * FROM student_tbl";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                      foreach ($query_run as $row) {
                    ?>

                        <tr>
                          <td><?= $row['STUD_ID'] ?></td>
                          <td><?= $row['STUD_LNAME'] ?></td>
                          <td><?= $row['STUD_FNAME'] ?></td>
                          <td><?= $row['STUD_MNAME'] ?></td>
                          <td><?= $row['STUD_ADDRESS'] ?></td>
                          <td><?= $row['STUD_CONTACT'] ?></td>
                          <td><?= $row['STUD_PROGRAM'] ?></td>
                          <td><?= $row['STUD_LEVEL'] ?></td>
                          <td>
                            <a href="gc___student_profile.php">
                              <button type="submit" name="view_profile_btn" class="btn btn-primary">View</button>
                            </a>
                          </td>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Static Table End -->



  <!-- jquery
		============================================ -->
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- sticky JS
		============================================ -->
  <script src="js/jquery.sticky.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="js/metisMenu/metisMenu.min.js"></script>
  <script src="js/metisMenu/metisMenu-active.js"></script>
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
  <!-- tab JS
		============================================ -->
  <script src="js/tab.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="js/main.js"></script>
  <!-- tawk chat JS
		============================================ -->
  <script src="js/tawk-chat.js"></script>


  <?php include('includes/gc___footer.php') ?>

</body>



</html>