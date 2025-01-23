<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View weekly diary - Student Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  
   
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
    margin-bottom: 200px;
        }

        .students {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
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

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            font-size: 15px;
            background-color: #dddddd;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 50px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ffd180;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        form {
            border: 2px solid #ccc;
            /* You can customize the color and width of the border */
            padding: 20px;
            /* Optional: Add padding to the form for better aesthetics */
            box-sizing: border-box; 
            /* Optional: Include padding and border in the element's total width and height */
            width: 70%;
            margin-left:200px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="date"] {
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

        .btn-2 {
            width: 20%;
            background-color: green;
            height: 50px;
            color: white;
            font-size: 20px;
            display: block;
            margin: auto;
        }

        .btn-2:hover {
            background-color: gray;
        }
    </style>
</head>

<?php
include 'config.php';
$studentId = $_GET['studentId'];
$year = $_GET['year'];
$groupNo = $_GET['groupNo'];
$weekId = $_GET['weekId'];
$semester = $_GET['semester'];
$selectQuery = "SELECT * FROM timeline WHERE id = $weekId";
$Result = mysqli_query($con, $selectQuery);
$row = mysqli_fetch_assoc($Result);
$selectStudentQuery = "SELECT * FROM student WHERE id = $studentId";
$studentResult = mysqli_query($con, $selectStudentQuery);
$student = mysqli_fetch_assoc($studentResult);
$selectWeekQuery = "SELECT * FROM weeklydiary WHERE weekid = $weekId and studentid=$studentId";
$weekResult = mysqli_query($con, $selectWeekQuery);
$week = mysqli_fetch_assoc($weekResult)
    ?>

<body>
    <header>
        <h2>Welcome <?php
               $selectQuery = "SELECT * FROM `student` WHERE id = $studentId ";
                $Result = mysqli_query($con, $selectQuery);
                $rowM = mysqli_fetch_assoc($Result);
                $mgen=$rowM['gender'];
                if($mgen=='male')
                {
                    echo 'Mr.';echo ' ';
                }else{
                    echo 'Ms.';echo ' ';
                }
                echo $rowM['firstname'].' '.$rowM['lastname']?> -  View Diary</h2>
    </header>

    <div id="container">
        <div id="sidebar">
        <div id="menu">
                <ul>
                     <li><a href="studenthome.php?studentId=<?php echo $studentId ?>&year=<?php echo $year;?>&groupNo=<?php echo $groupNo;?>"><i class="fa fa-home"></i> Home</a>  </li>
                    <li><a href="managetimeline.php?studentId=<?php echo $studentId ?>&year=<?php echo $year ?>&groupNo=<?php echo $groupNo ?>"><i
                                class="fas fa-stream"></i> Timeline</a> </li>
                    <li><a href="progressgroup.php?studentId=<?php echo $studentId ?>&year=<?php echo $year ?>&groupNo=<?php echo $groupNo ?>"><i
                                class="fas fa-tasks"></i> Progress </a> </li>

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
        <div>
        <form method="POST" id="invoice">
                <h1 style="text-align:center">Weekly Project Diary</h1>
                <div style="display:flex;margin-top:10px;">
                    <label for="" style="width:50%">Student Name: <span
                            style="font-size:22px;background-color:#bee8ff;">
                            <?php echo $student['firstname'] . ' ' . $student['lastname']; ?>
                        </span></label>
                    <label for="" style="width:50%">Group No: <span style="font-size:22px;background-color:#bee8ff;">
                            <?php echo $student['groupno']; ?>
                        </span></label>
                </div> 
                <label for="weekNo">Week No:</label>
                <input type="text" id="weekNo" name="weekNo" value="<?php echo $row['weeknumber']; ?>" disabled
                    style="cursor:not-allowed">
                <div style="display:flex;margin-top:10px;">
                    <label for="sdate" style="width:10%">Start Date:</label>
                    <input type="date" id="sdate" name="sdate" style="width:42%;cursor:not-allowed"
                        value="<?php echo $row['startdate']; ?>" required disabled>&nbsp;&nbsp;&nbsp;
                    <label for="edate" style="width:10%">End Date:</label>
                    <input type="date" id="edate" name="edate" style="width:42%;cursor:not-allowed"
                        value="<?php echo $row['enddate']; ?>" required disabled>
                </div>
                <label for="activitiesPlanned">Activities Planned:</label>

                <textarea id="activitiesPlanned" disabled name="activitiesPlanned" oninput="autoGenerateBullets(this)"
                    oninput="handleBackspace(event)" required><?php echo $week['activityplan']; ?></textarea>

                <label for="activitiesExecutedByTeam">Activity Executed By Team Work:</label>
                <textarea id="activitiesExecutedByTeam" disabled name="activitiesExecutedByTeam"
                    oninput="autoGenerateBullets(this)" oninput="handleBackspace(event)"
                    required><?php echo $week['teamwork']; ?></textarea>
                <label for="activitiesExecutedByIndividual">Activities Executed By Individual:</label>
                <textarea id="activitiesExecutedByIndividual" name="activitiesExecutedByIndividual"
                    oninput="autoGenerateBullets(this)" oninput="handleBackspace(event)"
                    required><?php echo $week['individualwork']; ?></textarea>
                <label for="reasonForDelay">Reason for delay, if any:</label>
                <textarea id="reasonForDelay" name="reasonForDelay" oninput="autoGenerateBullets(this)" oninput="handleBackspace(event)" placeholder="You can remain it empty,if no delay"><?php echo $week['reasonfordelay']; ?></textarea>
                <label for="correctiveMeasures">Corrective measures adopted:</label>
                <textarea id="correctiveMeasures" disabled name="correctiveMeasures" oninput="autoGenerateBullets(this)"
                    oninput="handleBackspace(event)"
                    placeholder="You can remain it empty,if no there are no corrective measure"><?php echo $week['correcttivemeasure']; ?></textarea>
                <input type="hidden" name="suggestion" value="<?php echo $week['suggestion']; ?>">
                <input type="hidden" name="year" value="<?php echo $year; ?>">
                <input type="hidden" name="semester" value="<?php echo $semester; ?>">
                <input type="hidden" name="studentId" value="<?php echo $studentId; ?>">
                <input type="hidden" name="groupNo" value="<?php echo $groupNo; ?>">
                <input type="hidden" name="weekId" value="<?php echo $weekId; ?>">
          </form>
          <br><br>
          <div style="margin-bottom: 200px;">
          <?php if ($week['remark'] == 'approved'){ ?>
            <b><a target="_blank" href="printdetails.php?weekId=<?=$weekId?>&studentId=<?=$studentId?>&groupNo=<?=$groupNo?>&year=<?=$year?>" style="margin-left:550px;background-color:green;font-size:25px;color:white;padding:10px">Print</a></b>
        <?php }else{ ?>
         <span>If mentor approved then you can download!!</span>
            <?php }?>
        </div>
        </div>
    </div>
  


</div>
</body>

</html>
<script>
// Call the function once the page loads
document.addEventListener('DOMContentLoaded', function() {
    autoGenerateBullets(document.getElementById('activitiesPlanned'));
});

function autoGenerateBullets(textarea) {
    // Get the content of the textarea
    var content = textarea.value;

    // Split the content into lines
    var lines = content.split('\n');

    // Update the content with auto-generated bullets
    for (var i = 0; i < lines.length; i++) {
        // Add the custom bullet if the line is not empty and doesn't start with a bullet
        if (lines[i].trim() !== '') {
            // If the line doesn't start with a bullet, add the custom bullet
            if (!/^\s*•\s*/.test(lines[i])) {
                lines[i] = '• ' + lines[i];
            }
        }
    }

    // Join the lines back together
    var updatedContent = lines.join('\n');

    // Update the textarea with the auto-generated content
    textarea.value = updatedContent;

    // Update the placeholder-like div
    var currentLine = lines.length + 1;
    document.getElementById('placeholder').innerText = currentLine + '. ';
}


function handleBackspace(event) {
    // Check if the Backspace key is pressed
    if (event.key === 'Backspace') {
        // Get the content of the textarea
        var content = event.target.value;

        // Get the cursor position
        var cursorPosition = event.target.selectionStart;

        // Split the content into lines
        var lines = content.split('\n');

        // Find the current line number
        var currentLine = content.substr(0, cursorPosition).split('\n').length;

        // Check if the backspace is pressed at the beginning of a line where a bullet point exists
        if (cursorPosition > 0 && cursorPosition % (currentLine + 1) === 0) {
            // Remove the bullet point
            lines[currentLine - 1] = lines[currentLine - 1].replace(/^\s*•\s*/, '');
            event.target.value = lines.join('\n');
            autoGenerateBullets(event.target);  // Update bullets after backspace
        }
    }
}
</script>
