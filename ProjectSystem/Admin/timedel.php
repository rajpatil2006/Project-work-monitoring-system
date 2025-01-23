<?php
include "config.php"; // Ensure you have the correct path to your config file

if(isset($_GET['timeId'])) {
    $timeId = $_GET['timeId']; // Assuming you're passing the studentId via a form field
    $Year = $_GET['year']; // Assuming you're passing the year via a form field
    $semester = $_GET['semester']; // Assuming you're passing the year via a form field
    $st='status';
    $deleteQuery = "DELETE FROM timeline WHERE id = $timeId"; //delete student
    $deleteResult = mysqli_query($con, $deleteQuery);
    if ($deleteResult){
        echo "<script>;";
        echo "window.alert('Week deleted successfully....!');";
        echo 'window.location.href = "add_timeline.php?year=' . $Year . '&semester=' .$semester. '";';
        echo "</script>";
        
      
    }
    else{
        echo "<script>;";
            echo "window.alert('Error to delete week');";
            echo 'window.location.href = "add_timeline.php?year=' . $Year . '&semester=' .$semester. '";';
            echo "</script>";
    }
}
?>
