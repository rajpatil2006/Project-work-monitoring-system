<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Group </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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
            background-image: url('images/collegelogo.jpeg');
            background-repeat: no-repeat;
            background-size: auto;
            background-position: center;
            height: 100vh;
            flex-grow: 1;
            padding: 20px;
            animation: fadeIn 3s ease-in-out;
        }

        .overview {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .semester-block1 {
            width: 200px;
            height: 100px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            line-height: 100px;
            font-size: 18px;
            margin: 0 20px;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 250px;
        } 
       
        .semester-block2 {
            width: 200px;
            height: 100px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            line-height: 100px;
            font-size: 18px;
            margin: 0 20px;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Add more styles for other sections like .students, .timeline, .notification, etc. */

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
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
            text-align: center;
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
$mentorId = $_GET['mentorId'];
$year = $_GET['year'];

?>

<body>
    <header>
         
        <h2>View Group</h2>
    </header>

    <div id="container">
        <div id="sidebar">
        <div id="menu">
                <ul>
                <li><a href="mentorhome.php?mentorId=<?php echo $mentorId ?>&year=<?php echo $year;?>"><i class="fa fa-home"></i> Home</a>  </li>
                <li><a href="progressgroup.php?year=<?php echo $year?>&mentorId=<?php echo $mentorId ?>"><i class="fas fa-tasks"></i> Progress</a>  </li>
                </ul>
            </div>
            <br><br><br><br><br><br>
            <div id="menu">
                <ul style="  list-style-type: none;">
                    <li><a href="../index.php">Log Out&nbsp;&nbsp;&nbsp;<i class="fas fa-sign-out"></i></a></li>
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
        <div id="student-management" class="students">
        <table>
                    <thead>
                        <tr>
                            <th>Group Number</th>
                            <th>Group Member </th>
                            <th>Project Title</th>
                                              
                         
                        </tr>
                    </thead>
                    <tbody>
                       
                        <?php while ($group = mysqli_fetch_assoc($groupsResult)) { 
                              $gr=$group['groupno']; 
                              $selectStudentQuery = "SELECT * FROM `student` WHERE `groupno` = $gr ORDER BY `rollno` ASC";
                              $studentsResult = mysqli_query($con, $selectStudentQuery);
                              ?>
                            <tr>
                                
                            
                                <td><?php echo $group['groupno']; ?></td>
                                <td><?php while ($stud = mysqli_fetch_assoc($studentsResult)) 
                                         {  
                                            ?><span style="font-family: -webkit-body;
                                            font-size: large;"> <?php echo $stud['rollno']; echo ' - '; echo $stud['firstname']; echo ' '; echo $stud['lastname'] ; ?> </span><?php echo '<br>' ; 
                                         }
                                      ?>
                                </td>
                                <td><?php
                                                if($group['projecttitle']){
                                                echo $group['projecttile']; 
                                                }
                                                else{
                                                    ?> <span style="color:red">
                                                    <?php echo 'Not Decide yet'; ?> </span> <?php 
                                                }?> </td>
                                            
                                           
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br><br><br>

            
                <div id="container" style="display:flex">
        <div class="semester-block1" onclick="openTimelinePage()">Timeline (Weekly)</div>
        <div class="semester-block2" onclick="openTaskPage(6)">View Progress</div>
    </div> 
    <script>
        function openTimelinePage() {
            window.location.href = 'timelinemanage.php?mentorId='+<?php echo $mentorId; ?>+'&groupNo='+<?php echo $groupNo; ?>+'&year='+<?php echo $year; ?>;
        }
        function openTaskPage(semester) {
            window.location.href = 'viewprogress.php?mentorId='+<?php echo $mentorId; ?>+'&groupNo='+<?php echo $groupNo; ?>+'&year='+<?php echo $year; ?>;
        }
    </script>
</div>
</div>

    </div>
    
</body>
</html>
