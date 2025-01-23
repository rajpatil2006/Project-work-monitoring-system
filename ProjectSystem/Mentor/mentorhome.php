<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management System - Mentor Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow: hidden;
        }

        header {
            background-image: url('../images/header.jpg');
            background-size:cover;
            background-repeat: no-repeat; 
            background-color: #d3f9ff;
    color: #0a0a0a;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            font-family: "Sofia", sans-serif;
  font-size: 30px;
  text-shadow: 3px 3px 3px #ababab;

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

        
        /* Add more styles for other sections like .students, .timeline, .notification, etc. */

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* Add FontAwesome icons */
       

        table {
            width:100%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 150px;
        }
        #Table1 tr:nth-child(even){background-color: #f0efff;}

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add jQuery code for animations or any other dynamic behavior
        });
    </script>
</head>
<?php
include 'config.php';
$mentorId = $_GET['mentorId'];
$year = $_GET['year'];

?>
<body>

    <header >
        <i class="fas fa-cogs"></i> Project Work Monitoring System - Welcome <?php
               $selectQuery = "SELECT * FROM `mentor` WHERE id = $mentorId ";
                $Result = mysqli_query($con, $selectQuery);
                $rowM = mysqli_fetch_assoc($Result);
                $mgen=$rowM['gender'];
                if($mgen=='male')
                {
                    echo 'Mr.';echo ' ';
                }else{
                    echo 'Ms.';echo ' ';
                }
                echo $rowM['firstname'].' '.$rowM['lastname']?> 
    </header>

    <div id="container">
        <div id="sidebar">
        <div id="menu">
                <ul>
                
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
        <?php
             
                 $year = $_GET['year'];
                 include 'config.php';
                 $selectGroupQuery = "SELECT * FROM `grouptable` WHERE mentorid = $mentorId AND year=$year ORDER BY groupno ASC";
                $groupsResult = mysqli_query($con, $selectGroupQuery);

                ?>
        <div id="content">
            
              <h3>Groups Under Me:</h3>
               
                <table id="Table1">
                    <thead>
                        <tr>
                            <th style="width:0%">Group Number</th>
                            <th style="width:23%">Group Member</th>
                            <th style="width:25%">Project Title</th>
                            <th style="width:10%">Timeline</th>
                            <th style="width:10%">View Progress</th>
                            
                         
                        </tr>
                    </thead>
                    <tbody>
                       
                        <?php while ($group = mysqli_fetch_assoc($groupsResult)) { 
                              $gr=$group['groupno']; 
                              $selectStudentQuery = "SELECT * FROM `student` WHERE `groupno` = $gr AND `year` = $year ORDER BY `rollno` ASC";
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
                                                echo $group['projecttitle']; 
                                                }
                                                else{
                                                    ?> <span style="color:red">
                                                    <?php echo 'Not Decide yet'; ?> </span> <?php 
                                                }?> 
                                                </td>
                                <td> <button style="background-color:#ebe331" onclick="timelinemanage(<?php echo $group['groupno']; ?>)"><i class="fa fa-arrow-right"></i></button></td> 
                                    
                                <td>  <button style="background-color:#ebe331" onclick="viewprogress(<?php echo $group['groupno'] ?>)"><i class="fa fa-arrow-right"></i></button></td>
                                   
                                           
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <script>
                    function timelinemanage(groupNo) {
                     var year=<?php echo $year; ?>;
                     var mentorId=<?php echo $mentorId; ?>;
                     window.location.href = 'timelinemanage.php?groupNo=' + groupNo + '&year=' + year + '&mentorId=' + mentorId;
                    }
                    function viewprogress(groupNo){
                        var year=<?php echo $year; ?>;
                     var mentorId=<?php echo $mentorId; ?>;
                     window.location.href = 'viewprogress.php?groupNo=' + groupNo + '&year=' + year + '&mentorId=' + mentorId;
                    }
                </script>

           
        </div> 
    </div>
</body>
</html>