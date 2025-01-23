<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Timeline Management System - Mentor Dashboard</title>
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
            width:100%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 150px;
        }
       
        th, td {
            padding-top:12px;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom:12px;
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
            border-top-right-radius:20px;

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
        input[type="date"]{
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
?>

<body>
    <header>
        <h2>View Timeline - Welcome Admin</h2>
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
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">Semester 5</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Semester 6</button>

            </div>

            <!-- Tab content -->
            <div id="London" class="tabcontent">
            <table id="table1">
                    <thead>
                        <tr>
                            <th style="width:0">Sr.No.</th>
                            <th style="width:0">Week Number</th>
                            <th>Activity Planned</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Update</th>
                            <!-- <th>Delete</th> -->
                            
                            
                        </tr>
                    </thead>
                    <?php $selectWeekQuery = "SELECT * FROM `timeline` where year=$year AND semester=5 ORDER BY weeknumber ASC";
                        
                    $weeksResult = mysqli_query($con, $selectWeekQuery);
                  $i=1;
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
                                        <?php echo 'Not define yet'; ?>
                                    <?php else : ?>
                                        <?php echo $row1['formatted_startdate']; ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($week['enddate'] == '0000-00-00') : ?>
                                        <?php echo 'Not define yet'; ?>
                                    <?php else : ?>
                                        <?php echo $row1['formatted_enddate']; ?>
                                    <?php endif; ?>
                                </td>
                               
                                <td><a href="updatetimeline.php?timeId=<?php echo $week['id'] ?>&year=<?php echo $year?>">Update</a></td>
                                
                         
                            </tbody>
                                
                                <?php
                                $i = $i + 1;
                            }?>

                </table>

            </div>

            <div id="Paris" class="tabcontent">

            <table id="table1">
                    <thead>
                        <tr>
                            <th style="width:0">Sr.No.</th>
                            <th style="width:0">Week Number</th>
                            <th>Activity Planned</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Update</th>
                            
                            
                            
                        </tr>
                    </thead>
                    <?php $selectWeekQuery = "SELECT * FROM `timeline` where year=$year AND semester=6 ORDER BY weeknumber ASC";
                        
                    $weeksResult = mysqli_query($con, $selectWeekQuery);
                  $i=1;
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
                                <td style="text-align:lefts">
                                    <?php echo $week['activityplan']; ?>
                                </td>
                                <td>
                                    <?php if ($week['startdate'] == '0000-00-00') : ?>
                                        <?php echo 'Not define yet'; ?>
                                    <?php else : ?>
                                        <?php echo $row1['formatted_startdate']; ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($week['enddate'] == '0000-00-00') : ?>
                                        <?php echo 'Not define yet'; ?>
                                    <?php else : ?>
                                        <?php echo $row1['formatted_enddate']; ?>
                                    <?php endif; ?>
                                </td>
                               
                                <td><a href="updatetimeline.php?timeId=<?php echo $week['id'] ?>&year=<?php echo $year?>">Update</a></td>
                               
                            </tbody>
                                
                                <?php
                                $i = $i + 1;
                            }?>

                </table>
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
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("London").style.display = "block";
        document.getElementsByClassName("tablinks")[0].classList.add("active");
    });
</script>
