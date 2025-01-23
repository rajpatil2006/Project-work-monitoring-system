
<?php
include "config.php";
$year=0;
// Function to display a table row with checkboxes
function displayTableRowWithCheckbox($student) {
     ?>
    <tr>
    <td><input type='checkbox' name='selected_students[]' value=<?php echo $student['rollno']; ?>></td>
    <td><?php echo $student['rollno']; ?></td>
    <td><?php echo $student['firstname'];echo ' ';echo $student['middlename'];echo ' '; echo $student['lastname']; ?></td>
    <td><?php echo $student['gender']; ?></td>
    <td><?php echo $student['status']; ?></td>
    <td><b><a href="deletenewstud.php?studentId=<?php echo $student['id']; ?>&year=<?php echo $student['year']; ?>">Delete</a></b></td>
    </tr>
<?php } 

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve selected student IDs from the form submission
    $selectedStudentIDs = isset($_POST['selected_students']) ? $_POST['selected_students'] : array();

    // Retrieve all students
    $studentsResult=mysqli_query($con,"select * from student") or die(mysqli_error($con));
    $year = isset($_POST['year']) ? $_POST['year'] : '';
    $selectQuery = "SELECT * FROM student where year=$year ORDER BY groupno ASC";
    $studeResult = mysqli_query($con, $selectQuery);

    $existingGroupNumbers = []; // Array to store existing group numbers from the database

// Assuming $studeResult is your result set from the database query
while ($stu = mysqli_fetch_array($studeResult)) {
    $existingGroupNumbers[] = $stu['groupno'];
}

// Find the first available group number
$grno = 1;
while (in_array($grno, $existingGroupNumbers)) {
    $grno++;
}
$flag=0;
// Output the result
if ($grno > 100) {
    echo "Error: No available group number found.";
} else {
    
    $toaddgroup=0;
       mysqli_data_seek($studentsResult, 0); //it use  to fetch array from first record
        while ($student = mysqli_fetch_assoc($studentsResult)) {
          
            
            if (in_array($student['rollno'], $selectedStudentIDs)) {
                       
                     
                        $srol=$student['rollno'];
                       
                        $upd=mysqli_query($con ,"update student set
		                 groupno='". $grno."' where rollno=$srol")or die(mysqli_error($con));   
                        $toaddgroup=1;
                       
                }
        }
        if($toaddgroup==1)
        {
            
            $add=mysqli_query($con ,"insert into grouptable(groupno,year) values('$grno','$year')")or die(mysqli_error($con));
            $flag=1;
        }
        

}
if($flag==1){
   
     echo "<script>";
	echo "alert('Group Form Successful.');";
             echo "window.location.href = 'groupmanagement.php?year=$year';";
			echo "</script>";
}
else{
    echo "<script>";
    echo "alert('Failed to form group.');";
    echo "window.location.href = 'group.php?year=$year';";
    echo "</script>";
}
}
 ?>
<?php
$year = isset($_GET['year']) ? $_GET['year'] : '';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>New Student-Welcome Admin</title>
    <style>
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

    
        table {
            width:100%;
    border-collapse: collapse;
    margin-top: 20px;
        }
        #table1 tr:nth-child(even){background-color: #f0efff;}

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
        #menu .active {
            background-color: #555;
        }
        .btn a:hover{
            background-color:#7d8283;
        }
        form{
            margin-bottom: 150px
        }

    </style>
</head>

<body>
    <header>
        <h2>Welcome Admin- Newly Registered Students</h2>
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
                <div style="display:flex">
                    <div>
                    <h3>Select to form group</h3>
                    </div>
                    <div id="search-form" style="margin-left:100px">
                    <br>
                    <label>Search: </label>
                    <input type="text" id="nametosearch" name="nametosearch" placeholder="Enter Name...">
    
                    </div>
                </div>
                <!-- Form to allow user to select records -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="hidden" name="year" value="<?php echo $year; ?>">
                    <table id="table1">
                        <thead>
                            <tr>
                                <th style="width:0%">Select</th>
                                <th style="width:0%">Roll Number</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Retrieve all students
                            $selectStudentsQuery = "SELECT * FROM student where groupno=0 AND year=$year ORDER BY `firstname` ASC";
                            $studentsResult = mysqli_query($con, $selectStudentsQuery);

                            // Display table rows with checkboxes
                            while ($student = mysqli_fetch_assoc($studentsResult)) {
                                displayTableRowWithCheckbox($student);
                            }
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <button type="submit" style="background-color:#5ef2ff;font-size:23px" class="btn">Submit</button>
                </form>
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
    </script>
    
</html>
