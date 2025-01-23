<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline Management -Admin Dashboard</title>
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
input[type="date"],
textarea,
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
            var firstname = form.elements['firstname'].value; // Trim whitespace
            var lastname = form.elements['lastname'].value; // Trim whitespace
            var email = form.elements['email'].value;
            var mobilenum = form.elements['mobilenumber'].value;
            var tid = form.elements['timeId'].value;
            
       
           
            var isConfirmed = confirm('Week Number: ' + firstname + '\nStart Date: ' + lastname + '\nEnd Date: ' + mobilenum + '\nActivity Plan: ' + email + '\n\nDo you want to submit the form?');

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
$timeId = $_GET['timeId']; 
$selectMentorsQuery = "SELECT * FROM timeline WHERE id=$timeId";
$mentorsResult = mysqli_query($con, $selectMentorsQuery);
$timeline = mysqli_fetch_assoc($mentorsResult);
$i=1;
?>

<body>
    <header>
         
        <h2>Update Timelinde Week details - Welcome Admin</h2>
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
                    <li><a href="../index.php">Log Out&nbsp;&nbsp;&nbsp;<i
                                class="fas fa-sign-out"></i></a></li>
                </ul>
            </div>
    </div>

        <div id="content">
        <form id="myForm" method="post">
            <div class="form-group">
                <label for="firstname">Week Number</label>
                <input type="text" id="first-name" name="firstname" value="<?php echo $timeline['weeknumber'];?>"  readonly style="cursor:not-allowed;"> 
            </div>
    
            <div class="form-group"> 
                <label for="lastname">Start Date</label>
                <input type="date" id="last-name" name="lastname" required value="<?php echo $timeline['startdate'];?>">
            </div>
            <div class="form-group">
                <label for="mobilenumber">End Date</label>
                <input type="date" id="mobilenumber" name="mobilenumber" required value="<?php echo $timeline['enddate'];?>">
            </div>
            <div class="form-group">
                <label for="email">Activity Plan</label>
                <textarea id="email" name="email" required><?php echo $timeline['activityplan'];?></textarea>
            </div>
                         
            <div class="form-group">
                <input type="hidden" id="year" name="timeId" required value="<?php echo $timeline['id'];?>">
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
            $yr='year';

            $update = mysqli_query($con, "UPDATE timeline SET 
            startdate = '$lastname',
            enddate='$mobilenumber',
            activityplan='$email'
            WHERE id = $timeId") or die(mysqli_error($con));
     	
	if ($update) {
		echo "<script>;";
		echo "window.alert('Week Data Update successfully....!');";
        echo "window.location.href = 'viewtimeline.php?year=$Year';";
		echo "</script>";

	} else {
		echo "<script>;";
		echo "window.alert('Data error....!');";
		echo "</script>";
	}
  }
?>

