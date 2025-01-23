<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Management System - Admin Dashboard</title>
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

    #groupTable {
        width: 95%;
    }

    #groupTable tr:nth-child(even) {
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
    </style>
</head>

<?php
include "config.php";
$year = $_GET['year']; 
// Retrieve all students
$selectGroupQuery = "SELECT * FROM `grouptable` where year=$year ORDER BY groupno ASC";
$groupsResult = mysqli_query($con, $selectGroupQuery);
$year = $_GET['year']; 



?>

<body>
    <header>
        <h2> Welcome Admin - Group Management</h2>
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

        <div id="content">
            <hr>
            <div style="display:flex;width:100%">


                <div style="width:18%">
                    <label>Search by group : </label>
                    <input type="text" id="nametosearchgr" name="nametosearchgr" placeholder="Enter Group Number..."
                        style="width:150px;margin-top:15px">
                </div>
                <div style="width:25%">
                    <label>Search by student/roll number: </label>
                    <input type="text" id="nametosearchstud" name="nametosearchstud"
                        placeholder="Enter Student Name or Roll No..." style="width:200px;margin-top:15px">
                </div>
                <div style="width:25%">
                    <label>Search by Project: </label>
                    <input type="text" id="nametosearch" name="nametosearch" placeholder="Enter Project Name..."
                        style="width:200px;margin-top:15px">
                </div>
                <div style="width:30%">
                    <label for="mentorFilter">Filter by Mentor:</label><br>
                    <select id="mentorFilter" style="width:200px;margin-top:15px">
                        <option value="">All Mentors</option>
                        <option value="assign mentor">Not Assign Group</option>
                        <!-- Add options for each mentor name dynamically -->
                        <?php
                    $mentorNamesQuery = "SELECT DISTINCT CONCAT(firstname, ' ', lastname) AS mentorName FROM mentor";
                    $mentorNamesResult = mysqli_query($con, $mentorNamesQuery);
                    while ($mentor = mysqli_fetch_assoc($mentorNamesResult)) {
                    echo '<option value="' . $mentor['mentorName'] . '">' . $mentor['mentorName'] . '</option>';
                }
                ?>
                    </select>

                </div>


            </div>
            <hr>
            <br>
            <table id="groupTable" style="margin-left:25px">
                <thead>
                    <tr>
                        <th style="width:0">Group Number</th>
                        <th>Group Member </th>
                        <th>Project Title</th>
                        <th>Mentor Name</th>
                        <th>Progress</th>


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
                                            font-size: large;">
                                <?php echo $stud['rollno']; echo ' - '; echo $stud['firstname']; echo ' '; echo $stud['lastname'] ; ?>
                            </span><?php echo '<br>' ; 
                                         }
                                      ?>
                        </td>
                        <td><?php
                                                if($group['projecttitle']){
                                                echo $group['projecttitle'];
                                                ?>
                            <br><br>
                            <a href="projectupd.php?groupId=<?php echo $group['id']; ?>&year=<?php echo $year; ?>"
                                style="background-color:#6db3d5;color:black"><b>View/Update</b></a>

                            <?php
                                                }
                                                else{
                                                    ?>
                            <a href="addproject.php?year=<?php echo $year ?>&g_id=<?php echo $group['id']; ?>">Add
                                Project Details</a>
                            <?php 
                                                }?>
                        </td>
                        <td><?php 
                                            if($group['mentorid'] == 0)
                                            {  ?>
                            <a href="assignmentor.php?g_id=<?php echo $group['groupno']; ?>&year=<?php echo $year; ?>">assign
                                mentor</a>

                            <?php
                                            }
                                            else{
                                                $gmen=$group['mentorid'];
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
                                                  ?>
                            <br><br>
                            <a href="assignmentor.php?g_id=<?php echo $group['groupno']; ?>&year=<?php echo $year; ?>"
                                style="background-color:#6db3d5;color:black"><b>Update mentor</b></a>
                            <?php
                                               } ?>
                        </td>
                        <td><a
                                href="viewprogress.php?year=<?php echo $year; ?>&groupNo=<?php echo $group['groupno']; ?>"><b>View</b></a>
                        </td>





                        <!-- Add more columns as needed -->
                    </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </div>
</body>
<script>
// Function to filter table rows based on input value
function filterTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("nametosearch");
    filter = input.value.toUpperCase();
    table = document.getElementById("groupTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2]; // 3rd column contains the student name
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// Add event listener to input field for filtering table rows
document.getElementById("nametosearch").addEventListener("keyup", filterTable);

function filterTable1() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("nametosearchstud");
    filter = input.value.toUpperCase();
    table = document.getElementById("groupTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; // 3rd column contains the student name
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// Add event listener to input field for filtering table rows
document.getElementById("nametosearchstud").addEventListener("keyup", filterTable1);

function filterTable2() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("nametosearchgr");
    filter = input.value.toUpperCase();
    table = document.getElementById("groupTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // 3rd column contains the student name
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// Add event listener to input field for filtering table rows
document.getElementById("nametosearchgr").addEventListener("keyup", filterTable2);
</script>

</html>
<script>
document.getElementById('mentorFilter').addEventListener('change', function() {
    var mentorName = this.value.toLowerCase(); // Get selected mentor name
    var tableRows = document.getElementById('groupTable').getElementsByTagName('tr'); // Get table rows

    // Loop through each table row
    for (var i = 1; i < tableRows.length; i++) {
        var mentorCell = tableRows[i].getElementsByTagName('td')[3]; // Get mentor name cell
        if (mentorName === '' || mentorCell.textContent.toLowerCase().includes(mentorName)) {
            // Show row if mentor name matches selected value or if no filter applied
            tableRows[i].style.display = '';
        } else {
            // Hide row if mentor name does not match selected value
            tableRows[i].style.display = 'none';
        }
    }
});
</script>