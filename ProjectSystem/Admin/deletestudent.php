<?php
include "config.php"; // Ensure you have the correct path to your config file

if(isset($_GET['studentId'])) {
    $studentId = $_GET['studentId']; // Assuming you're passing the studentId via a form field
    $Year = $_GET['year']; // Assuming you're passing the year via a form field
    $groupNo = $_GET['groupNo']; // Assuming you're passing the groupNo via a form field

    echo '<script>';
    echo 'var confirmed = confirm("Are you sure you want to delete the student? The student and its data will be permanently deleted from the system..");';
    echo 'if (confirmed) {';
    // Perform the deletion only if confirmed
    $countQuery6 = "SELECT count(*) AS count FROM `student` WHERE `year` = $Year AND `groupno` = $groupNo";
    $countResult6 = mysqli_query($con, $countQuery6);

    // Fetch the count from the result
    $countRow6 = mysqli_fetch_assoc($countResult6);
    $count6 = $countRow6['count'];
    echo 'window.location.href = "deletestudper.php?year=' . $Year . '&count6=' . $count6 . '&studentId=' . $studentId . '&groupNo=' . $groupNo . '";';
    echo '}';
    echo 'else {';
    echo 'window.location.href = "studmanagement.php?year=' . $Year . '";'; // Redirect to studmanagement.php if not confirmed
    echo '}';
    echo '</script>';
}
?>
