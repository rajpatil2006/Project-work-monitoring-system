<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management System - Admin Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add jQuery code for animations or any other dynamic behavior
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
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

        .overview {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Add more styles for other sections like .students, .timeline, .notification, etc. */

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* Add FontAwesome icons */
       

table {
            width:100%;
            border-collapse: collapse;
            margin-top: 20px;
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
    /* Remove the fixed height */
    width: max-content;
    background-color: #2c3e50;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    border-top-right-radius: 20px;
    overflow: auto;
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

        /* Highlight the current page */
        #menu .active {
            background-color: #555;
        }
        h1 {
            text-align: center;
        }
     

        form {
            border: 2px solid #ccc; /* You can customize the color and width of the border */
                 padding: 20px; /* Optional: Add padding to the form for better aesthetics */
             box-sizing: border-box; /* Optional: Include padding and border in the element's total width and height */
            width:70%;
            margin: 0 auto;
            margin-bottom: 200px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
        }
        textarea {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            height: 100px;
        }
        #reasonForDelay {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            height: 50px;
        }
        #correctiveMeasures {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            height: 50px;
        }
      
        input[type="submit"] {
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
       


    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add jQuery code for animations or any other dynamic behavior
        });
    </script>
</head>
<?php
include 'config.php';

$year = $_GET['year'];
$groupId = $_GET['g_id'];

$selectQuery = "SELECT * FROM grouptable WHERE id = $groupId";
$Result = mysqli_query($con, $selectQuery);
$row = mysqli_fetch_assoc($Result)
?>
<body>

    <header >
        <h2> Welcome Admin - Add Project Details</h2>
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
        <h1>Add Project Details</h1>
    <form method="POST">
        <div style="display:flex;margin-top:10px;">
        <label for="weekNo">Group No:<span style="color:red;">*</span></label>
        <input type="text" id="weekNo" name="groupno" value="<?php echo $row['groupno']; ?>" style="width:auto;margin-left:20px">
            </div>
            <label for="weekNo">Project Title:<span style="color:red;">*</span></label>
            <input type="text" id="weekNo" name="projectt" required>
            <label for="details">Project Details:<span style="color:red;">*</span></label>
        <textarea id="details" name="detailss" required></textarea>
<div style="display:flex">
<label for="sponsors">Any Sponsorship? </label>
<input type="radio" id="yes" name="sponsorship" value="yes">
<label for="yes">Yes</label>
<input type="radio" id="no" name="sponsorship" value="no" checked>
<label for="no">No</label>
    </div>
<div id="additionalFields" style="display: none;">
    <label for="sname">Sponsorship Name:</label>
    <input type="text" id="field1" name="sname" placeholder="no" value="no" required>
    <label for="field2">Sponsorship Details:</label>
    <textarea id="field2" name="sdetails" required>no</textarea>
</div>

<script>
    $(document).ready(function() {
        $('input[name="sponsorship"]').change(function() {
            if ($(this).val() === 'yes') {
                $('#additionalFields').show();
            } else {
                $('#additionalFields').hide();
            }
        });
    });
</script>

        <input type="hidden" name="year" value="<?php echo $year; ?>">
        <input type="hidden" name="g_id" value="<?php echo $groupId; ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
        </div> 
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    extract($_POST);

    // Check if sponsorship is selected
    if(isset($sponsorship) && $sponsorship === 'yes') {
        // Check if both sponsorship name and details are 'no'
        if($sname === 'no' && $sdetails === 'no') {
            echo "<script>";
            echo "window.alert('Sponsorship details are empty.');";
            echo "</script>";
        } else {
            // If sponsorship is selected and both sponsorship name and details contain data, update all details including sponsorship
            $updateQuery = "UPDATE grouptable SET sponsershipname='$sname', sponsershipdetail='$sdetails', projecttitle='$projectt', projectdetail='$detailss' WHERE id='$g_id'";
            // Execute the update query
            $updateResult = mysqli_query($con, $updateQuery);

            if($updateResult) {
                echo "<script>";
                echo "window.alert('Project details and sponsership details is added successfully.');";
                echo "window.location.href = 'groupmanagement.php?year=$year';";
                echo "</script>";
            } else {
                echo "<script>";
                echo "window.alert('Error updating data.');";
                echo "</script>";
            }
        }
    } else {
        // If sponsorship is not selected, update project details only
        $updateQuery = "UPDATE grouptable SET projecttitle='$projectt', projectdetail='$detailss' WHERE id='$g_id'";
        // Execute the update query
        $updateResult = mysqli_query($con, $updateQuery);

        if($updateResult) {
            echo "<script>";
            echo "window.alert('Project details added successfully.');";
            echo "window.location.href = 'groupmanagement.php?year=$year';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "window.alert('Error updating data.');";
            echo "</script>";
        }
    }
}

?>

<script>
     
</script>
