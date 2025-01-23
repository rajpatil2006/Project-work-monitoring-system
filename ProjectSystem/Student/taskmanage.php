<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline Management System - Group Dashboard</title>
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
            margin-bottom: 100px;
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
            height:100%;
           
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

      
        #menu .active {
            background-color: #555;
        }


.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

.tab button {
    font-size:15px;
  background-color: #dddddd;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 50px;
  transition: 0.3s;
}


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

#btn-1{
    background-color: #04AA6D;
    color:white;
}
#btn-1:hover{
    background-color: green;
    color:white;
}
#btn-2{
    background-color: #008CBA;;
    color:white;
}
#btn-2:hover{
    background-color: blue;
    color:white;
}
#btn-3{
    background-color: #a7a118;;
    color:white;
}
#btn-3:hover{
    background-color: yellow;
    color:gray;
}

    </style>
</head>

<?php
include "config.php";
$studentId = $_GET['studentId'];
$year = $_GET['year'];
$groupNo = $_GET['groupNo'];
$weekId = $_GET['weekId'];

$selectStudentQuery = "SELECT * FROM `student` where id=$studentId";
$studentsResult = mysqli_query($con, $selectStudentQuery);
$selectSQuery = "SELECT * FROM `student` where id=$studentId";
$SResult = mysqli_query($con, $selectSQuery);

?>

<body>
    <header>
         <h2>Welcome <?php
               $selectQuery = "SELECT * FROM `student` WHERE id = $studentId ";
                $Result = mysqli_query($con, $selectQuery);
                $rowM = mysqli_fetch_assoc($Result);
                $mgen=$rowM['gender'];
                if($mgen=='male')
                {
                    echo 'Mr.';echo ' ';
                }else{
                    echo 'Ms.';echo ' ';
                }
                echo $rowM['firstname'].' '.$rowM['lastname']?> - Task Management</h2>
    </header>

    <div id="container">
        <div id="sidebar">
        <div id="menu">
                <ul>
                     <li><a href="studenthome.php?studentId=<?php echo $studentId ?>&year=<?php echo $year;?>&groupNo=<?php echo $groupNo;?>"><i class="fa fa-home"></i> Home</a>  </li>
                    <li><a href="managetimeline.php?studentId=<?php echo $studentId ?>&year=<?php echo $year ?>&groupNo=<?php echo $groupNo ?>"><i
                                class="fas fa-stream"></i> Timeline</a> </li>
                    <li><a href="progressgroup.php?studentId=<?php echo $studentId ?>&year=<?php echo $year ?>&groupNo=<?php echo $groupNo ?>"><i
                                class="fas fa-tasks"></i> Progress </a> </li>

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
            <p style="color:black;">Hello <?php $rowM = mysqli_fetch_assoc($SResult);
                $mgen=$rowM['gender'];
                if($mgen=='male')
                {
                    echo 'Mr.';echo ' ';
                }else{
                    echo 'Ms.';echo ' ';
                }
                echo $rowM['firstname'].' '.$rowM['lastname']?> you can manage your task here by attempting option shown in following table </p>
            <div style="padding:10px">
            <span>Note<i style="color:red;">*</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#b3b3b3"></i> Submitted<i>(You submit task but mentor not view..)</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#e98f8f"></i> Viewed<i>(Mentor view task and said changes required..)</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#7cd56d"></i> Approved<i>(Mentor approved the task)</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#6db3d5"></i> Updated<i>(You resubmit task after making changes)</i></span>
            </div> 
            <table id="actionTable">
                    <thead>
                        <tr>
                            <th>Task Name</th>
                            <th>Details</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <?php mysqli_data_seek($studentsResult, 0);
                            while ($student = mysqli_fetch_assoc($studentsResult)) { ?>
                            <th><?php echo $student['firstname'].' '.$student['lastname']; ?></th>
                            
                           <?php } ?>
                        </tr>
                    </thead>
                    <?php $selectWeekQuery = "SELECT * FROM `taskdetails` where year=$year AND groupno=$groupNo AND timelineid=$weekId";
                        
                    $weeksResult = mysqli_query($con, $selectWeekQuery);
                  $i=1;
                                ?>
                    
                                <tbody>
                             <?php   while ($week = mysqli_fetch_assoc($weeksResult)) {
                                
                               $id= $week['id'];
                               $selectWQuery = "SELECT * FROM `taskstatus` where studentid=$studentId AND taskid=$id";
                                $WResult = mysqli_query($con, $selectWQuery);
                                if (mysqli_num_rows($WResult) > 0) {
                                     $selectddateQuery = "SELECT 
                                     DATE_FORMAT(startdate, '%d/%m/%Y') AS formatted_startdate,
                                     DATE_FORMAT(enddate, '%d/%m/%Y') AS formatted_enddate
                                     FROM taskdetails where id=$id";
                                     $date = mysqli_query($con, $selectddateQuery);
                                     $row1 = mysqli_fetch_assoc($date);
                                  
                                     $weekId=$week['id'];
                                ?>
                               <!-- Inside the while loop where you display week details -->
                              <form method="post">
                                
                                <td>
                                    <?php echo $week['name']; ?>
                                </td>
                                <td>
                                    <?php echo $week['details']; ?>
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
                                <?php mysqli_data_seek($studentsResult, 0);
                                 while ($student = mysqli_fetch_assoc($studentsResult)) { 
                                        $wid=$week['id'];
                                        $selectWQuery = "SELECT * FROM `taskstatus` where taskid=$wid AND studentid=$studentId";
                                        $WResult = mysqli_query($con, $selectWQuery);
                                        if (mysqli_num_rows($WResult) > 0) {
                                            $Wchecked = mysqli_fetch_assoc($WResult);
                                            if($Wchecked['remark']=='viewed'){
                                               
                                            ?>
                                            <td style="background-color:#e98f8f;">
                                            <?php $weekId = $_GET['weekId'];?>
                                            <?php $wId = $Wchecked['id'];?>
                                            <a href="updatetask.php?weekId=<?php echo $weekId ?>&year=<?php echo $year ?>&studentId=<?php echo $studentId ?>&groupNo=<?php echo $groupNo ?>&wId=<?php echo $wId ?>">Update Task</a>
                                            <?php
                                            }
                                            elseif($Wchecked['remark']=='approved'){
                                                ?>
                                                <td style="background-color:#7cd56d;">
                                                <?php $weekId = $_GET['weekId'];?>
                                            <?php $wId = $Wchecked['id'];?>
                                                <a href="viewtask.php?weekId=<?php echo $weekId ?>&year=<?php echo $year ?>&studentId=<?php echo $studentId ?>&groupNo=<?php echo $groupNo ?>&wId=<?php echo $wId ?>">View Task</a></td>
                                            
                                                <?php } 
                                            elseif($Wchecked['remark']=='submitted'){
                                                ?>
                                                <td style="background-color:#b3b3b3;">
                                                <?php $weekId = $_GET['weekId'];?>
                                            <?php $wId = $Wchecked['id'];?>
                                            <a href="viewtask.php?weekId=<?php echo $weekId ?>&year=<?php echo $year ?>&studentId=<?php echo $studentId ?>&groupNo=<?php echo $groupNo ?>&wId=<?php echo $wId ?>">View Task</a>
                                            
                                                <?php } 
                                                elseif($Wchecked['remark']=='updated'){
                                                    ?>
                                                     <td style="background-color:#6db3d5;">
                                                     <?php $weekId = $_GET['weekId'];?>
                                            <?php $wId = $Wchecked['id'];?>
                                                     <a href="viewtask.php?weekId=<?php echo $weekId ?>&year=<?php echo $year ?>&studentId=<?php echo $studentId ?>&groupNo=<?php echo $groupNo ?>&wId=<?php echo $wId ?>">View Task</a></td>
                                            <?php }
                                            else{
                                                ?>
                                            <td>
                                            <?php $weekId = $_GET['weekId'];?>
                                            <?php $wId = $Wchecked['id'];?>
                                            <a href="submittask.php?weekId=<?php echo $weekId ?>&year=<?php echo $year ?>&studentId=<?php echo $studentId ?>&groupNo=<?php echo $groupNo ?>&wId=<?php echo $wId ?>">Submit Task</a>
                                               
                                                <?php
                                            }
                                        }
                                        else{
                                            ?>
                                            <td>
                                            <?php $weekId = $_GET['weekId'];?>
                                                <!-- <a href="submittask.php?weekId=<?php echo $weekId ?>&year=<?php echo $year ?>&studentId=<?php echo $studentId ?>&groupNo=<?php echo $groupNo ?>">Submit Task</a> -->
                                                 <!-- <input type="button" id="btn-1" name="add" onclick="openAddPage(<?php echo $weekId; ?>)" value="Add Diary"> -->
                                                <?php
                                        }  
                                        ?>
                                      <?php }
                                     
                              ?>
                               
                         
                            </tbody>
                                
                                <?php
                                $i = $i + 1;
                           } }?>

                </table>       

           
        </div>
    </div>
</body>
</html>
<script>
                     function openAddPage(weekId) {
                     var year=<?php echo $year; ?>;
                     var studentId=<?php echo $studentId; ?>;
                     var groupNo=<?php echo $groupNo; ?>;
                     window.location.href = 'adddiary.php?semester=' + semester + '&year=' + year + '&studentId=' + studentId + '&groupNo=' + groupNo + '&weekId=' + weekId;
                    }
                     function openUpdPage(weekNo,semester,weekId) {
                     var year=<?php echo $year; ?>;
                     var studentId=<?php echo $studentId; ?>;
                     var groupNo=<?php echo $groupNo; ?>;
                     window.location.href = 'updatediary.php?semester=' + semester + '&year=' + year + '&studentId=' + studentId + '&weekNo=' + weekNo + '&groupNo=' + groupNo + '&weekId=' + weekId;
                    }
                    function openViewPage(weekNo,semester,weekId) {
                     var year=<?php echo $year; ?>;
                     var studentId=<?php echo $studentId; ?>;
                     var groupNo=<?php echo $groupNo; ?>;
                     window.location.href = 'viewdiary.php?semester=' + semester + '&year=' + year + '&studentId=' + studentId + '&weekNo=' + weekNo + '&groupNo=' + groupNo + '&weekId=' + weekId;
                    }
                    function taskmanage() {
                    //  var year=<?php echo $year; ?>;
                    //  var studentId=<?php echo $studentId; ?>;
                    //  var groupNo=<?php echo $groupNo; ?>;
                     window.location.href = 'taskmanage.php';
                    }
                </script>
