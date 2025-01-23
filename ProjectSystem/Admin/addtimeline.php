<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add timeline- Admin Dashboard</title>
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
            width:100%;
            height:50px;
            background-image: url('../images/header.jpg');
            background-size:cover;
            background-repeat: no-repeat; 
            
            
        }

        #container {
            display: flex;
            height: 100%;
        }

     

        #content {
            
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .semester-block1 {
            width: 200px;
            height: 200px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            line-height: 200px;
            font-size: 18px;
            margin: 0 20px;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 250px;
        }
        .semester-block2 {
            width: 200px;
            height: 200px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            line-height: 200px;
            font-size: 18px;
            margin: 0 20px;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

    

        .students {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

      
        
    
        table {
            width:100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
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
            color:black;
            cursor: pointer;
            border-top-left-radius:10px;
            border-bottom-left-radius:10px;
            border-top-right-radius:10px;
            border-bottom-right-radius:10px;
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
 

    </style>
</head>

<?php
include "config.php";
$year = $_GET['year']; 

?>

<body>
    <header>
         
        <h2>Welcome Admin - Add Timeline</h2>
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

            <br><br><br><h3 style="margin-left: 250px;">Select semester:<h3>
                <div id="container" style="display:flex">
        <div class="semester-block1" onclick="openSemesterPage(5)">Semester 5</div>
        <div class="semester-block2" onclick="openSemesterPage(6)">Semester 6</div>
    </div> 
    <script>
        function openSemesterPage(semester) {
            var year=<?php echo $year; ?>;
            window.location.href = 'add_timeline.php?semester=' + semester+'&year=' + year;
        }
    </script>
    </div>
    </div>
</body>
</html>
