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
            width:auto;
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

.tab button.active {
  background-color: #ffd180;
}


.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

    </style>
</head>

<?php
include "config.php";
$mentorId = $_GET['mentorId'];
$year = $_GET['year'];
$groupNo = $_GET['groupNo'];

$selectStudentQuery = "SELECT * FROM `student` where groupno=$groupNo ORDER BY rollno ASC";
$studentsResult = mysqli_query($con, $selectStudentQuery);



?>

<body>
    <header>
         <h2> Welcome <?php
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
                echo $rowM['firstname'].' '.$rowM['lastname']?> - Timeline Management</h2>
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
            <div style="padding:30px">
            <span>Note<i style="color:red;">*</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#b3b3b3"></i> Added<i>(Student add weekly diary but you not view..)</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#e98f8f"></i> Viewed<i>(You view weekly diary and said changes required..)</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#7cd56d"></i> Approved<i>(You approved the weekly diary)</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#6db3d5"></i> Updated<i>(Student resubmit weekly diary after make changes)</i></span>
            </div>
        <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Semester 5</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Semester 6</button>

</div>

<!-- Tab content -->
<div id="London" class="tabcontent">
<table id="actionTable">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Week Number</th>
                            <th>Activity Planned</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <?php mysqli_data_seek($studentsResult, 0);
                            while ($student = mysqli_fetch_assoc($studentsResult)) { ?>
                            <th style="background-color:#f8ffb8;color:black"><?php echo $student['firstname'].' '.$student['lastname']; ?></th>
                            
                           <?php } ?>
                           <th>Task</th>
                        </tr>
                    </thead>
                    <?php $selectWeekQuery = "SELECT * FROM `timeline` where year=$year AND semester=5 ORDER BY weeknumber ASC";
                        
                    $weeksResult = mysqli_query($con, $selectWeekQuery);
                  $i=1;
                  $prevCompleted = false;
                    $firstrow = true;
                                ?>
                    
                                <tbody>
                             <?php   while ($week = mysqli_fetch_assoc($weeksResult)) {
                               $id= $week['id'];
                                     $selectddateQuery = "SELECT 
                                     DATE_FORMAT(startdate, '%d/%m/%Y') AS formatted_startdate,
                                     DATE_FORMAT(enddate, '%d/%m/%Y') AS formatted_enddate
                                     FROM timeline where id=$id";
                                     $date = mysqli_query($con, $selectddateQuery);
                                     $row1 = mysqli_fetch_assoc($date);
                                     $weekNumber=$week['weeknumber'];
                                     $weekId=$week['id'];
                                ?>
                               <!-- Inside the while loop where you display week details -->
                                                         
                                        <td>
                        <?php
                        $wkno=$week['weeknumber']; 
                        $selectCheckQuery = "SELECT * FROM `groupwork` where year=$year AND semester=5 AND groupno=$groupNo AND weeknumber=$wkno";
                        $checksResult = mysqli_query($con, $selectCheckQuery);
                        if(mysqli_num_rows($checksResult) > 0){
                            ?>
                            <span style="color:green;"><i><b>Completed</b></i></span>
                            <?php
                            $prevCompleted = true;
                        }
                        else
                        {
                            if($firstrow==true || $prevCompleted==true)
                            {
                            ?>
                            <input type='checkbox' name='selected_week[]'  onclick='confirmUpdate(this,5)' value=<?php echo $week['weeknumber']; ?> style="cursor:pointer;">
                            <?php
                            $prevCompleted = false;
                            $firstrow=false;
                            }
                            else{
                                ?>
                                <input type='checkbox' disabled style="cursor:pointer;">
                                <?php
                            }
                        }
                        ?>
                    </td>
                                <td>
                                    <?php echo $week['weeknumber']; ?>
                                </td>
                                <td>
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
                               
                                <?php mysqli_data_seek($studentsResult, 0);
                             while ($student = mysqli_fetch_assoc($studentsResult)) {
                                $sid= $student['id'];
                                $wid=$week['id'];
                                $selectWQuery = "SELECT * FROM `weeklydiary` where studentid=$sid AND weekid=$wid";
                                $WResult = mysqli_query($con, $selectWQuery);
                                if (mysqli_num_rows($WResult) > 0) {
                                    $Wchecked = mysqli_fetch_assoc($WResult);
                                            if($Wchecked['remark']=='viewed'){                                    
                                            ?>
                                            <td style="background-color:#e98f8f;">
                                            <input type="button" id="btn-2"  name="view" onclick="openViewPage(5,<?php echo $week['id']; ?>,<?php echo $student['id']; ?>)" value="View Diary" >
                                            <?php
                                            }
                                            elseif($Wchecked['remark']=='approved'){
                                                ?>
                                            <td style="background-color:#7cd56d;">
                                            <input type="button" id="btn-2"  name="view" onclick="openViewPage(5,<?php echo $week['id']; ?>,<?php echo $student['id']; ?>)" value="View Diary" >
                                            <?php
                                            }
                                            elseif($Wchecked['remark']=='updated'){
                                                ?>
                                            <td style="background-color:#6db3d5;">
                                            <input type="button" id="btn-2"  name="view" onclick="openViewPage(5,<?php echo $week['id']; ?>,<?php echo $student['id']; ?>)" value="View Diary" >
                                            <?php
                                            }
                                            else{
                                                ?>
                                            <td style="background-color:#b3b3b3;">
                                            <input type="button" id="btn-2"  name="view" onclick="openViewPage(5,<?php echo $week['id']; ?>,<?php echo $student['id']; ?>)" value="View Diary" >
                                            <?php
                                            }
                                    }
                                    else{
                                        ?>
                                        <td>
                                        <span><i>Not Added</i></span>
                                            <?php
                                    }  
                                    ?>                       
                    </td>                    
                   <?php } ?>
                           <td> <button style="background-color:#ebe331" onclick="taskmanage(5,<?php echo $week['id']; ?>)"><i class="fa fa-arrow-right"></i></button></td>
                               
                         
                            </tbody>
                                
                                <?php
                                $i = $i + 1;
                            }?>

                </table>
                <script>
                    
                    function openViewPage(semester,weekId,studentId) {
                     var year=<?php echo $year; ?>;
                     var mentorId=<?php echo $mentorId; ?>;
                     var groupNo=<?php echo $groupNo; ?>;
                     window.location.href = 'viewdiary.php?semester=' + semester + '&year=' + year + '&studentId=' + studentId + '&groupNo=' + groupNo + '&weekId=' + weekId + '&mentorId=' + mentorId;
                    }

                    function taskmanage(semester,weekId){
                        var year=<?php echo $year; ?>;
                     var mentorId=<?php echo $mentorId; ?>;
                     var groupNo=<?php echo $groupNo; ?>;
                        window.location.href = 'taskmanage.php?semester=' + semester + '&year=' + year + '&groupNo=' + groupNo + '&weekId=' + weekId + '&mentorId=' + mentorId;
                    }
                </script>
               
</div>

<div id="Paris" class="tabcontent">
<table id="actionTable">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Week Number</th>
                            <th>Activity Planned</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <?php mysqli_data_seek($studentsResult, 0);
                            while ($student = mysqli_fetch_assoc($studentsResult)) { ?>
                            <th style="background-color:#f8ffb8;color:black"><?php echo $student['firstname'].' '.$student['lastname']; ?></th>
                            
                           <?php } ?>
                           <th>Task</th>
                        </tr>
                    </thead>
                    <?php $selectWeekQuery = "SELECT * FROM `timeline` where year=$year AND semester=6 ORDER BY weeknumber ASC";
                        
                    $weeksResult = mysqli_query($con, $selectWeekQuery);
                  $i=1;
                  $pCompleted=false;
                  $frow=true;
                                ?>
                    
                                <tbody>
                             <?php   while ($week = mysqli_fetch_assoc($weeksResult)) {
                               $id= $week['id'];
                                     $selectddateQuery = "SELECT 
                                     DATE_FORMAT(startdate, '%d/%m/%Y') AS formatted_startdate,
                                     DATE_FORMAT(enddate, '%d/%m/%Y') AS formatted_enddate
                                     FROM timeline where id=$id";
                                     $date = mysqli_query($con, $selectddateQuery);
                                     $row1 = mysqli_fetch_assoc($date);
                                     $weekNumber=$week['weeknumber'];
                                     $weekId=$week['id'];
                                ?>
                               <!-- Inside the while loop where you display week details -->
                            
                              <td>
                        <?php
                        $wkno=$week['weeknumber']; 
                        $selectCheckQuery = "SELECT * FROM `groupwork` where year=$year AND semester=6 AND groupno=$groupNo AND weeknumber=$wkno";
                        $checksResult = mysqli_query($con, $selectCheckQuery);
                        if(mysqli_num_rows($checksResult) > 0){
                            ?>
                            <span style="color:green;"><i><b>Completed</b></i></span>
                            <?php
                            $pCompleted = true;
                        }
                        else
                        {
                            if($frow==true || $pCompleted==true)
                            {
                            ?>
                            <input type='checkbox' name='selected_week[]'  onclick='confirmUpdate(this,6)' value=<?php echo $week['weeknumber']; ?> style="cursor:pointer;">
                            <?php
                            $pCompleted = false;
                            $frow=false;
                            }
                            else{
                                ?>
                                <input type='checkbox' disabled style="cursor:pointer;">
                                <?php
                            }
                        }
                        ?>
                    </td>
                                <td>
                                    <?php echo $week['weeknumber']; ?>
                                </td>
                                <td>
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
                               
                                <?php mysqli_data_seek($studentsResult, 0);
                             while ($student = mysqli_fetch_assoc($studentsResult)) {
                                $sid= $student['id'];
                                $wid=$week['id'];
                                $selectWQuery = "SELECT * FROM `weeklydiary` where studentid=$sid AND weekid=$wid";
                                $WResult = mysqli_query($con, $selectWQuery);
                                if (mysqli_num_rows($WResult) > 0) {
                                    $Wchecked = mysqli_fetch_assoc($WResult);
                                            if($Wchecked['remark']=='viewed'){
                                            
                                    
                                            ?>
                                            <td style="background-color:#e98f8f;">
                                            <input type="button" id="btn-2"  name="view" onclick="openViewPage(5,<?php echo $week['id']; ?>,<?php echo $student['id']; ?>)" value="View Diary" >
                                            <?php
                                            }
                                            elseif($Wchecked['remark']=='approved'){
                                                ?>
                                            <td style="background-color:#7cd56d;">
                                            <input type="button" id="btn-2"  name="view" onclick="openViewPage(5,<?php echo $week['id']; ?>,<?php echo $student['id']; ?>)" value="View Diary" >
                                            <?php
                                            }
                                            elseif($Wchecked['remark']=='updated'){
                                                ?>
                                            <td style="background-color:#6db3d5;">
                                            <input type="button" id="btn-2"  name="view" onclick="openViewPage(5,<?php echo $week['id']; ?>,<?php echo $student['id']; ?>)" value="View Diary" >
                                            <?php
                                            }
                                            else{
                                                ?>
                                            <td style="background-color:#b3b3b3;">
                                            <input type="button" id="btn-2"  name="view" onclick="openViewPage(5,<?php echo $week['id']; ?>,<?php echo $student['id']; ?>)" value="View Diary" >
                                            <?php
                                            }
                                    }
                                    else{
                                        ?>
                                        <td>
                                        <span><i>Not Added</i></span>
                                            <?php
                                    }  
                                    ?>
                       
                    </td>
                    
                   <?php } ?>
                           <td> <button style="background-color:#ebe331" onclick="taskmanage(6,<?php echo $week['id']; ?>)"><i class="fa fa-arrow-right"></i></button></td>
                               
                         
                            </tbody>
                                
                                <?php
                                $i = $i + 1;
                            }?>

                </table>
                <script>
                    
                    function openViewPage(semester,weekId,studentId) {
                     var year=<?php echo $year; ?>;
                     var mentorId=<?php echo $mentorId; ?>;
                     var groupNo=<?php echo $groupNo; ?>;
                     window.location.href = 'viewdiary.php?semester=' + semester + '&year=' + year + '&studentId=' + studentId + '&groupNo=' + groupNo + '&weekId=' + weekId + '&mentorId=' + mentorId;
                    }
                    function taskmanage(semester,weekId){
                        var year=<?php echo $year; ?>;
                     var mentorId=<?php echo $mentorId; ?>;
                     var groupNo=<?php echo $groupNo; ?>;
                        window.location.href = 'taskmanage.php?semester=' + semester + '&year=' + year + '&groupNo=' + groupNo + '&weekId=' + weekId + '&mentorId=' + mentorId;
                    }
                </script>
               
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
   <script>
function confirmUpdate(checkbox,semester) {
    if (checkbox.checked) {
        var mentorId = "<?php echo $_GET['mentorId']; ?>";
        var year = "<?php echo $_GET['year']; ?>";
        var groupNo = "<?php echo $_GET['groupNo']; ?>";
        if (confirm("Are you sure you want to approve this week?")) {
            // Call function to update the week
            window.location.href = "update_week.php?weekNumber=" + encodeURIComponent(checkbox.value) + "&mentorId=" + mentorId + "&year=" + year + "&groupNo=" + groupNo + "&semester=" + semester;
        } else {
            checkbox.checked = false; // Uncheck the checkbox if user cancels
        }
    }
}
</script>
