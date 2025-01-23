<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Timeline Management System - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
    /* Your existing styles... */
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
        width: 100%;
        height: 50px;
        background-image: url('../images/header.jpg');
        background-size: cover;
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
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        margin-bottom: 150px;
    }

    #table1 tr:nth-child(even) {
        background-color: #f0efff;
    }

    th,
    td {
        padding-top: 12px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 12px;
        border: 3px solid #c8cad1;
        text-align: center;
    }

    th {
        background-color: #2c3e50;
        color: #fff;
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

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        font-size: 15px;
        background-color: #dddddd;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 50px;
        transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ffd180;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }

    .form-group {
        margin-bottom: 15px;
        display: flex;
    }

    label {
        width: 200px;
        display: block;
        margin-bottom: 5px;
        color: #666;
    }

    input[type="text"],
    textarea,
    input[type="password"],
    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        color: #333;

    }

    input[type="date"] {
        width: auto;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        color: #333;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .container {
        width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<?php
include "config.php";
$year = $_GET['year']; 
$semester=$_GET['semester'];
?>

<body>
    <header>
        <h2>Welcome Admin - Timeline Management</h2>
    </header>

    <div id="container">
        <div id="sidebar">
            <div id="menu">
                <ul>
                    <li><a href="newhome.php?year=<?php echo $year; ?>"><i class="fas fa-home"></i><span
                                style="font-size:22px;font-family: 'cursive';">&nbsp;Home</span></a></li>
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

        <?php

            // Step 2: Retrieve records from the timeline table
            $query = "SELECT weeknumber FROM timeline WHERE semester = $semester AND year = $year";
            $result = $con->query($query);

            // Step 3: Check if any records are found
            if ($result->num_rows > 0) {
                // Records found, iterate through to find the first missing week number
                $existingWeeks = array();
                while ($row = $result->fetch_assoc()) {
                    $existingWeeks[] = $row['weeknumber'];
                }

                // Find the first missing week number
                $missingWeek = null;
                for ($i = 1; $i <= 100; $i++) {
                    if (!in_array($i, $existingWeeks)) {
                        $missingWeek = $i;
                        break;
                    }
                }
            } else {
                // No records found, set missingWeek to 1
                $missingWeek = 1;
            }

            // Step 4: Print or return the result
            // echo "The first missing week number for semester 5 and year 2023 is: " . $missingWeek;
            // Close the database connection
            ?>




        <div id="content">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">Add Activity Planned</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Add Weekly Date for activty plan</button>

            </div>

            <!-- Tab content -->
            <div id="London" class="tabcontent">
                <h2 style="text-align:center;font-size:30px;">Semester <span
                        style="text-align:center;font-size:40px;color:red;background-color:yellow">
                        <?php echo $_GET['semester']; ?>
                    </span></h2>

                <div class="container">
                    <form method="POST">
                        <div class="form-group">
                            <label for="weekNumber">Week Number:</label>
                            <input type="text" name="weeknumber" required="" value="<?php echo $missingWeek; ?>"
                                readonly style="cursor:not-allowed;"><br>
                        </div>
                        <!-- <div class="form-group">
                            <label for="startdate">Start Date:</label>
                            <input type="date" id="checkin-date" name="startdate" oninput="calculateCheckoutDate()"
                                required><br>
                        </div>
                        <div class="form-group">
                            <label for="enddate">End Date:</label>
                            <input type="date" id="checkout_date" name="enddate" required><br>
                        </div> -->

                        <div class="form-group">
                            <label for="activity">Activity</label>
                            <textarea name="activity" placeholder="Message" required="" rows="6"></textarea>

                        </div>
                        <input type="hidden" name="year" value="<?php echo $year; ?>">
                        <input type="hidden" name="semester" value="<?php echo $semester; ?>">
                        <div class="form-group">
                            <input type="submit" name="submit" value="Add">

                        </div>
                    </form>
                </div>
                <?php
                include "config.php";

                if (isset($_POST['submit'])) {

                    extract($_POST);
                    $add=mysqli_query($con ,"insert into timeline(weeknumber,activityplan,semester,year) values('$weeknumber','$activity','$semester','$year')")or die(mysqli_error($con));
                    if ($add) {

                        echo "<script>;";
                        echo "window.alert('Activity Added successfully....!');";
                        echo "window.location.href = 'add_timeline.php?semester=$semester&year=$year';";
                        echo "</script>";

                    } else {
                        echo "<script>;";
                        echo "window.alert('Faild to add Activity....!');";
                        echo "window.location.href = 'add_timeline.php?semester=$semester&year=$year';";
                        echo "</script>";

                    }
                }

                ?>
                <br><br>
                <span>Weekly activity plan will display below...</span>
                <table id="table1">
                    <thead>
                        <tr>
                            <th style="width:0">Sr.No.</th>
                            <th style="width:0">Week Number</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Activity Planned</th>
                            <th style="width:0">Delete</th>
                        </tr>
                    </thead>
                    <?php $selectWeekQuery = "SELECT * FROM `timeline` where year=$year AND semester=$semester ORDER BY weeknumber ASC";
                    $weeksResult = mysqli_query($con, $selectWeekQuery);
                  $i=1;
                                ?>

                    <tbody>
                        <?php   while ($week = mysqli_fetch_assoc($weeksResult)) { ?>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <?php echo $week['weeknumber']; ?>
                        </td>
                        <td>
                            <?php if(($week['startdate'])=='0000-00-00')
                                        {
                                            echo "Not Set";
                                        } 
                                        else{
                                            echo $week['startdate'];
                                        }
                                        ?>
                        </td>
                        <td>
                            <?php if(($week['enddate'])=='0000-00-00')
                                        {
                                            echo "Not Set";
                                        } 
                                        else{
                                            echo $week['enddate'];
                                        }
                                        ?>
                        </td>
                        <td>
                            <?php echo $week['activityplan']; ?>
                        </td>
                        <td><a href="timelinedelete.php?timeId=<?php echo $week['id']; ?>&year=<?php echo $year ?>&semester=<?php echo $semester ?>">Delete</a><br>
                        </td>
                    </tbody>
                    <?php
                                $i = $i + 1;
                            }?>

                </table>




            </div>

            <div id="Paris" class="tabcontent">
                <h2 style="text-align:center;font-size:30px;">Semester <span
                        style="text-align:center;font-size:40px;color:red;background-color:yellow">
                        <?php echo $_GET['semester']; ?>
                    </span></h2>
                <table id="table1">
                    <thead>
                        <tr>
                            <th style="width:0">Sr.No.</th>
                            <th style="width:0">Week Number</th>
                            <th>Activity Planned</th>
                            <th>Start Date</th>
                            <th>End Date</th>


                        </tr>
                    </thead>
                    <?php $selectWeekQuery = "SELECT * FROM `timeline` where year=$year AND semester=$semester ORDER BY weeknumber ASC";
                        
                    $weeksResult = mysqli_query($con, $selectWeekQuery);
                  $i=1;
                  $z=0;
                                ?>

                    <tbody>
                        <?php   while ($week = mysqli_fetch_assoc($weeksResult)) {
                               $id= $week['id'];
                                     $selectddateQuery = "SELECT 
                                     DATE_FORMAT(startdate, '%d/%m/%Y') AS formatted_startdate,
                                     DATE_FORMAT(enddate, '%d/%m/%Y') AS formatted_enddate
                                     FROM timeline where id=$id";
                                     $date = mysqli_query($con, $selectddateQuery);
                                     $row1 = mysqli_fetch_assoc($date)
                                ?>
                        <!-- Inside the while loop where you display week details -->
                        <form method="POST">
                            <td>
                                <?php echo $i; ?>
                            </td>
                            <td>
                                <?php echo $week['weeknumber']; ?>
                            </td>
                            <td style="text-align:left">
                                <?php echo $week['activityplan']; ?>
                            </td>
                            <td>
                                <?php if ($week['startdate'] == '0000-00-00') : ?>
                                <input type="date" id="checkin-date" name="start_date[<?php echo $z; ?>]"
                                    oninput="calculateCheckoutDate()">
                                <?php else : ?>
                                <?php echo $row1['formatted_startdate']; ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($week['enddate'] == '0000-00-00') : ?>
                                <input type="date" id="checkout_date" name="end_date[<?php echo $z; ?>]" width="30px">
                                <?php else : ?>
                                <?php echo $row1['formatted_enddate']; ?>
                                <?php endif; ?>
                            </td>
                            <!-- Add hidden input fields to store week number and activity plan -->
                            <input type="hidden" name="week_number[<?php echo $z; ?>]"
                                value="<?php echo $week['weeknumber']; ?>">
                            <input type="hidden" name="activity_plan[<?php echo $z; ?>]"
                                value="<?php echo $week['activityplan']; ?>">
                            <input type="hidden" name="semester[<?php echo $z; ?>]"
                                value="<?php echo $week['semester']; ?>">
                            <input type="hidden" name="year[<?php echo $z; ?>]" value="<?php echo $week['year']; ?>">
                            <!-- Add a submit button for each activity -->
                            <td>
                                <?php if ($week['enddate'] == '0000-00-00') : ?>
                                <input type="submit" name="submit_dates[<?php echo $z; ?>]" value="Save">
                                <?php else : ?>
                               <a href="deletedate.php?timeId=<?php echo $week['id'] ?>&semester=<?php echo $semester ?>&year=<?php echo $year?>" style="color:red"><b>Remove Date</b></a>
                                <?php endif; ?>
                            </td>

                        </form>
                    </tbody>

                    <?php
                                $i = $i + 1;
                            }?>

                </table>
                <?php
                    

                    if (isset($_POST['submit_dates'])) {
                        $z = 0; // Counter for tracking the index of the submitted form
                        foreach ($_POST['submit_dates'] as $submit_date) {
                            if ($submit_date == 'Save') {
                                // Retrieve data for the current activity
                                $week_number = $_POST['week_number'][$z];
                                $activity_plan = $_POST['activity_plan'][$z];
                                $start_date = $_POST['start_date'][$z];
                                $end_date = $_POST['end_date'][$z];

                                // Update the database with the start and end dates
                                $updateQuery = "UPDATE timeline SET startdate = '$start_date', enddate = '$end_date' WHERE weeknumber = $week_number AND semester=$semester AND year=$year";
                                $updateResult=mysqli_query($con, $updateQuery);
                                if ($updateResult) {
                                    $z++;
                                    echo "<script>;";
                                    echo "window.alert('Date Added successfully....!');";
                                    echo "window.location.href = 'add_timeline.php?semester=$semester&year=$year';";
                                    echo "</script>";
            
                                } else {
                                    echo "<script>;";
                                    echo "window.alert('Faild to add Date....!');";
                                    echo "window.location.href = 'add_timeline.php?semester=$semester&year=$year';";
                                    echo "</script>";
            
                                }
                                
                            }
                        }
                    }
                    if (isset($_POST['submit_dates1'])) {
                        $z = 0; // Counter for tracking the index of the submitted form
                        foreach ($_POST['submit_dates1'] as $submit_date) {
                            if ($submit_date == 'Save') {
                                // Retrieve data for the current activity
                                $week_number = $_POST['week_number'][$z];
                                $activity_plan = $_POST['activity_plan'][$z];
                                $start_date = $_POST['start_date'][$z];
                                $end_date = $_POST['end_date'][$z];

                                // Update the database with the start and end dates
                                $updateQuery = "UPDATE timeline SET startdate = '', enddate = '' WHERE weeknumber = $week_number AND semester=$semester AND year=$year";
                                $updateResult=mysqli_query($con, $updateQuery);
                                if ($updateResult) {
                                    $z++;
                                    echo "<script>;";
                                    echo "window.alert('Date Remove successfully....!');";
                                    echo "window.location.href = 'add_timeline.php?semester=$semester&year=$year';";
                                    echo "</script>";
            
                                } else {
                                    echo "<script>;";
                                    echo "window.alert('Faild to remove Date....!');";
                                    echo "window.location.href = 'add_timeline.php?semester=$semester&year=$year';";
                                    echo "</script>";
            
                                }
                                
                            }
                        }
                    }
                    ?>
            </div>


        </div>
    </div>
</body>

</html>
<script>
function openCity(event, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    event.currentTarget.className += " active";
}

// Simulate a click on the London tab when the page loads
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("London").style.display = "block";
    document.getElementsByClassName("tablinks")[0].classList.add("active");
});

function calculateCheckoutDate() {
    var checkin_date = document.getElementById("checkin-date").value; // Corrected ID

    if (checkin_date) {
        var checkin_date_obj = new Date(checkin_date);
        checkin_date_obj.setDate(checkin_date_obj.getDate() + 6);

        var checkout_year = checkin_date_obj.getFullYear();
        var checkout_month = String(checkin_date_obj.getMonth() + 1).padStart(2, '0');
        var checkout_day = String(checkin_date_obj.getDate()).padStart(2, '0');

        var formatted_checkout_date = checkout_year + '-' + checkout_month + '-' + checkout_day;
        document.getElementById("checkout_date").value = formatted_checkout_date; // Corrected ID
    }
}
</script>