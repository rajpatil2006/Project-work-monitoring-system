<?php
include "config.php"; // Ensure you have the correct path to your config file

if(isset($_GET['studentId'])) {
    $studentId = $_GET['studentId']; // Assuming you're passing the studentId via a form field
    $Year = $_GET['year']; // Assuming you're passing the year via a form field
    $groupNo = $_GET['groupNo']; // Assuming you're passing the groupNo via a form field
    $count6 = $_GET['count6']; // Assuming you're passing the groupNo via a form field
    echo $count6;
    $deleteQuery = "DELETE FROM student WHERE id = $studentId"; //delete student
    $deleteResult = mysqli_query($con, $deleteQuery);
    if ($deleteResult){
        
        if($count6==1){
            $deleteGQuery = "DELETE FROM grouptable WHERE groupno = $groupNo and year=$Year"; //delete from grouptable
            $deleteGResult = mysqli_query($con, $deleteGQuery);
            if ($deleteGResult){
                $deleteGWQuery = "DELETE FROM groupwork WHERE groupno = $groupNo and year=$Year"; //delete from groupwork
                $deleteGWResult = mysqli_query($con, $deleteGWQuery);
                if ($deleteGWResult){
                    $deleteGTQuery = "DELETE FROM taskdetails WHERE groupno = $groupNo and year=$Year"; //delete from taskdetails
                    $deleteGTResult = mysqli_query($con, $deleteGTQuery);
                    if($deleteGTResult){
                        echo "<script>;";
                        echo "window.alert('Student deleted successfully....!');";
                        echo 'window.location.href = "studmanagement.php?year=' . $Year . '";';
                        echo "</script>";
                    }
                    else{
                        echo "<script>;";
                        echo "window.alert('Error to delete student....!');";
                        echo 'window.location.href = "studmanagement.php?year=' . $Year . '";';
                        echo "</script>";
                    }
                }
                else{
                    echo "<script>;";
                    echo "window.alert('Error to delete student task details');";
                    echo 'window.location.href = "studmanagement.php?year=' . $Year . '";';
                    echo "</script>";
                }
            }
            else{
                echo "<script>;";
                echo "window.alert('Error to delete student groupwork');";
                echo 'window.location.href = "studmanagement.php?year=' . $Year . '";';
                echo "</script>";
            }
        }
        $deleteTSQuery = "DELETE FROM taskstatus WHERE studentid = $studentId"; //delete from taskstatus
        $deleteTSResult = mysqli_query($con, $deleteTSQuery);
        if ($deleteTSResult){
            $deleteWKQuery = "DELETE FROM weeklydiary WHERE studentid=$studentId"; //delete from weeklydiary
            $deleteWKResult = mysqli_query($con, $deleteWKQuery);
            if($deleteWKResult){
                echo "<script>;";
                echo "window.alert('Student deleted successfully....!');";
                echo 'window.location.href = "studmanagement.php?year=' . $Year . '";';
                echo "</script>";
            }
            else{
                echo "<script>;";
            echo "window.alert('Error to delete student weeklydiary');";
            echo 'window.location.href = "studmanagement.php?year=' . $Year . '";';
            echo "</script>";
            }
        }
        else{
            echo "<script>;";
            echo "window.alert('Error to delete student taskstatus');";
            echo 'window.location.href = "studmanagement.php?year=' . $Year . '";';
            echo "</script>";
        }
    }
    else{
        echo "<script>;";
            echo "window.alert('Error to delete student');";
            echo 'window.location.href = "studmanagement.php?year=' . $Year . '";';
            echo "</script>";
    }
}
?>