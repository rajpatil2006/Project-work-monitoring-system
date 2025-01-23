<?php
include "config.php";

// Check if all necessary parameters are present in the URL
if(isset($_GET['weekNumber'], $_GET['semester'], $_GET['mentorId'], $_GET['year'], $_GET['groupNo'])) {
    // Extract parameters and sanitize them to prevent SQL injection
    $weekNumber = mysqli_real_escape_string($con, $_GET['weekNumber']);
    $semester = mysqli_real_escape_string($con, $_GET['semester']);
    $mentorId = mysqli_real_escape_string($con, $_GET['mentorId']);
    $year = mysqli_real_escape_string($con, $_GET['year']);
    $groupNo = mysqli_real_escape_string($con, $_GET['groupNo']);
    $currentDate = date('Y-m-d');
    // Add the week record
    $add = mysqli_query($con, "INSERT INTO groupwork (weeknumber, groupno, semester, year,date) VALUES ('$weekNumber', '$groupNo', '$semester', '$year','$currentDate')") or die(mysqli_error($con));
    
    // Check if the query was successful
    if($add) {
        // Redirect to view_group.php if successful
        header("Location: timelinemanage.php?year=$year&mentorId=$mentorId&groupNo=$groupNo&inserted=true");
        exit(); // Ensure that no further code is executed
    } else {
        // Provide an error message if the query fails
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Provide a message if some parameters are missing
    echo "Missing parameters";
    // Debugging: Output the values of the parameters
    echo "Week Number: " . $_GET['weekNumber'] . "<br>";
    echo "Semester: " . $_GET['semester'] . "<br>";
    echo "Mentor ID: " . $_GET['mentorId'] . "<br>";
    echo "Year: " . $_GET['year'] . "<br>";
    echo "Group Number: " . $_GET['groupNo'] . "<br>";
}
?>
