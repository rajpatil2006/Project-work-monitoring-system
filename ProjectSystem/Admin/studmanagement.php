<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management -Admin Dashboard</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
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

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        overflow: hidden;
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

    #sidebar {
        width: max-content;
        background-color: #2c3e50;
        color: #fff;
        padding: 20px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        border-top-right-radius: 20px;
        height: 100%;

    }

    #sidebar::-webkit-scrollbar {
        display: none;
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


    #menu .active {
        background-color: #555;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        margin-bottom: 150px;

    }

    #table1 tr:nth-child(even) {
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
    </style>
</head>
<?php
include "config.php";
$year = $_GET['year']; 
$selectStudentsQuery = "SELECT * FROM student WHERE groupno > 0 AND year=$year ORDER BY rollno ASC";
$studentsResult = mysqli_query($con, $selectStudentsQuery);
$i=1;
?>

<body>
    <header>

        <h2>Student Management - Welcome Admin</h2>
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
            <div style="font-size:15px">
                <label>Search: </label>
                <input type="text" id="nametosearch" name="nametosearch" placeholder="Enter Name..."
                    style="width:200px">
            </div>
            <table id="table1">

                <thead>
                    <tr>
                        <th data-sort="0" style="width:0%">Sr. No.</th>
                        <th data-sort="1">Roll No.
                            <a href="#" onclick="sortTable('rollno', 'asc')" style="padding-left:15px"><i
                                    class="fas fa-sort" style="font-size:25px;color:white"></i></a>
                        </th>
                        <th data-sort="2">Enrollment No.
                            <a href="#" onclick="sortTable('enrollmentno', 'asc')" style="padding-left:15px"><i
                                    class="fas fa-sort" style="font-size:25px;color:white"></i></a>
                        </th>
                        <th data-sort="3">Full Name
                            <a href="#" onclick="sortTable('fullname', 'asc')" style="padding-left:15px"><i
                                    class="fas fa-sort" style="font-size:25px;color:white"></i></a>
                        </th>
                        <th data-sort="4">Gender</th>
                        <th data-sort="5">Mobile No.</th>
                        <th data-sort="6">Group No.
                            <a href="#" onclick="sortTable('groupno', 'asc')" style="padding-left:15px"><i
                                    class="fas fa-sort" style="font-size:25px;color:white"></i></a>
                        </th>
                        <th data-sort="7">Update</th>
                        <th data-sort="8">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php while ($student = mysqli_fetch_assoc($studentsResult)) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $student['rollno']; ?></td>
                        <td><?php echo $student['enrollmentno']; ?></td>
                        <td><?php echo $student['firstname'];echo ' ';echo $student['middlename'];echo ' '; echo $student['lastname']; ?>
                        </td>
                        <td><?php echo $student['gender']; ?></td>
                        <td><?php echo $student['mobileno']; ?></td>
                        <td><?php echo $student['groupno']; ?></td>
                        <td><a href="updatestudent.php?studentId=<?php echo $student['id']; ?>&year=<?php echo $year;?>"
                                style="color:blue;">Update</a></td>
                        <td><a href="deletestudent.php?studentId=<?php echo $student['id']; ?>&year=<?php echo $year;?>&groupNo=<?php echo $student['groupno'];?>"
                                style="color:red;">Delete</a></td>

                    </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
<script>
// Function to filter table rows based on input value
function filterTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("nametosearch");
    filter = input.value.toUpperCase();
    table = document.getElementById("table1");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3]; // 3rd column contains the student name
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
</script>

</html>