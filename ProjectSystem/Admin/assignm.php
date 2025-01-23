<?php

    include "config.php";
  
    if(isset($_GET['m_id']))
    {
        $year = $_GET['year'];
        $update=mysqli_query($con ,"update grouptable set 
        mentorid='".$_GET['m_id']."'  where groupno='".$_GET['g_id']."' and year=$year")or die(mysqli_error($con));
        if($update){
            echo "<script>";
            echo "window.alert('Successfully Mentor Assign...!');";   
            echo "window.location.href = 'groupmanagement.php?year=$year';";        
            echo "</script>";
          
        }
        else{
            echo "<script>";
            echo "window.alert('Failed to update Record ...!');";
            echo "window.location.href = 'groupmanagement.php?year=$year';"; 
            echo "</script>";
        }
    }
?>