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
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            color: #333;
        }
        input[type="checkbox"]{
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
    flex: 1;
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
        .containerf {
   display:flex
}
        .righttcon {
            flex: 1; /* Each block takes up equal space */
    background-color: #f2f2f2;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px; /* Add margin between the blocks */
}
        .leftcon {
            flex: 1; /* Each block takes up equal space */
    background-color: #f2f2f2;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px; /* Add margin between the blocks */
   padding-left: 20px; /* Add margin between the blocks */
}

    </style>
</head>

<?php
include "config.php";
$mentorId = $_GET['mentorId'];
$weekId = $_GET['weekId'];
$year = $_GET['year'];
$groupNo = $_GET['groupNo'];

$selectStudentQuery = "SELECT * FROM `student` where groupno=$groupNo ORDER BY rollno ASC";
$studentsResult = mysqli_query($con, $selectStudentQuery);




?>

<body>
    <header>
         <h2>Welcome <?php
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
                echo $rowM['firstname'].' '.$rowM['lastname']?> - Task Management</h2>
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
           
        <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">View Task</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Add Task</button>

</div>

<!-- Tab content -->
<div id="London" class="tabcontent">
<div style="padding:10px">
            <span>Note<i style="color:red;">*</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#b3b3b3"></i> Submitted<i>(Student submit task but you not view..)</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#e98f8f"></i> Viewed<i>(You review task and said changes required..)</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#7cd56d"></i> Approved<i>(You approved the task)</i></span><br>
            <span><i class="fa-solid fa-square" style="color:#6db3d5"></i> Updated<i>(Student resubmit task after making changes)</i></span>
            </div> 
<table id="actionTable">
                    <thead>
                        <tr>
                          
                            <th>Task Name</th>
                            <th>Task Details</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <?php mysqli_data_seek($studentsResult, 0);
                            while ($student = mysqli_fetch_assoc($studentsResult)) { ?>
                            <th><?php echo $student['firstname'].' '.$student['lastname']; ?></th>
                            
                           <?php } ?>
                        </tr>
                    </thead>
                    <?php $selectWeekQuery = "SELECT * FROM `taskdetails` where groupNo=$groupNo AND year=$year AND timelineid=$weekId";
                        
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
                                     FROM taskdetails where id=$id";
                                     $date = mysqli_query($con, $selectddateQuery);
                                     $row1 = mysqli_fetch_assoc($date);
                                     $weekId=$week['id'];
                                ?>
                               <!-- Inside the while loop where you display week details -->
                            
                            
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
                                $sid= $student['id'];
                                $wid=$week['id'];
                                $selectWQuery = "SELECT * FROM `taskstatus` where studentid=$sid AND taskid=$wid";
                                $WResult = mysqli_query($con, $selectWQuery);
                                if (mysqli_num_rows($WResult) > 0) {
                                    $Wchecked = mysqli_fetch_assoc($WResult);
                                           if($Wchecked['remark']=='approved'){
                                                ?>
                                            <td style="background-color:#7cd56d;">
                                            <?php $weekId = $_GET['weekId'];?>
                                            <?php $wId = $Wchecked['id'];?>
                                            <span style="background-color:yellow"><a href="viewtask.php?weekId=<?php echo $weekId ?>&year=<?php echo $year ?>&studentId=<?php echo $sid ?>&groupNo=<?php echo $groupNo ?>&wId=<?php echo $wId ?>&mentorId=<?php echo $mentorId;?>">View Task</a></span>
                                            <?php
                                            }
                                            elseif($Wchecked['remark']=='updated'){
                                                ?>
                                            <td style="background-color:#6db3d5;">
                                            <?php $weekId = $_GET['weekId'];?>
                                            <?php $wId = $Wchecked['id'];?>
                                            <span style="background-color:yellow"><a href="reviewupdatedtask.php?weekId=<?php echo $weekId ?>&year=<?php echo $year ?>&studentId=<?php echo $sid ?>&groupNo=<?php echo $groupNo ?>&wId=<?php echo $wId ?>&mentorId=<?php echo $mentorId;?>">Review Task</a></span>
                                            <?php
                                            }
                                            elseif($Wchecked['remark']=='viewed'){
                                                ?>
                                            <td style="background-color:#e98f8f;">
                                            <?php $weekId = $_GET['weekId'];?>
                                            <?php $wId = $Wchecked['id'];?>
                                            <span style="background-color:yellow"><a href="viewtask.php?weekId=<?php echo $weekId ?>&year=<?php echo $year ?>&studentId=<?php echo $sid ?>&groupNo=<?php echo $groupNo ?>&wId=<?php echo $wId ?>&mentorId=<?php echo $mentorId;?>">View Task</a></span>
                                            <?php
                                            }
                                            elseif($Wchecked['remark']=='submitted'){
                                                ?>
                                            <td style="background-color:#b3b3b3;">
                                            <?php $weekId = $_GET['weekId'];?>
                                            <?php $wId = $Wchecked['id'];?>
                                            <span style="background-color:yellow"><a href="reviewtask.php?weekId=<?php echo $weekId ?>&year=<?php echo $year ?>&studentId=<?php echo $sid ?>&groupNo=<?php echo $groupNo ?>&wId=<?php echo $wId ?>&mentorId=<?php echo $mentorId;?>">Review Task</a></span>
                                            <?php
                                            }
                                            else{
                                                ?>
                                                <td>
                                                <span style="color:red">Not Submit</span> 
                                                <?php
                                            }
                                    }
                                    else{
                                        ?>
                                        <td>
                                        <span><i>Not Assigned</i></span>
                                            <?php
                                    }  
                                    ?>
                       
                    </td>
                    
                   <?php } ?>

                            </tbody>
                                
                                <?php
                                $i = $i + 1;
                            }?>

                </table>
               
</div>

<div id="Paris" class="tabcontent">
<div class="containerf">
<div class="leftcon">  
    <form method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="taskname">Task Name:</label>
                <input type="text" name="taskname" required=""><br>
            </div>
            <div class="form-group">
                <label for="startdate">Start Date:</label>
                <input type="date" id="checkin-date" name="startdate" oninput="calculateCheckoutDate()" required><br>
            </div>
            <div class="form-group">
                <label for="enddate">End Date:</label>
                <input type="date" id="checkout_date" name="enddate" required><br>
            </div>
            <div class="form-group">
                <label for="details">Task Details</label>
                <textarea name="details" placeholder="You need to provide task details here.." required="" rows="6"></textarea>
            </div>
            <input type="hidden" name="year" value="<?php echo $year; ?>">
            <input type="hidden" name="semester" value="<?php echo $semester; ?>">
            <input type="hidden" name="mentorId" value="<?php echo $mentorId; ?>">
            <input type="hidden" name="mentorId" value="<?php echo $mentorId; ?>">
            <input type="hidden" name="groupNo" value="<?php echo $groupNo; ?>">
            <?php $weekId = $_GET['weekId'];?>
            <input type="hidden" name="weekId" value="<?php echo $weekId; ?>">
           
        </div>
<div class="righttcon">  
    <div class="form-group">
                            <label>Assign Task to</label>
                            <ul>
                                <?php
                                mysqli_data_seek($studentsResult, 0);
                            while ($student = mysqli_fetch_assoc($studentsResult)) {
?>
 <li><input type="checkbox" name="assigncheck[]" value="<?php echo $student['id']; ?>"><?php echo $student['firstname'].' '.$student['lastname']; ?></li>

                            <?php }?>
    
</ul>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Add">
            </div>
                            </form>
        </div>

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

</script>
<?php
include "config.php";

if(isset($_POST['submit'])) {
    // Extract form data
    extract($_POST);
    $tn='name';
    $ye='year';
    $st='status';
    // Insert data into database groupno	mentorid	timelineid	startdate	enddate	name	details	
    $add = mysqli_query($con, "INSERT INTO taskdetails($tn,startdate,enddate, details, groupno,timelineid,mentorid,$ye,$st) VALUES ('$taskname', '$startdate', '$enddate', '$details', '$groupNo', '$weekId', '$mentorId','$year','no')") or die(mysqli_error($con));

    if ($add) {
        $last_insert_id = mysqli_insert_id($con);
        $selecttaskQuery = "SELECT * FROM `taskdetails` where id=$last_insert_id";
        $taskResult = mysqli_query($con, $selecttaskQuery);
        $task = mysqli_fetch_assoc($taskResult);
        $taid=$task['id'];
        $taskname = mysqli_real_escape_string($con, $_POST['taskname']);
        foreach ($assigncheck as $language) {
            $add1 = mysqli_query($con, "INSERT INTO taskstatus(taskid,studentid,remark,file_name,file_path) VALUES ('$taid', '$language','No','no','no')") or die(mysqli_error($con));

        }
        if($add1){
            echo "<script>";
            echo "window.alert('Task Added Successful.');";
            echo "window.location.href = 'taskmanage.php?year=$year&groupNo=$groupNo&weekId=$weekId&mentorId=$mentorId';";
            //echo "window.location.href = 'taskmanage1.php?semester=$semester&year=$year&groupNo=$groupNo&weekId=$weekId&mentorId=$mentorId');"; // Delayed redirection by 1 second (1000 milliseconds)
            echo "</script>";
        }
    } else {
        echo "<script>";
        echo "window.alert('Data error....!');";
        echo "</script>";
    }
}

?>
 <script>
        function validateForm() {
            // Get all checkboxes with the name "assigncheck"
            var checkboxes = document.querySelectorAll('input[name="assigncheck[]"]');
            var isChecked = false;

            // Loop through each checkbox to check if at least one is checked
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });

            // If no checkbox is checked, display an alert and prevent form submission
            if (!isChecked) {
                alert("Please select at least one option.");
                return false;
            }
        }
    </script>