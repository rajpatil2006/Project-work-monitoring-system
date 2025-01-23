<?php
include "config.php"; // Ensure you have the correct path to your config file

if(isset($_GET['timeId'])) {
    $timeId = $_GET['timeId']; // Assuming you're passing the studentId via a form field
    $semester = $_GET['semester']; // Assuming you're passing the studentId via a form field

    $Year = $_GET['year']; // Assuming you're passing the year via a form field
   
    echo '<script>';
    echo 'var confirmed = confirm("Are you sure you want to delete the week? The week and its data will be peramanantly deleted from the system..");';
    echo 'if (confirmed) {';
    // Perform the deletion only if confirmed
    echo 'window.location.href = "timedel.php?year=' . $Year . '&timeId=' . $timeId . '&semester=' . $semester . '";';
    echo '}';
    echo 'else {';
    echo 'window.location.href = "add_timeline.php?year=' . $Year . '&semester=' . $semester . '";'; // Redirect to studmanagement.php if not confirmed
    echo '}';
    echo '</script>';
}
?>