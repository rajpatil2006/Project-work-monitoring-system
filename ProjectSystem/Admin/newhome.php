<!DOCTYPE html>
<html lang="en">
<?php
include "config.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management System - Admin Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    header {

        background-image: url('../images/header.jpg');
        background-size: cover;
        background-repeat: no-repeat;
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
        width: auto;
        margin-bottom: 100px;
        overflow-x: auto;
        overflow-y: auto;
    }

    table {
        font-size: 15px;
        width: auto;
        border-collapse: collapse;
        margin-bottom: 200px;
    }

    th,
    td {
        color: black;
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        page-break-inside: avoid;
    }

    th {
        text-align: center;
        background-color: #f2f2f2;
    }
    /* Tooltip container */
  .tooltip {
    position: relative;
    display: inline-block;
  }

  /* Tooltip text */
  .tooltip .tooltiptext {
    visibility: hidden;
    width: 200px;
    background-color: white;
    color: #000;
    text-align: center;
    font-size:10px;
    font-family=inherit;
    border-radius: 6px;
    padding: 10px;
    position: absolute;
    z-index: 1;
    top: 0;
    right: 110%; /* Adjust this value to position the tooltip */
  }

  /* Show the tooltip text when hovering */
  .tooltip:hover .tooltiptext {
    visibility: visible;
  }
    </style>
</head>

<body>
    <header>
        <div><i class="fas fa-cogs"></i> Project Work Monitoring System - Welcome Admin</div>

    </header>
    <?php $year = $_GET['year']; ?>
    <div id="container">

        <div id="sidebar">

            <div id="menu">
                <ul>

                    <li><a><i class="fas fa-user-graduate"></i><span style="font-size:13px;"> Manage</span><span
                                style="font-size:22px;font-family: 'cursive';">&nbsp;Student</span></a>
                        <ul class="nested-list">
                            <li><a href="studmanagement.php?year=<?php echo $year; ?>"><i
                                        class="fa-solid fa-table-list"></i> View Student</a></li>
                            <li><a href="group.php?year=<?php echo $year; ?>"><i class="fas fa-user"></i> View
                                    newly
                                    registerd Student</a></li>
                        </ul>
                    </li>
                    <li><a href="groupmanagement.php?year=<?php echo $year; ?>"><i class="fas fa-users"></i><span
                                style="font-size:13px;"> Manage</span><span
                                style="font-size:22px;font-family: 'cursive';">&nbsp;Group</span></a></li>
                    <li><a href="menmanagement.php?year=<?php echo $year; ?>"><i
                                class="fas fa-chalkboard-teacher"></i><span style="font-size:13px;">
                                Manage</span><span style="font-size:22px;font-family: 'cursive';">&nbsp;Mentor</a>
                    </li>
                    <li><a><i class="fas fa-stream"></i><span style="font-size:13px;"> Manage</span><span
                                style="font-size:22px;font-family: 'cursive';">&nbsp;Timeline</span></a>
                        <ul class="nested-list">
                            <li><a href="viewtimeline.php?year=<?php echo $year; ?>"><i
                                        class="fa-solid fa-table-list"></i> View Timeline</a></li>
                            <li><a href="addtimeline.php?year=<?php echo $year; ?>"><i class="fas fa-tasks"></i><span
                                        style="font-size:13px;"> Add</span><span
                                        style="font-size:22px;font-family: 'cursive';">&nbsp;Timeline</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fas fa-stream"></i><span style="font-size:13px;"> Monitor</span><span
                                style="font-size:22px;font-family: 'cursive';">&nbsp;Progress</span></a>
                        <ul class="nested-list">
                            <li><a href="monitorprogress5.php?year=<?php echo $year; ?>"><i
                                        class="fas fa-tasks"></i><span style="font-size:13px;"> Semester
                                    </span><span style="font-size:22px;font-family: 'cursive';">&nbsp;5</span></a>
                            </li>
                            <li><a href="monitorprogress6.php?year=<?php echo $year; ?>"><i
                                        class="fas fa-tasks"></i><span style="font-size:13px;"> Semester
                                    </span><span style="font-size:22px;font-family: 'cursive';">&nbsp;6</span></a>
                            </li>
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
        <div style="text-align:right">
        <span class="tooltip fa fa-link" style="font-size:20px">
            <span class="tooltiptext"></span>
            </span>
        </div>
            <?php
        if(isset($_GET['fsem'])) {?>
            <b><a href="newhome.php<?php echo '?year='.$year ?>" style="font-size: 18px;color:black;">Semester 5
                    | </a>
                <a href="newhome.php<?php echo '?year='.$year.'&fsem=6' ?>" style="font-size: 15px;color:blue">Semester
                    6</a></b>
            <?php }
        else{?>
            <b><a href="newhome.php<?php echo '?year='.$year ?>" style="font-size: 18px;color:blue;">Semester 5
                    | </a>
                <a href="newhome.php<?php echo '?year='.$year.'&fsem=6' ?>" style="font-size: 15px;color:black">Semester
                    6</a></b>

            <?php }?>
            <br>
            <br>
            <br>
            <div style="display:flex">
                <div>
                    <form>
                        <label for="mentorFilter">Filter by Mentor:</label>
                        <select id="mentorFilter" onchange="redirectToNewHome()">
                            <?php
        if(isset($_GET['mname'])) {
            $midd=$_GET['mname'];
            if($midd==0){
                echo '<option value="' . $mentor['id'] . '">Not Assign Groups</option>';
            }
            else{
            $mentorNamesQuery = "SELECT id, CONCAT(firstname, ' ', lastname) AS mentorName FROM mentor where id=$midd";
            $mentorNamesResult = mysqli_query($con, $mentorNamesQuery);
            while ($mentor = mysqli_fetch_assoc($mentorNamesResult)) {
                echo '<option value="' . $mentor['id'] . '">' . $mentor['mentorName'] . '</option>';
            }}
        }
        else{
            $stat='status';
            $mentorNamesQuery = "SELECT id, CONCAT(firstname, ' ', lastname) AS mentorName FROM mentor where $stat!='remove'";
            $mentorNamesResult = mysqli_query($con, $mentorNamesQuery);
        }?>
                            <option value="Yes">All Mentors</option>
                            <option value="0">Not Assign Group</option>
                            <?php
        $stat='status';
        $mentorNamesQuery = "SELECT id, CONCAT(firstname, ' ', lastname) AS mentorName FROM mentor  where $stat!='remove'";
        $mentorNamesResult = mysqli_query($con, $mentorNamesQuery);
        while ($mentor = mysqli_fetch_assoc($mentorNamesResult)) {
            echo '<option value="' . $mentor['id'] . '">' . $mentor['mentorName'] . '</option>';
        }
        ?>
                        </select>
                    </form>
                </div>
                <div style="margin-left:50px">
                    <form>
                        <label for="projectFilter">Filter by Project Details:</label>
                        <select id="projectFilter" onchange="redirectToNewHomePro()">
                            <?php
        if(isset($_GET['pname'])) {
            $pidd=$_GET['pname'];
            if($pidd==0){
                echo '<option value="">All Groups</option>';
            }
            else if($pidd==1){
                echo '<option value="'. $pidd.'">Project title final groups</option>';
            }
            else{
                echo '<option value="'. $pidd.'">Project title not final groups</option>';
            }
        }
        ?>
                            <option value="Yes">All Groups</option>
                            <option value="1">Project title final groups</option>
                            <option value="2">Project title not final groups</option>

                        </select>
                    </form>
                </div>
               
            </div>


            <script>
            function redirectToNewHome() {
                var selectedMentor = document.getElementById("mentorFilter").value;
                var year = <?php echo $year ?>;
                var fsem =
                    "<?php echo isset($_GET['fsem']) ? $_GET['fsem'] : ''; ?>"; // Get the fsem variable from PHP
                if (selectedMentor === "Yes") {
                    if (fsem === "6") {
                        window.location.href = "newhome.php?year=" + year + "&fsem=6";
                    } else {
                        window.location.href = "newhome.php?year=" + year;
                    }
                } else {
                    var mentorName = encodeURIComponent(selectedMentor);
                    if (fsem === "6") {
                        window.location.href = "newhome.php?mname=" + mentorName + "&year=" + year + "&fsem=6";
                    } else {
                        window.location.href = "newhome.php?mname=" + mentorName + "&year=" + year;
                    }
                }
            }

            function redirectToNewHomePro() {
                var selectedMentor = document.getElementById("projectFilter").value;
                var year = <?php echo $year ?>;
                var fsem =
                    "<?php echo isset($_GET['fsem']) ? $_GET['fsem'] : ''; ?>"; // Get the fsem variable from PHP
                if (selectedMentor === "Yes") {
                    if (fsem === "6") {
                        window.location.href = "newhome.php?year=" + year + "&fsem=6";
                    } else {
                        window.location.href = "newhome.php?year=" + year;
                    }
                } else {
                    var pName = encodeURIComponent(selectedMentor);
                    if (fsem === "6") {
                        window.location.href = "newhome.php?pname=" + pName + "&year=" + year + "&fsem=6";
                    } else {
                        window.location.href = "newhome.php?pname=" + pName + "&year=" + year;
                    }
                }
            }
            </script>


            <br>
            <div style="padding:10px">
                <span>Note<i style="color:red;">*</i></span><br>
                <span><i class="fa-solid fa-square" style="color:#b3b3b3"></i> Submitted<i>(Student submit task
                        but
                        mentor review pending..)</i></span><br>
                <span><i class="fa-solid fa-square" style="color:#e98f8f"></i> Reviewed<i>(Mentor review task
                        and said
                        changes required..)</i></span><br>
                <span><i class="fa-solid fa-square" style="color:#6db3d5"></i> Resubmitted<i>(Student resubmit
                        task
                        after making changes)</i></span><br>
                <span><i class="fa-solid fa-square" style="color:#7cd56d"></i> Approved<i>(Mentor approved the
                        task)</i></span>
            </div>
            <br>
            <hr>
            <div style="display:flex;width:100%">
                <div style="width:20%">
                    <span><i class="fa-solid fa-square" style="color:#b3b3b3"></i>&nbsp;&nbsp;&nbsp;
                        Submitted</span>
                </div>
                <div style="width:20%">
                    <span><i class="fa-solid fa-square" style="color:#e98f8f"></i>&nbsp;&nbsp;&nbsp;
                        Reviewed</span>
                </div>
                <div style="width:20%">
                    <span><i class="fa-solid fa-square" style="color:#6db3d5"></i>&nbsp;&nbsp;&nbsp;
                        Resubmitted</span>
                </div>
                <div style="width:20%">
                    <span><i class="fa-solid fa-square" style="color:#7cd56d"></i>&nbsp;&nbsp;&nbsp;
                        Approved</span>
                </div>
            </div>
            <hr> <br>
            <div></div>
            <table id="forsearch">
                <tr>
                    <th style="width:30px">Group Number</th>
                    <th style="width:150px">Project Title</th>
                    <th style="width:150px">Mentor name</th>
                    <th style="width:400px">Member Name</th>
                    <?php
                    if(isset($_GET['fsem'])) {
                    $selectWeekQuery = "SELECT * FROM `timeline` where year=$year AND semester=6 ORDER BY weeknumber ASC";
                    $weeksResult = mysqli_query($con, $selectWeekQuery);
                    }
                    else{
                        $selectWeekQuery = "SELECT * FROM `timeline` where year=$year AND semester=5 ORDER BY weeknumber ASC";
                        $weeksResult = mysqli_query($con, $selectWeekQuery);  
                    }
                    while ($week = mysqli_fetch_assoc($weeksResult)) {
                    ?>
                    <th style="width:150px"><?php echo 'Week '.$week['weeknumber']?></th>
                    <?php } ?>
                </tr>
                <?php
                if(isset($_GET['mname'])) {
                    $midd=$_GET['mname'];
                    $selectGroupQuery = "SELECT * FROM `grouptable` where year=$year AND mentorid=$midd ORDER BY groupno ASC";
                    $GroupQuery = mysqli_query($con, $selectGroupQuery);
                }
                else if(isset($_GET['pname'])) {
                    $pidd=$_GET['pname'];
                    if($pidd==1){
                        $selectGroupQuery = "SELECT * FROM `grouptable` where year=$year AND projecttitle IS NOT NULL AND projecttitle != '' ORDER BY groupno ASC";
                        $GroupQuery = mysqli_query($con, $selectGroupQuery);
                    }
                    else{
                        $selectGroupQuery = "SELECT * FROM `grouptable` WHERE year = $year AND projecttitle = '' ORDER BY groupno ASC";
                        $GroupQuery = mysqli_query($con, $selectGroupQuery);
                    }
                }
                else{
                    $selectGroupQuery = "SELECT * FROM `grouptable` where year=$year ORDER BY groupno ASC";
                    $GroupQuery = mysqli_query($con, $selectGroupQuery);
                }
                    while ($Group = mysqli_fetch_assoc($GroupQuery)) {
                            $count=0;
                            $gr=$Group['groupno']; 
                              $selectStudentQuery = "SELECT * FROM `student` WHERE `groupno` = $gr AND `year` = $year ORDER BY `rollno` ASC";
                              $studentsResult = mysqli_query($con, $selectStudentQuery);
                               while ($stud = mysqli_fetch_assoc($studentsResult)){
                                      $count++;
                              }?>

                <tr>
                    <td rowspan="<?php echo $count; ?>"><?php echo $Group['groupno'];?></td>
                    <td rowspan="<?php echo $count; ?>"><?php
                                                if($Group['projecttitle']){
                                                echo $Group['projecttitle'];
                                                
                                                }
                                                else{
                                                    ?>
                        <a href="addproject.php?year=<?php echo $year ?>&g_id=<?php echo $Group['id']; ?>">Add
                            Project
                            Details</a>
                        <?php 
                                                }?>
                    </td>
                    <td rowspan="<?php echo $count; ?>"><?php 
                                            if($Group['mentorid'] == 0)
                                            {  ?>
                        <a href="assignmentor.php?g_id=<?php echo $Group['groupno']; ?>&year=<?php echo $year; ?>">assign
                            mentor</a>

                        <?php
                                            }
                                            else{
                                                $gmen=$Group['mentorid'];
                                                $selectMentorQuery = "SELECT * FROM mentor where id =  $gmen ";
                                                $mentorsResult = mysqli_query($con, $selectMentorQuery);
                                                while ($menn = mysqli_fetch_assoc($mentorsResult)) 
                                                 {  
                                                    $mgen=$menn['gender'];
                                                    if($mgen=='male')
                                                    {
                                                        echo 'Mr.';echo ' ';
                                                    }else{
                                                        echo 'Ms.';echo ' ';
                                                    }
                                                        echo $menn['firstname']; echo ' '; echo $menn['lastname'] ; 
                                                  }
                                               } ?>
                    </td>
                    <?php     $gr=$Group['groupno']; 
                              $selectStudentQuery = "SELECT * FROM `student` WHERE `groupno` = $gr AND `year` = $year ORDER BY `rollno` ASC";
                              $studentsResult = mysqli_query($con, $selectStudentQuery);
                              $sid=0;
                               while ($stud = mysqli_fetch_assoc($studentsResult)){
                                $statusf=' ';
                                if($stud['status']!='Regular'){
                                    $statusf=' [C]';
                                }
 
                                $sid= $stud['id'];
                                     ?> <td>
                        <?php echo $stud['rollno']; echo ' - '; echo $stud['firstname']; echo ' '; echo $stud['middlename'] ; echo ' '; echo $stud['lastname'] ;echo $statusf; ?>
                    </td> <?php
                                    break;
                              }?>

                    <?php 
                     if(isset($_GET['fsem'])) {
                        $selectWQuery = "SELECT * FROM `timeline` where year=$year AND semester=6 ORDER BY weeknumber ASC";
                        $wResult = mysqli_query($con, $selectWQuery);
                        }
                        else{
                            $selectWQuery = "SELECT * FROM `timeline` where year=$year AND semester=5 ORDER BY weeknumber ASC";
                            $wResult = mysqli_query($con, $selectWQuery);
                        }

                    while ($week = mysqli_fetch_assoc($wResult)) {
                        
                       
                        $wid=$week['id'];
                        $selectWQuery = "SELECT * FROM `weeklydiary` where studentid=$sid AND weekid=$wid";
                        $WResult = mysqli_query($con, $selectWQuery);
                        if (mysqli_num_rows($WResult) > 0) {
                            $Wchecked = mysqli_fetch_assoc($WResult);
                                    if($Wchecked['remark']=='viewed'){
                                    
                            
                                    ?>
                    <td style="background-color:#e98f8f;">

                        <?php
                                    }
                                    elseif($Wchecked['remark']=='approved'){
                                        ?>
                    <td style="background-color:#7cd56d;">
                         <?php
                                    }
                                    elseif($Wchecked['remark']=='updated'){
                                        ?>
                    <td style="background-color:#6db3d5;">
                        <?php
                                    }
                                    else{
                                        ?>
                    <td style="background-color:#b3b3b3;">

                        <?php
                                    }
                            }
                            else{
                                ?>
                    <td>
                        <span><i></i></span>
                        <?php
                            }  
                    ?>

                        <?php } ?>
                </tr>
                <?php
                mysqli_data_seek($studentsResult, 1);
                $siid=0;
                while ($stud = mysqli_fetch_assoc($studentsResult)) {
                    $siid=$stud['id'];
                    ?>
                <tr>
                    <td><?php echo $stud['rollno']; echo ' - '; echo $stud['firstname']; echo ' '; echo $stud['middlename'] ; echo ' '; echo $stud['lastname'] ; ?>
                    </td>
                    </td>

                    <?php
                      mysqli_data_seek($weeksResult,0);
                    while ($week = mysqli_fetch_assoc($weeksResult)) {
                  
                        $wid=$week['id'];
                        $selectWQuery = "SELECT * FROM `weeklydiary` where studentid=$siid AND weekid=$wid";
                        $WResult = mysqli_query($con, $selectWQuery);
                        if (mysqli_num_rows($WResult) > 0) {
                            $Wchecked = mysqli_fetch_assoc($WResult);
                                    if($Wchecked['remark']=='viewed'){
                                    
                            
                                    ?>
                    <td style="background-color:#e98f8f">
                        <?php
                                    }
                                    elseif($Wchecked['remark']=='approved'){
                                        ?>
                    <td style="background-color:#7cd56d;">

                        <?php
                                    }
                                    elseif($Wchecked['remark']=='updated'){
                                        ?>
                    <td style="background-color:#6db3d5;">

                        <?php
                                    }
                                    else{
                                        ?>
                    <td style="background-color:#b3b3b3;">
                        </span>
                        <?php
                                    }
                            }
                            else{
                                ?>
                    <td>
                        <span></span>
                        <?php
                            }  
                    ?>
                        <?php } ?>

                </tr>


                <?php
                }
             } ?>

            </table>
        </div>
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var tooltips = document.querySelectorAll('.fa.fa-link');
    tooltips.forEach(function(tooltip) {
        var tooltipContent = tooltip.querySelector('.tooltiptext');
        tooltipContent.innerHTML = '<a href="../student/studentform.php" style="font-family: inherit;">Student&nbsp;&nbsp;Registration&nbsp;&nbsp;form</a><br><br><a href="../mentor/mentorform.php" style="font-family: inherit;margin-top:10px;">Mentor&nbsp;&nbsp;Registration&nbsp;&nbsp;form</a>';
    });
});
</script>
</html>