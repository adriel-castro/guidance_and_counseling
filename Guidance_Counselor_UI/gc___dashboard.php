<!-- <?php
        session_start();

        include_once("../connections/connection.php");

        if (!isset($_SESSION['UserEmail'])) {

            echo "<script>window.open('../homepage___login.php','_self')</script>";
        } else {

            $con = connection();

            function build_calendar($month, $year)
            {
                $con = connection();

                $daysOfWeek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

                $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

                $numberDays = date('t', $firstDayOfMonth);

                $dateComponents = getdate($firstDayOfMonth);

                $monthName = $dateComponents['month'];

                $dayOfWeek = $dateComponents['wday'];

                $datetoday = date('Y-m-d');
                $calendar = "<table class='table table-bordered'>";
                $calendar .= "<center><h2>$monthName $year</h2><br>";

                $calendar .= "<a class='btn btn-xs btn-primary' href='?month=" . date('m', mktime(0, 0, 0, $month - 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month - 1, 1, $year)) . "'>Previous Month</a> ";

                $calendar .= " <a href='gc___dashboard.php' class='btn btn-xs btn-primary' data-month='" . date('m') . "' data-year='" . date('Y') . "'>Current Month</a> ";

                $calendar .= "<a href='?month=" . date('m', mktime(0, 0, 0, $month + 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month + 1, 1, $year)) . "' class='btn btn-xs btn-primary'>Next Month</a></center><br>";

                $calendar .= "<tr>";

                foreach ($daysOfWeek as $day) {
                    $calendar .= "<th  class='header'>$day</th>";
                }

                $currentDay = 1;
                $calendar .= "</tr><tr>";

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
                        $totalbookings = checkSlot($con, $date);
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


            function checkSlot($con, $date)
            {
                $stmt = $con->prepare("select * from appointments where date=?");
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

        ?> -->

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

<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>SHS</h5>

                        <!-- <?php
                                // $query = "SELECT id_number FROM users WHERE position = 'student' || 'Student' ORDER BY id_number";
                                // $query_run = mysqli_query($con, $query);
                                // $row = mysqli_num_rows($query_run);
                                // echo '<h2><span class="counter">' . $row . '</span>
                                // <span class="tuition-fees">SHS Students</span></h2>'
                                // 
                                ?>  -->

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Tertiary</h5>

                        <!-- <?php
                                $query = "SELECT id_number FROM users WHERE position = 'staff' || 'Staff' ORDER BY id_number";
                                $query_run = mysqli_query($con, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<h2><span class="counter">' . $row . '</span>
                                    <span class="tuition-fees">Tertiary Student</span></h2>'
                                ?>  -->

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Staff</h5>

                        <?php
                        $query = "SELECT id_number FROM users WHERE position = 'staff' || 'Staff' ORDER BY id_number";
                        $query_run = mysqli_query($con, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h2><span class="counter">' . $row . '</span>
                            <span class="tuition-fees">Staff</span></h2>'
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Number of Appointments</h5>

                        <?php
                        $query = "SELECT id FROM appointments ORDER BY id";
                        $query_run = mysqli_query($con, $query);
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
                        <!-- <div class="col-lg-12">
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
                            </div> -->


                        <div class="col-lg-12">
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


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php
            include('includes/gc___scripts.php');
?>

<?php } ?>