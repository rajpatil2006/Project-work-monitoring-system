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
            width:100%;
            height:50px;
            background-image: url('../images/header.jpg');
            background-size:cover;
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
    width: 100%;
    background-repeat: no-repeat;
    background-size: 200px;
    background-position: center;
    flex-grow: 1;
    padding: 20px;
    height: 100%;
    margin-bottom: 100px;
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
    width:100%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 150px;
   
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
form{
    border: 3px solid black;
    width:50%;
    margin:0 auto;
}
.form-group {
    margin-top: 20px;
    margin-left:70px;
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #666;
}

input[type="text"],
input[type="tel"],
input[type="password"]
{
  width: 70%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  color: #333;
  
}
select{
  width: 73%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  color: #333;
}

button[type="submit"] {
    margin-bottom: 200px;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:200px;
  width: 20%;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

.error-message {
  color: red;
  font-size: 14px;
  margin-top: 5px;
}

.success-message {
  color: green;
  font-size: 14px;
  margin-top: 5px;
}
    </style>
    <script>
        
        function submitForm(event) {
            var form = document.getElementById('myForm');
            var firstname = form.elements['firstname'].value.trim(); // Trim whitespace
            var lastname = form.elements['lastname'].value.trim(); // Trim whitespace
            var middlename = form.elements['middlename'].value.trim(); // Trim whitespace
            var rollno = form.elements['rollnumber'].value;
            var enrollno = form.elements['enrollmentnumber'].value;
            var gender = form.elements['gender'].value;
            var mobilenum = form.elements['mobilenumber'].value;
            var pass = form.elements['password'].value;
            var sta = form.elements['status'].value;
            var sid = form.elements['studentId'].value;
            var group = form.elements['group'].value;

             // Convert the first letter of firstname and lastname to uppercase
             firstname = firstname.charAt(0).toUpperCase() + firstname.slice(1).toLowerCase();
            lastname = lastname.charAt(0).toUpperCase() + lastname.slice(1).toLowerCase();
            middlename = middlename.charAt(0).toUpperCase() + middlename.slice(1).toLowerCase();

            var isConfirmed = confirm('Student Name: ' + firstname + ' ' + middlename + ' ' + lastname +
                '\nRoll Number: ' + rollno + '\nEnrollment Number: ' + enrollno +
                '\nGender: ' + gender + '\nMobile Number: ' + mobilenum + '\nStatus: ' +sta+ 
                '\nPassword: ' + pass + '\nGroup Number: ' + group + '\n\nDo you want to submit the form?');

            if (!isConfirmed) {
                // Prevent the form from submitting if the user clicks "Cancel"
                event.preventDefault();
            }
        }
    
          </script>
</head>
<?php
include "config.php";
$year = $_GET['year']; 
$studentId = $_GET['studentId']; 
$selectStudentsQuery = "SELECT * FROM student WHERE id=$studentId";
$studentsResult = mysqli_query($con, $selectStudentsQuery);
$student = mysqli_fetch_assoc($studentsResult);
$i=1;
?>

<body>
    <header>
         
        <h2>Update Student - Welcome Admin</h2>
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
        <form id="myForm" method="post">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" id="first-name" name="firstname" pattern="[A-Za-z]+" title="Please enter only alphabetic characters" required value="<?php echo $student['firstname'];?>" >
            </div>
            <div class="form-group">
                <label for="middlename">Middle Name</label>
                <input type="text" id="middle-name" name="middlename" pattern="[A-Za-z]+" title="Please enter only alphabetic characters" required value="<?php echo $student['middlename'];?>">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="last-name" name="lastname" pattern="[A-Za-z]+" title="Please enter only alphabetic characters" required value="<?php echo $student['lastname'];?>">
            </div>
            <div class="form-group">
                <label for="rollnumber">Roll Number</label>
                <input type="text" id="roll-number" name="rollnumber" pattern="[1-9][0-9]{0,2}"title="Please enter a valid roll number" required value="<?php echo $student['rollno'];?>">
            </div>
            <div class="form-group">
                <label for="enrollmentnumber">Enrollment Number</label>
                <input type="text" id="enrollment-number" name="enrollmentnumber" pattern="[1-9]\d{9}" title="Please enter a valid enrollment number" required value="<?php echo $student['enrollmentno'];?>">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required >
                    <option value="<?php echo $student['gender'];?>"><?php echo $student['gender'];?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mobilenumber">Mobile Number</label>
                <input type="tel" id="mobilenumber" name="mobilenumber" pattern="[789]\d{9}" title="Please enter a valid 10-digit mobile number starting with 7, 8, or 9" required value="<?php echo $student['mobileno'];?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required >
                    <option value="<?php echo $student['status'];?>"><?php echo $student['status'];?></option>
                    <option value="Regular">Regular</option>
                    <option value="CarryOn">CarryOn</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or less than 16 characters" required value="<?php echo $student['password'];?>">
            </div>
            <div class="form-group">
                <label for="password">Group</label>
                <input type="text" id="group" name="group" pattern="\d{0,3}" title="Only number allow" required value="<?php echo $student['groupno'];?>">
            </div>
             <div class="form-group">
                <label for="year">Year</label>
                <input type="text" id="year" name="year" required value="<?php echo $student['year'];?>">
                <input type="hidden" id="year" name="studentId" required value="<?php echo $student['id'];?>">
                <input type="hidden" id="year" name="Year" required value="<?php echo $year;?>">
                
            </div> 
            <button type="submit" name="submit"  onclick="submitForm(event)">Update</button>
        </form>      
            </div>    
        </div>
    </div>
</body>
</html>
<?php

  include "config.php";
  if(isset($_POST['submit']))
  {
    extract($_POST);
    $firstname1 = ucfirst(strtolower($firstname)); // Convert first letter to uppercase
            $lastname1 = ucfirst(strtolower($lastname)); // Convert first letter to uppercase
            $middlename1 = ucfirst(strtolower($middlename)); // Convert first letter to uppercase
            $pwd='password';
            $st='status';
            $yr='year';

            $update = mysqli_query($con, "UPDATE student SET 
            firstname = '$firstname1',
            middlename='$middlename1',
            lastname='$lastname1',
            rollno='$rollnumber',
            enrollmentno='$enrollmentnumber',
            gender='$gender',
            mobileno='$mobilenumber',
            $pwd='$password',
            $st='$status',
            $yr='$year',
            groupno='$group'
            WHERE id = $studentId") or die(mysqli_error($con));
       //$add=mysqli_query($con ,"insert into student(firstname,middlename,lastname,rollno,enrollmentno,gender,mobileno,password,status,year) values('$firstname1','$middlename1','$lastname1','$rollnumber','$enrollmentnumber','$gender','$mobilenumber','$password','$status','$year')")or die(mysqli_error($con));
	
	if ($update) {
		echo "<script>;";
		echo "window.alert('Data Update successfully....!');";
        echo "window.location.href = 'studmanagement.php?year=$Year';";
		echo "</script>";

	} else {
		echo "<script>;";
		echo "window.alert('Data error....!');";
		echo "</script>";
	}
  }
?>

