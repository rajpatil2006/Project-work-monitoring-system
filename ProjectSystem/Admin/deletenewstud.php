<?php
include "config.php"; // Ensure you have the correct path to your config file

if(isset($_GET['studentId'])) {
    $studentId = $_GET['studentId']; // Assuming you're passing the studentId via a form field
    $Year = $_GET['year']; // Assuming you're passing the year via a form field
    
    
        $deleteTSQuery = "DELETE FROM student WHERE id = $studentId"; //delete from taskstatus
        $deleteTSResult = mysqli_query($con, $deleteTSQuery);
        if ($deleteTSResult){
            
            
                echo "<script>;";
                echo "window.alert('Student deleted successfully....!');";
                echo 'window.location.href = "group.php?year=' . $Year . '";';
                echo "</script>";
        }    
        else{
                echo "<script>;";
            echo "window.alert('Error to delete student');";
            echo 'window.location.href = "studmanagement.php?year=' . $Year . '";';
            echo "</script>";
            }
        
      
}
?>