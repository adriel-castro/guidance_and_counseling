<?php

function build_calendar($month, $year)
{
    $mysqli = new mysqli('localhost', 'root', '', 'db_guidancems');
    // $stmt = $mysqli->prepare("select * from bookings where MONTH(date) = ? AND YEAR(date)=?");
    // $stmt->bind_param('ss', $month, $year);
    // $bookings = array();
    // if ($stmt->execute()) {
    //     $result = $stmt->get_result();
    //     if ($result->num_rows > 0) {
    //         while ($row = $result->fetch_assoc()) {
    //             $bookings[] = $row['date'];
    //         }
    //         $stmt->close();
    //     }
    // }

    // Create array containing abbreviations of days of week.
    $daysOfWeek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

    // What is the first day of the month in question?
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

    // How many days does this month contain?
    $numberDays = date('t', $firstDayOfMonth);

    // Retrieve some information about the first day of the
    // month in question.
    $dateComponents = getdate($firstDayOfMonth);

    // What is the name of the month in question?
    $monthName = $dateComponents['month'];

    // What is the index value (0-6) of the first day of the
    // month in question.
    $dayOfWeek = $dateComponents['wday'];

    // Create the table tag opener and day headers

    $datetoday = date('Y-m-d');
    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2><br>";

    $calendar .= "<a class='btn btn-xs btn-primary' href='?month=" . date('m', mktime(0, 0, 0, $month - 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month - 1, 1, $year)) . "'>Previous Month</a> ";

    $calendar .= " <a href='gc___dashboard.php' class='btn btn-xs btn-primary' data-month='" . date('m') . "' data-year='" . date('Y') . "'>Current Month</a> ";

    $calendar .= "<a href='?month=" . date('m', mktime(0, 0, 0, $month + 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month + 1, 1, $year)) . "' class='btn btn-xs btn-primary'>Next Month</a></center><br>";

    $calendar .= "<tr>";

    // Create the calendar headers
    foreach ($daysOfWeek as $day) {
        $calendar .= "<th  class='header'>$day</th>";
    }

    // Create the rest of the calendar
    // Initiate the day counter, starting with the 1st.
    $currentDay = 1;
    $calendar .= "</tr><tr>";

    // The variable $dayOfWeek is used to
    // ensure that the calendar
    // display consists of exactly 7 columns.

    if ($dayOfWeek > 0) {
        for ($k = 0; $k < $dayOfWeek; $k++) {
            $calendar .= "<td  class='empty'></td>";
        }
    }


    $month = str_pad($month, 2, "0", STR_PAD_LEFT);

    while ($currentDay <= $numberDays) {
        //Seventh column (Saturday) reached. Start a new row.
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }

        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        date_default_timezone_set('Asia/Manila');
        $date = "$year-$month-$currentDayRel";
        $dayname = strtolower(date('l', strtotime($date)));
        $eventNum = 0;
        $today = $date == date('Y-m-d') ? "today" : "";

        // this is for the no office hours in the calendar which is the saturday and sunday
        if ($dayname == 'saturday' || $dayname == 'sunday') {
            $calendar .= "<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>No Office Hours</button>";
        }
        // this is for the already passed date that is not available for booking
        elseif ($date < date('Y-m-d')) {
            $calendar .= "<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
        }
        // elseif (in_array($date, $bookings)) {
        //     $calendar .= "<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>Already Booked</button>";
        // } 
        else {

            // this is where in calendar mared na yung date if nakuha na lahat ng appointment timeslots
            $totalbookings = checkSlot($mysqli, $date);
            // yung 12 dito is yung total timeslots sa isang date
            if ($totalbookings == 18) {
                $calendar .= "<td class='$today'><h4>$currentDay</h4> <a href='#' class='btn btn-danger btn-xs'>All Booked</a>";
            } else {
                $availableslots = 18 - $totalbookings;
                $calendar .= "<td class='$today'><h4>$currentDay</h4> <a href='gc___calendar-appointment.php?date=" . $date . "' class='btn btn-success btn-xs'>Book</a> <small><i>$availableslots slots left</i></small>";
            }
        }


        $calendar .= "</td>";
        //Increment counters
        $currentDay++;
        $dayOfWeek++;
    }

    //Complete the row of the last week in month, if necessary
    if ($dayOfWeek != 7) {
        $remainingDays = 7 - $dayOfWeek;
        for ($l = 0; $l < $remainingDays; $l++) {
            $calendar .= "<td class='empty'></td>";
        }
    }

    $calendar .= "</tr>";
    $calendar .= "</table>";
    return $calendar;
}


function checkSlot($mysqli, $date)
{
    $stmt = $mysqli->prepare("select * from new_booking_tbl where date=?");
    $stmt->bind_param('s', $date);
    $totalbookings = 0;
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $totalbookings++;
            }
            $stmt->close();
        }
    }

    return $totalbookings;
}

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

<!-- <div class="modal-bootstrap shadow-inner res-mg-b-30">
    <h2>Header BG Color Modal</h2>
    <p>Bootstrap provides an easy way to create predefined alert messages. They support a number of use cases from user notification to completely custom content and feature a handful of helpful subcomponents, sizes, and more.</p>
    <div class="modal-area-button">
        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl">Primary</a>
        <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#InformationproModalhdbgcl">Information</a>
        <a class="Warning Warning-color mg-b-10" href="#" data-toggle="modal" data-target="#WarningModalhdbgcl">Warning</a>
        <a class="Danger danger-color" href="#" data-toggle="modal" data-target="#DangerModalhdbgcl">Danger</a>
    </div>
</div>
<div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">BG Color Header Modal</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <i class="educate-icon educate-checked modal-check-pro"></i>
                <h2>Awesome!</h2>
                <p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" href="#">Cancel</a>
                <a href="#">Process</a>
            </div>
        </div>
    </div>
</div> -->


<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Students</h5>
                        <!-- this if for the printing of total reg tertiary in the dashboard.php -->
                        <?php
                        require 'db_config.php';

                        $query = " SELECT STUD_ID FROM student_tbl ORDER BY STUD_ID ";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h2><span class="counter">' . $row . '</span>
                            <span class="tuition-fees">Students</span></h2>'
                        ?>


                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Staff</h5>
                        <!-- this if for the printing of total reg tertiary in the dashboard.php -->
                        <?php
                        require
                            'db_config.php';

                        $query = " SELECT STAFF_ID FROM staff_tbl ORDER BY STAFF_ID ";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h2><span class="counter">' . $row . '</span>
                            <span class="tuition-fees">Staff</span></h2>'
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Guidance Counselor</h5>
                        <!-- this if for the printing of total reg tertiary in the dashboard.php -->
                        <?php
                        require 'db_config.php';

                        $query = " SELECT GC_ID FROM gc_tbl ORDER BY GC_ID ";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h2><span class="counter">' . $row . '</span>
                            <span class="tuition-fees">Guidance Counselor</span></h2>'
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Number of Appointments</h5>
                        <!-- this if for the printing of total reg tertiary in the dashboard.php -->
                        <?php
                        require 'db_config.php';

                        $query = " SELECT APPOINTMENT_ID FROM appointment_tbl ORDER BY APPOINTMENT_ID ";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h2><span class="counter">' . $row . '</span>
                            <span class="tuition-fees">Appointments</span></h2>'
                        ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">


            <div class="calender-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="calender-inner">
                                <?php
                                $dateComponents = getdate();
                                if (isset($_GET['month']) && isset($_GET['year'])) {
                                    $month = $_GET['month'];
                                    $year = $_GET['year'];
                                } else {
                                    $month = $dateComponents['mon'];
                                    $year = $dateComponents['year'];
                                }
                                echo build_calendar($month, $year);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Total Visit</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success">950</span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Page Views</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        <li class="text-right graph-two-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-purple">913</span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Tele-Counseling</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right graph-three-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-info">570</span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs table-dis-n-pro tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Walk-in</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash4"></div>
                        </li>
                        <li class="text-right graph-four-ctn"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="text-danger"><span class="counter">50</span>%</span>
                        </li>
                    </ul>
                </div>


            </div> -->
        </div>




        <!-- <div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box res-mg-t-30 table-mg-t-pro-n">
                    <h3 class="box-title">Services avail by students</h3>
                    <ul class="country-state">
                        <li>
                            <h2><span class="counter">560</span></h2> <small>Information Service</small>
                            <div class="pull-right">70% <i class="fa fa-level-up text-danger ctn-ic-1"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger ctn-vs-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span class="sr-only">70% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">280</span></h2> <small>Career Services</small>
                            <div class="pull-right">35% <i class="fa fa-level-up text-success ctn-ic-2"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info ctn-vs-2" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">35% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">440</span></h2> <small>Guidance Services</small>
                            <div class="pull-right">55% <i class="fa fa-level-up text-success ctn-ic-3"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success ctn-vs-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:55%;"> <span class="sr-only">55% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">264</span></h2> <small>Individual inventory Services</small>
                            <div class="pull-right">33% <i class="fa fa-level-down text-success ctn-ic-4"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success ctn-vs-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:33%;"> <span class="sr-only">33% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">480</span></h2> <small>Counseling Services</small>
                            <div class="pull-right">60% <i class="fa fa-level-up text-success ctn-ic-5"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-inverse ctn-vs-5" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">60% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">224</span></h2> <small>Referral Services</small>
                            <div class="pull-right">28% <i class="fa fa-level-up text-success ctn-ic-5"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-inverse ctn-vs-5" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">28% Complete</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->








    </div>
</div>
</div>


<?php
include('includes/gc___scripts.php');
?>