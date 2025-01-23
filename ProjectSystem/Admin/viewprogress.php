<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Progress</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow: hidden;
        }

        header {
            background-color: #dbdbdb;
            color: #000000;
            padding: 15px;
            text-align: center;
            width:100%;
            height:50px;
            background-image: url('../images/header.jpg');
            background-size:cover;
            background-repeat: no-repeat; 
            
            
        }

        #container {
            display: flex;
            height: 100vh;
        }

        #content {
            background-repeat: no-repeat;
            background-size: 200px;
            background-position: center;
            flex-grow: 1;
            padding: 20px;
            height: 100%;
            overflow-x: auto;
            overflow-y: auto;
        }



        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        #table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table {

            width: auto;
            max-width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        #th {

            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
            border-radius: 0px;
            background-color: #2c3e50;
            color: #fff;
        }

        th {
            width: 30px;
            padding: 12px;
            border: 5px solid #f4f4f4;
            text-align: center;
            background-color: #ffffff;
            color: #fff;
            border-radius: 30px;
        }

        #sidebar {
            width: max-content;
            background-color: #2c3e50;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            border-top-right-radius: 20px;
        }

        #menu {
            flex-grow: 1;
            width: max-content;
            margin-left: 40px;
            margin-right: 20px;
        }

        #menu ul {
            padding-left: 0;
        }

        #menu li {
            position: relative;
        }

        #menu a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin-bottom: 5px;
            border-bottom: 1px solid #555;
            text-align: left;
        }

        #menu a:hover {
            background-color: #fff;
            color: black;
            cursor: pointer;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .nested-list {
            display: none;
            position: absolute;
            top: 0;
            left: 100%;
            background-color: #2c3e50;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            width: max-content;
            list-style-type: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        #menu li:hover .nested-list {
            display: block;
        }

        /* Highlight the current page */
        #menu .active {
            background-color: #555;
        }

        /* Style for the tooltip */
        .tooltip {
            position: absolute;
            display: none;
            background-color: rgba(44, 62, 80, 0.8);
            color: #fff;
            padding: 10px;
            border-radius: 10px;
            font-size: 14px;
            z-index: 9999;
        }
    </style>
    </style>
</head>

<body>
    <?php
    include "config.php";

    $year = $_GET['year'];
    $groupNo = $_GET['groupNo'];
    ?>
    <header>
    <h2> Welcome Admin -  View Progress</h2>
    </header>

    <div id="container">
        <div id="sidebar">
        <div id="menu">
                <ul>
                <li><a href="newhome.php?year=<?php echo $year; ?>"><i class="fas fa-home"></i><span style="font-size:22px;font-family: 'cursive';">&nbsp;Home</span></a></li>
                        <li><a><i class="fas fa-user-graduate"></i><span style="font-size:13px;"> Manage</span><span
                                style="font-size:22px;font-family: 'cursive';">&nbsp;Student</span></a>
                        <ul class="nested-list">
                            <li><a href="studmanagement.php?year=<?php echo $year; ?>"><i
                                        class="fa-solid fa-table-list"></i> View Student</a></li>
                            <li><a href="group.php?year=<?php echo $year; ?>"><i class="fas fa-user"></i> View newly
                                    registerd Student</a></li>
                        </ul>
                    </li>
                    <li><a href="groupmanagement.php?year=<?php echo $year; ?>"><i class="fas fa-users"></i><span
                                style="font-size:13px;"> Manage</span><span
                                style="font-size:22px;font-family: 'cursive';">&nbsp;Group</span></a></li>
                    <li><a href="menmanagement.php?year=<?php echo $year; ?>"><i
                                class="fas fa-chalkboard-teacher"></i><span style="font-size:13px;"> Manage</span><span
                                style="font-size:22px;font-family: 'cursive';">&nbsp;Mentor</a></li>
                    <li><a><i class="fas fa-stream"></i><span style="font-size:13px;"> Manage</span><span
                                style="font-size:22px;font-family: 'cursive';">&nbsp;Timeline</span></a>
                        <ul class="nested-list">
                            <li><a href="viewtimeline.php?year=<?php echo $year; ?>"><i
                                        class="fa-solid fa-table-list"></i> View Timeline</a></li>
                            <li><a href="addtimeline.php?year=<?php echo $year; ?>"><i class="fas fa-tasks"></i><span
                                        style="font-size:13px;"> Add</span><span
                                        style="font-size:22px;font-family: 'cursive';">&nbsp;Timeline</span></a></li>
                        </ul>
                    </li>
                    <li><a><i class="fas fa-stream"></i><span style="font-size:13px;"> Monitor</span><span
                                style="font-size:22px;font-family: 'cursive';">&nbsp;Progress</span></a>
                        <ul class="nested-list">
                            <li><a href="monitorprogress5.php?year=<?php echo $year; ?>"><i
                                        class="fas fa-tasks"></i><span style="font-size:13px;"> Semester </span><span
                                        style="font-size:22px;font-family: 'cursive';">&nbsp;5</span></a></li>
                            <li><a href="monitorprogress6.php?year=<?php echo $year; ?>"><i
                                        class="fas fa-tasks"></i><span style="font-size:13px;"> Semester </span><span
                                        style="font-size:22px;font-family: 'cursive';">&nbsp;6</span></a></li>
                        </ul>
                    </li>


                </ul>
            </div>
            <br><br><br><br><br><br>
            <div id="menu">
                <ul style="  list-style-type: none;">
                    <li><a href="../index.php?year=<?php echo $year; ?>">Log Out&nbsp;&nbsp;&nbsp;<i
                                class="fas fa-sign-out"></i></a></li>
                </ul>
            </div>
        </div>

        <div id="content">
            <?php
            $groupNo = $_GET['groupNo'];
            include 'config.php';
            $selectGroupQuery = "SELECT * FROM `grouptable` WHERE groupno = $groupNo";
            $groupsResult = mysqli_query($con, $selectGroupQuery);
            ?>

            <table id="table">
                <thead>
                    <tr>
                        <th id="th" style="width:0%">Group Number</th>
                        <th id="th">Group Member</th>
                        <th id="th">Project Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($group = mysqli_fetch_assoc($groupsResult)) {
                        $gr = $group['groupno'];
                        $selectStudentQuery = "SELECT * FROM `student` WHERE `groupno` = $gr ORDER BY `rollno` ASC";
                        $studentsResult = mysqli_query($con, $selectStudentQuery);
                        ?>
                        <tr>
                            <td>
                                <?php echo $group['groupno']; ?>
                            </td>
                            <td>
                                <?php while ($stud = mysqli_fetch_assoc($studentsResult)) { ?>
                                    <span style="font-family: -webkit-body; font-size: large;">
                                        <?php echo $stud['rollno'];
                                        echo ' - ';
                                        echo $stud['firstname'];
                                        echo ' ';
                                        echo $stud['lastname']; ?>
                                    </span>
                                    <?php echo '<br>';
                                } ?>
                            </td>
                            <td>
                                <?php if ($group['projecttitle']) {
                                    echo $group['projecttitle'];
                                } else { ?>
                                    <span style="color:red">
                                        <?php echo 'Not Decided yet'; ?>
                                    </span>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br>

            <?php
            $countQuery6 = "SELECT count(*) AS count FROM `timeline` WHERE `year` = $year AND `semester` = 6";
            $countResult6 = mysqli_query($con, $countQuery6);

            // Fetch the count from the result
            $countRow6 = mysqli_fetch_assoc($countResult6);
            $count6 = $countRow6['count'];

            $countQuery5 = "SELECT count(*) AS count FROM `timeline` WHERE `year` = $year AND `semester` = 5";
            $countResult5 = mysqli_query($con, $countQuery5);

            // Fetch the count from the result
            $countRow5 = mysqli_fetch_assoc($countResult5);
            $count5 = $countRow5['count'];

            $countQueryW5 = "SELECT count(*) AS count FROM `groupwork` WHERE `year` = $year AND `groupno` = $groupNo AND `semester`= 5";
            $countResultW5 = mysqli_query($con, $countQueryW5);

            // Fetch the count from the result
            $countRowW5 = mysqli_fetch_assoc($countResultW5);
            $countW5 = $countRowW5['count'];

            $countQueryW6 = "SELECT count(*) AS count FROM `groupwork` WHERE `year` = $year AND `groupno` = $groupNo AND `semester`= 6";
            $countResultW6 = mysqli_query($con, $countQueryW6);

            // Fetch the count from the result
            $countRowW6 = mysqli_fetch_assoc($countResultW6);
            $countW6 = $countRowW6['count'];

            if ($count5 > 0) {
                $per5 = ($countW5 / $count5) * 100;
            } else {
                $per5 = 0;
            }

            if ($count6 > 0) {
                $per6 = ($countW6 / $count6) * 100;
            } else {
                $per6 = 0;
            }
            ?>

            <div style="padding:20px;margin-bottom:200px;">
                <div>
                    <div style="float: right;">
                        <span>Note<i style="color:red;">*</i></span><br>
                        <span><i class="fa-solid fa-square" style="color:blue"></i> Current Week</span><br>
                        <span><i class="fa-solid fa-square" style="color:red"></i> Work in progress</span><br>
                        <span><i class="fa-solid fa-square" style="color:green"></i> Approved week</span><br>
                        <span><i class="fa-solid fa-square" style="color:orange"></i> Pending</span>
                    
                    </div>
                    <span style="color:purple;font-size:20px"><b>Group weekly progress</b></span> <br><br><hr>
                    <span style="font-size:20px;background-color:yellow"><u>Semester 5:</u></span> <br>

                    <div>
                        <table>
                            <tr>
                                <?php
                                $selectWeekQuery = "SELECT * FROM `timeline` where year=$year AND semester=5 ORDER BY weeknumber ASC";
                                $weeksResult = mysqli_query($con, $selectWeekQuery);
                                $Icount5 = $count5;
                                $IcountW5 = $countW5;
                                while ($week = mysqli_fetch_assoc($weeksResult)) {

                                    // Get the current date
                                    $currentDate = date('Y-m-d');

                                    // Start and end dates
                                    $startDate = $week['startdate'];
                                    $endDate = $week['enddate'];
                                    $wNumber = $week['weeknumber'];
                                    $id = $week['id'];
                                    $selectddateQuery = "SELECT 
            DATE_FORMAT(startdate, '%d/%m/%Y') AS formatted_startdate,
            DATE_FORMAT(enddate, '%d/%m/%Y') AS formatted_enddate
            FROM timeline where id=$id";
                                    $date = mysqli_query($con, $selectddateQuery);
                                    $row1 = mysqli_fetch_assoc($date);
                                    $sDate = $row1['formatted_startdate'];
                                    $eDate = $row1['formatted_enddate'];

                                    // Compare current date with start and end dates
                                    if ($currentDate >= $startDate && $currentDate <= $endDate) {
                                        $selectCoQuery = "SELECT * FROM `groupwork` where year=$year AND semester=5 AND groupno=$groupNo AND weeknumber=$wNumber ORDER BY weeknumber ASC";
                                        $CoResult = mysqli_query($con, $selectCoQuery);
                                        if (mysqli_num_rows($CoResult) > 0) {
                                            ?>
                                            <th style="background-color:green;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>"><?php echo $wNumber; ?></th><?php
                                        } else {
                                            ?><th style=" background-color:blue;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>">
                                                <?php echo $wNumber; ?>
                                            </th>
                                            <?php
                                        }
                                    } elseif ($currentDate > $endDate) {
                                        $selectCoQuery = "SELECT * FROM `groupwork` where year=$year AND semester=5 AND groupno=$groupNo AND weeknumber=$wNumber ORDER BY weeknumber ASC";
                                        $CoResult = mysqli_query($con, $selectCoQuery);
                                        if (mysqli_num_rows($CoResult) > 0) {
                                            ?>
                                            <th style="background-color:green;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>">
                                                <?php echo $wNumber; ?>
                                            </th>
                                            <?php
                                        } else {
                                            ?>
                                            <th style="background-color:red;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>">
                                                <?php echo $wNumber; ?>
                                            </th>
                                            <?php
                                        }
                                    } else {
                                        $selectCoQuery = "SELECT * FROM `groupwork` where year=$year AND semester=5 AND groupno=$groupNo AND weeknumber=$wNumber ORDER BY weeknumber ASC";
                                        $CoResult = mysqli_query($con, $selectCoQuery);
                                        if (mysqli_num_rows($CoResult) > 0) {
                                            ?>
                                            <th style="background-color:green;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>">
                                                <?php echo $wNumber; ?>
                                            </th>
                                            <?php
                                        } else {
                                            ?>
                                            <th style="background-color:orange;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>">
                                                <?php echo $wNumber; ?>
                                            </th>
                                            <?php
                                        }
                                    }
                                } ?>
                            </tr>
                        </table>

                        <!-- Tooltip element -->
                        <div class="tooltip" id="tooltip"></div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const weekThs = document.querySelectorAll('.week-th');

                                weekThs.forEach(weekTh => {
                                    weekTh.addEventListener('mouseover', function () {
                                        const tooltip = document.getElementById('tooltip');
                                        const week = this.getAttribute('data-week');
                                        const startDate = this.getAttribute('data-startdate');
                                        const endDate = this.getAttribute('data-enddate');
                                        const activityPlan = this.getAttribute('data-activityplan');

                                        // Set tooltip content
                                        tooltip.innerHTML = `
                    <strong>Week ${week} Details:</strong><br>
                    Start Date: ${startDate}<br>
                    End Date: ${endDate}<br>
                    Activity Plan: ${activityPlan}
                `;

                                        // Position the tooltip
                                        const rect = this.getBoundingClientRect();
                                        tooltip.style.left = rect.left + 'px';
                                        tooltip.style.top = (rect.top + window.scrollY + rect.height) + 'px';

                                        // Show tooltip
                                        tooltip.style.display = 'block';
                                    });

                                    weekTh.addEventListener('mouseout', function () {
                                        // Hide tooltip
                                        const tooltip = document.getElementById('tooltip');
                                        tooltip.style.display = 'none';
                                    });
                                });
                            });
                        </script>

                    </div><hr><hr>
                    <span style="font-size:20px;background-color:yellow"><u>Semester 6:</u></span> <br>
                    <div>
                        <table>
                            <tr>
                                <?php
                                $selectWeekQuery = "SELECT * FROM `timeline` where year=$year AND semester=6 ORDER BY weeknumber ASC";
                                $weeksResult = mysqli_query($con, $selectWeekQuery);
                                $Icount5 = $count5;
                                $IcountW5 = $countW5;
                                while ($week = mysqli_fetch_assoc($weeksResult)) {

                                    // Get the current date
                                    $currentDate = date('Y-m-d');

                                    // Start and end dates
                                    $startDate = $week['startdate'];
                                    $endDate = $week['enddate'];
                                    $wNumber = $week['weeknumber'];
                                    $id = $week['id'];
                                    $selectddateQuery = "SELECT 
            DATE_FORMAT(startdate, '%d/%m/%Y') AS formatted_startdate,
            DATE_FORMAT(enddate, '%d/%m/%Y') AS formatted_enddate
            FROM timeline where id=$id";
                                    $date = mysqli_query($con, $selectddateQuery);
                                    $row1 = mysqli_fetch_assoc($date);
                                    $sDate = $row1['formatted_startdate'];
                                    $eDate = $row1['formatted_enddate'];

                                    // Compare current date with start and end dates
                                    if ($currentDate >= $startDate && $currentDate <= $endDate) {
                                        $selectCoQuery = "SELECT * FROM `groupwork` where year=$year AND semester=6 AND groupno=$groupNo AND weeknumber=$wNumber ORDER BY weeknumber ASC";
                                        $CoResult = mysqli_query($con, $selectCoQuery);
                                        if (mysqli_num_rows($CoResult) > 0) {
                                            ?>
                                            <th style="background-color:green;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>""><?php echo $wNumber; ?></th><?php
                                        } else {
                                            ?><th style=" background-color:blue;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>">
                                                <?php echo $wNumber; ?>
                                            </th>
                                            <?php
                                        }
                                    } elseif ($currentDate > $endDate) {
                                        $selectCoQuery = "SELECT * FROM `groupwork` where year=$year AND semester=6 AND groupno=$groupNo AND weeknumber=$wNumber ORDER BY weeknumber ASC";                                        $CoResult = mysqli_query($con, $selectCoQuery);
                                        if (mysqli_num_rows($CoResult) > 0) {
                                            ?>
                                            <th style="background-color:green;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>">
                                                <?php echo $wNumber; ?>
                                            </th>
                                            <?php
                                        } else {
                                            ?>
                                            <th style="background-color:red;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>">
                                                <?php echo $wNumber; ?>
                                            </th>
                                            <?php
                                        }
                                    } else {
                                        $selectCoQuery = "SELECT * FROM `groupwork` where year=$year AND semester=6 AND groupno=$groupNo AND weeknumber=$wNumber ORDER BY weeknumber ASC";
                                        $CoResult = mysqli_query($con, $selectCoQuery);
                                        if (mysqli_num_rows($CoResult) > 0) {
                                            ?>
                                            <th style="background-color:green;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>">
                                                <?php echo $wNumber; ?>
                                            </th>
                                            <?php
                                        } else {
                                            ?>
                                            <th style="background-color:orange;" class="week-th" data-week="<?php echo $wNumber; ?>"
                                                data-details="Week <?php echo $wNumber; ?> Details"
                                                data-startdate="<?php echo $sDate; ?>" data-enddate="<?php echo $eDate; ?>"
                                                data-activityplan="<?php echo $week['activityplan']; ?>">
                                                <?php echo $wNumber; ?>
                                            </th>
                                            <?php
                                        }
                                    }
                                } ?>
                            </tr>
                        </table>

                        <!-- Tooltip element -->
                        <div class="tooltip" id="tooltip"></div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const weekThs = document.querySelectorAll('.week-th');

                                weekThs.forEach(weekTh => {
                                    weekTh.addEventListener('mouseover', function () {
                                        const tooltip = document.getElementById('tooltip');
                                        const week = this.getAttribute('data-week');
                                        const startDate = this.getAttribute('data-startdate');
                                        const endDate = this.getAttribute('data-enddate');
                                        const activityPlan = this.getAttribute('data-activityplan');

                                        // Set tooltip content
                                        tooltip.innerHTML = `
                    <strong>Week ${week} Details:</strong><br>
                    Start Date: ${startDate}<br>
                    End Date: ${endDate}<br>
                    Activity Plan: ${activityPlan}
                `;

                                        // Position the tooltip
                                        const rect = this.getBoundingClientRect();
                                        tooltip.style.left = rect.left + 'px';
                                        tooltip.style.top = (rect.top + window.scrollY + rect.height) + 'px';

                                        // Show tooltip
                                        tooltip.style.display = 'block';
                                    });

                                    weekTh.addEventListener('mouseout', function () {
                                        // Hide tooltip
                                        const tooltip = document.getElementById('tooltip');
                                        tooltip.style.display = 'none';
                                    });
                                });
                            });
                        </script>

                    </div><hr>
                    <br>
                </div>
              
            </div>
        </div>
    </div>
</body>

</html>