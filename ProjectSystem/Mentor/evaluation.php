<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review task- mentor dashboard</title>
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
            border: 5px solid #ccc; /* You can customize the color and width of the border */
                 padding: 20px; /* Optional: Add padding to the form for better aesthetics */
             box-sizing: border-box; /* Optional: Include padding and border in the element's total width and height */
            width:52%;
            height:auto;
            margin: 0 auto;
            margin-bottom: 200px;
            box-shadow: 7px 7px 3px rgba(0, 0, 0, 0.1);
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
        #btn-1{
            width: 42%;
            background-color:green;
            height:50px;
            color:white;
            font-size:20px;
        }
        #btn-1:hover{
            background-color: gray;
        }
        #btn-2{
            width: 42%;margin-left:40px;background-color:yellow;height:50px;color:black;font-size:20px
        }
        #btn-2:hover{
            background-color: gray;
        }
        #btn-e{
            margin-left: 5px;
            width:18%;
            margin-top: 10px;
            color: black;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
        #btn-e:hover{
             background-color: gray;
        }

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add jQuery code for animations or any other dynamic behavior
        });
    </script>
    <script>
        
        function submitPoor(event) {
            var confirmationMessage = 'Are you sure you want to mark this task as 𝐏𝐨𝐨𝐫 ?';
            var isConfirmed = confirm(confirmationMessage);

            if (!isConfirmed) {
                // Prevent the form from submitting if the user clicks "Cancel"
                event.preventDefault();
            }
        }
    
        function submitStatisfactory(event) {
            var confirmationMessage = 'Are you sure you want to mark this task as 𝐒𝐭𝐚𝐭𝐢𝐬𝐟𝐚𝐜𝐭𝐨𝐫𝐲 ?';
            var isConfirmed = confirm(confirmationMessage);

            if (!isConfirmed) {
                // Prevent the form from submitting if the user clicks "Cancel"
                event.preventDefault();
            }
        }
        function submitGood(event) {
            var confirmationMessage = 'Are you sure you want to mark this task as 𝐆𝐨𝐨𝐝 ?';
            var isConfirmed = confirm(confirmationMessage);

            if (!isConfirmed) {
                // Prevent the form from submitting if the user clicks "Cancel"
                event.preventDefault();
            }
        }
        function submitVgood(event) {
            var confirmationMessage = 'Are you sure you want to mark this task as 𝐕𝐞𝐫𝐲 𝐆𝐨𝐨𝐝 ?';
            var isConfirmed = confirm(confirmationMessage);

            if (!isConfirmed) {
                // Prevent the form from submitting if the user clicks "Cancel"
                event.preventDefault();
            }
        }
        function submitExcellent(event) {
            var confirmationMessage = 'Are you sure you want to mark this task as 𝐄𝐱𝐜𝐞𝐥𝐥𝐞𝐧𝐭 ?';
            var isConfirmed = confirm(confirmationMessage);

            if (!isConfirmed) {
                // Prevent the form from submitting if the user clicks "Cancel"
                event.preventDefault();
            }
        }
    
          </script>
</head>
<?php
include 'config.php';
$studentId = $_GET['studentId'];
$mentorId = $_GET['mentorId'];
$year = $_GET['year'];
$groupNo = $_GET['groupNo'];
$weekId = $_GET['weekId'];
$weekId = $_GET['weekId'];
$wId = $_GET['wId'];

$selectQuery = "SELECT * FROM taskdetails WHERE timelineid = $weekId AND groupno=$groupNo";
$Result = mysqli_query($con, $selectQuery);
$row = mysqli_fetch_assoc($Result);
$selectTQuery = "SELECT * FROM taskstatus WHERE id = $wId";
$TResult = mysqli_query($con, $selectTQuery);
$Trow = mysqli_fetch_assoc($TResult);
?>
<body>

    <header >
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
                echo $rowM['firstname'].' '.$rowM['lastname']?> - Approval of Task</h2>
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
      
        <?php
        $selectSSQuery = "SELECT * FROM student WHERE id = $studentId";
        $SSResult = mysqli_query($con, $selectSSQuery);
        $ssrow = mysqli_fetch_assoc($SSResult);
        ?>
        <div id="content">
        <h1>Evaluate Task</h1>
    <form method="POST" enctype="multipart/form-data">
        <label>Student Name: <?php echo $ssrow['firstname'].' '.$ssrow['lastname'];?></label>
        <label for="weekNo">Task Name:</label>
        <input type="text" id="weekNo" name="taskname" value="<?php echo $row['name']; ?>" disabled>
     <div style="margin-top:20px">
     
        <button type="submit" name="poor" id="btn-e"  onclick="submitPoor(event)" style="background-color:#ff4a4a">
        𝐏𝐨𝐨𝐫         </button>
        <button type="submit" name="statisfactory" onclick="submitStatisfactory(event)" id="btn-e" style="background-color:#ffff37">
        𝐒𝐭𝐚𝐭𝐢𝐬𝐟𝐚𝐜𝐭𝐨𝐫𝐲 
        </button>
        <button type="submit" name="good"   onclick="submitGood(event)" id="btn-e" style="background-color:#33ff33">
        𝐆𝐨𝐨𝐝         </button>
        <button type="submit" name="vgood"  onclick="submitVgood(event)" id="btn-e" style="background-color:#4d4dff">
        𝐕𝐞𝐫𝐲 𝐆𝐨𝐨𝐝     </button>
        <button type="submit" name="excellent" onclick="submitExcellent(event)" id="btn-e" style="background-color:#ff31ff">
        𝐄𝐱𝐜𝐞𝐥𝐥𝐞𝐧𝐭         </button>
            </div>
        <!-- <label for="sdate" style="width:10%">Start Date:</label>
        <input type="date" id="sdate" name="sdate" style="width:42%" value="<?php echo $row['startdate']; ?>" disabled required>&nbsp;&nbsp;&nbsp;
        <label for="edate" style="width:10%">End Date:</label>
        <input type="date" id="edate" name="edate" style="width:42%" value="<?php echo $row['enddate']; ?>" required disabled>
    </div>
        <label for="taskdetails">Task Details:</label> 
        <textarea id="activitiesPlanned" name="taskdetails" disabled required><?php echo $row['details']; ?></textarea> -->

        <!-- <label for="solution">Solution:</label>
        <textarea id="activitiesPlanned" name="solution" required disabled><?php echo $Trow['solution']; ?></textarea>
        <label for="solution">Attachment:</label>
       
        <?php if($Trow['file_name'] == 'no'){
             ?> <label for="solution">No attachment added</label> <?php
        }
        else{
            ?><br>View your file: <a href='../student/taskpdfs/<?php echo $Trow["file_name"]; ?>' target='_blank'>View pdf</a><br><br><?php
        }
        ?>
        <label for="suggestion" style="background-color:yellow">Changes/Suggestion,if any:</label>
        <textarea id="suggestion"  name="suggestion" 
        placeholder="This will help students to improve their solution.."></textarea> -->
        
        <input type="hidden" name="year" value="<?php echo $year; ?>">
        <input type="hidden" name="semester" value="<?php echo $semester; ?>">
        <input type="hidden" name="studentId" value="<?php echo $studentId; ?>">
        <input type="hidden" name="mentorId" value="<?php echo $mentorId; ?>">
        <input type="hidden" name="groupNo" value="<?php echo $groupNo; ?>">
        <input type="hidden" name="weekId" value="<?php echo $weekId; ?>">
        <input type="hidden" name="wId" value="<?php echo $wId; ?>">
        
 
        <!-- <div style="display:flex;margin-top:10px;">
        <button type="submit" name="approved" id="btn-1">
            Approved <i class="fas fa-check" style="font-size:25px"></i>
        </button>
        <button type="submit" name="notapproved" id="btn-2">
            Not Approved <i class="fa-solid fa-xmark" style="font-size:25px"></i>
        </button>
         </div> -->
        
    
        <!-- <input type="submit" name="submit" value="Submit" style="margin-top:30px"> -->
    </form>
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
<?php
include "config.php";

if(isset($_POST['poor'])) {
   
    $update = mysqli_query($con, "UPDATE taskstatus SET remark='approved', evaluation='Poor' WHERE id = $wId") or die(mysqli_error($con));
    if ($update) {
        echo "<script>";
        echo "window.alert('Task approved successfully as 𝐏𝐨𝐨𝐫 Evaluation....!');";
        // You can choose to refresh the page or perform any other action after successful update
        echo "  window.location.href = 'taskmanage.php?mentorId=$mentorId&year=$year&groupNo=$groupNo&weekId=$weekId';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "  window.alert('Data error....!');";
        echo "</script>";
    }
}

if(isset($_POST['statisfactory'])) {
      

    $update = mysqli_query($con, "UPDATE taskstatus SET remark='approved', evaluation='Statisfactory' WHERE id = $wId") or die(mysqli_error($con));

    if ($update) {
        echo "<script>";
        echo "window.alert('Task approved successfully as 𝐒𝐭𝐚𝐭𝐢𝐬𝐟𝐚𝐜𝐭𝐨𝐫𝐲 Evaluation....!');";
        echo "window.location.href = 'taskmanage.php?mentorId=$mentorId&year=$year&groupNo=$groupNo&weekId=$weekId';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "window.alert('Data error....!');";
        echo "</script>";
    }
}

if(isset($_POST['good'])) {
      

    $update = mysqli_query($con, "UPDATE taskstatus SET remark='approved', evaluation='Good' WHERE id = $wId") or die(mysqli_error($con));

    if ($update) {
        echo "<script>";
        echo "window.alert('Task approved successfully as 𝐆𝐨𝐨𝐝 Evaluation....!');";
        echo "window.location.href = 'taskmanage.php?mentorId=$mentorId&year=$year&groupNo=$groupNo&weekId=$weekId';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "window.alert('Data error....!');";
        echo "</script>";
    }
}
if(isset($_POST['vgood'])) {
      

    $update = mysqli_query($con, "UPDATE taskstatus SET remark='approved', evaluation='Very Good' WHERE id = $wId") or die(mysqli_error($con));

    if ($update) {
        echo "<script>";
        echo "window.alert('Task approved successfully as 𝐕𝐞𝐫𝐲 𝐆𝐨𝐨𝐝 Evaluation....!');";
        echo "window.location.href = 'taskmanage.php?mentorId=$mentorId&year=$year&groupNo=$groupNo&weekId=$weekId';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "window.alert('Data error....!');";
        echo "</script>";
    }
}
if(isset($_POST['excellent'])) {
      

    $update = mysqli_query($con, "UPDATE taskstatus SET remark='approved', evaluation='Excellent' WHERE id = $wId") or die(mysqli_error($con));

    if ($update) {
        echo "<script>";
        echo "window.alert('Task approved successfully as 𝐄𝐱𝐜𝐞𝐥𝐥𝐞𝐧𝐭 Evaluation....!');";
        echo "window.location.href = 'taskmanage.php?mentorId=$mentorId&year=$year&groupNo=$groupNo&weekId=$weekId';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "window.alert('Data error....!');";
        echo "</script>";
    }
}
?>

<?php
include "config.php";

if(isset($_POST['notapproved'])) {
    extract($_POST);

    // Check if the "Changes/Suggestion" field is not empty
    if (empty($suggestion)) {
        echo "<script>";
        echo "window.alert('Please provide changes or suggestions field.');";
        echo "</script>";
    } else {
        // Update the database only if the "Changes/Suggestion" field is not empty
        $update = mysqli_query($con, "UPDATE taskstatus SET 
            suggestion = '$suggestion',
            remark='viewed'
            WHERE id = $wId") or die(mysqli_error($con));

        if ($update) {
            echo "<script>";
            echo "window.alert('Successfully send..');";
            echo "window.location.href = 'taskmanage.php?mentorId=$mentorId&year=$year&groupNo=$groupNo&weekId=$weekId';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "window.alert('Data error....!');";
            echo "</script>";
        }
    }
}
?>
