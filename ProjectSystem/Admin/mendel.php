<?php
include "config.php"; // Ensure you have the correct path to your config file

if(isset($_GET['mentorId'])) {
    $mentorId = $_GET['mentorId']; // Assuming you're passing the studentId via a form field
    $Year = $_GET['year']; // Assuming you're passing the year via a form field
    $st='status';
    $deleteQuery = "UPDATE mentor SET $st='remove' WHERE id = $mentorId"; //delete student
    $deleteResult = mysqli_query($con, $deleteQuery);
    if ($deleteResult){
        echo "<script>;";
        echo "window.alert('Mentor deleted successfully....!');";
        echo 'window.location.href = "menmanagement.php?year=' . $Year . '";';
        echo "</script>";
        
      
    }
    else{
        echo "<script>;";
            echo "window.alert('Error to delete mentor');";
            echo 'window.location.href = "menmanagement.php?year=' . $Year . '";';
            echo "</script>";
    }
}
?>
