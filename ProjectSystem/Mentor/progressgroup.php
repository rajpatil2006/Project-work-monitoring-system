<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Progress Management System - Mentor Dashboard</title>
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
                echo $rowM['firstname'].' '.$rowM['lastname']?> - Monitor Progress</h2>
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
        if(isset($_GET['fsem'])) {?>
            <b><a href="progressgroup.php<?php echo '?year='.$year.'&mentorId='.$mentorId ?>" style="font-size: 18px;color:black;">Semester 5
                    | </a>
                <a href="progressgroup.php<?php echo '?year='.$year.'&fsem=6&mentorId='.$mentorId ?>" style="font-size: 15px;color:blue">Semester
                    6</a></b>
            <?php }
        else{?>
            <b><a href="progressgroup.php<?php echo '?year='.$year.'&mentorId='.$mentorId ?>" style="font-size: 18px;color:blue;">Semester 5
                    | </a>
                <a href="progressgroup.php<?php echo '?year='.$year.'&fsem=6&mentorId='.$mentorId ?>" style="font-size: 15px;color:black">Semester
                    6</a></b>

            <?php }?>
            <br>
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
            <table>
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
                    $selectGroupQuery = "SELECT * FROM `grouptable` where year=$year AND  mentorid=$mentorId ORDER BY groupno ASC";
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
                                    $statusf='[C]';
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
                        <!-- <input type="button" id="btn-2"  name="view" onclick="openViewPage(5,<?php echo $week['id']; ?>,<?php echo $sid; ?>)" value="View Diary" > -->
                        <?php
                                    }
                                    elseif($Wchecked['remark']=='updated'){
                                        ?>
                    <td style="background-color:#6db3d5;">
                        <!-- <input type="button" id="btn-2"  name="view" onclick="openViewPage(5,<?php echo $week['id']; ?>,<?php echo $sid; ?>)" value="View Diary" > -->
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
</html>
