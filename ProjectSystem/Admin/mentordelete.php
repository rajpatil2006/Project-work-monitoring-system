<?php
include "config.php"; // Ensure you have the correct path to your config file

if(isset($_GET['mentorId'])) {
    $mentorId = $_GET['mentorId']; // Assuming you're passing the studentId via a form field
    $Year = $_GET['year']; // Assuming you're passing the year via a form field
   
    echo '<script>';
    echo 'var confirmed = confirm("Are you sure you want to delete the mentor? The mentor and its data will be peramanantly deleted from the system..");';
    echo 'if (confirmed) {';
    // Perform the deletion only if confirmed
    echo 'window.location.href = "mendel.php?year=' . $Year . '&mentorId=' . $mentorId .'";';
    echo '}';
    echo 'else {';
    echo 'window.location.href = "menmanagement.php?year=' . $Year . '";'; // Redirect to studmanagement.php if not confirmed
    echo '}';
    echo '</script>';
}
?>