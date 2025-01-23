<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Weekly Diary</title>
<style>
    
</style>
</head>
<body>
    <div style="text-align:center;margin-top:10px">
    <span>Shri Shivaji Vidya Prasarak Sanstha's Bapusaheb Shivajirao Deore Polytechnic, Dhule</span><br>
        <span style="font-size:20px"><i>Department of Computer Engineering</i></span>
    </div>        
            <div style="text-align:center">
                <span style="font-size: x-large;
                                font-weight: bold;
                                font-variant: all-small-caps;"><u>Weekly Project Diary</u></span>
            </div>
            <br>
                        
            <div style="justify-content: space-between; margin-top:10px;">
                
                <div style="width:60%; display:inline-block; ">
                    <div style="margin-bottom:5px"><label><b>Student Name: </b><span><?php echo $student['firstname'] . ' ' . $student['lastname']; ?></span></label></div>
                    <div style="margin-bottom:5px"><label><b>Week No: </b><span><?php echo $row['weeknumber']; ?></span></label></div>
                    <div style="margin-bottom:5px"><label><b>Start Date: </b><span><?php 
                        $dateString = $row['startdate'];
                        $timestamp = strtotime($dateString);

                        // Format the timestamp as "dd/mm/yyyy"
                        $formattedDate = date("d/m/Y", $timestamp);
                        
                        echo $formattedDate;
                    ?></span></label></div>
                    
                </div>
                <div style="width:38%;display:inline-block">
                    <div style="margin-bottom:5px"><label><b>Group No: </b><span><?php echo $student['groupno']; ?></span></label></div>
                    <div style="margin-bottom:5px"><label><b>Course: </b><span><?php echo 'CO'.$week['semester'].'I'; ?></span></label></div>
                    <div style="margin-bottom:5px"><label><b>End Date: </b><span><?php 
                        $dateString = $row['enddate'];
                        $timestamp = strtotime($dateString);

                        // Format the timestamp as "dd/mm/yyyy"
                        $formattedDate = date("d/m/Y", $timestamp);
                        
                        echo $formattedDate;
                    ?></span></label></div>
             
                </div>
                <div style="margin-top:5px"><label><b>Subject: </b><span><?php if ($week['semester']==5){  echo 'Capstone Project Planning (22058)';}else{
                     echo 'Capstone Project Execution(22060)';
                    } ?></span></label></div><div style="margin-bottom:5px"><label><b>Project Title: </b><span><?php echo $mentor['projecttitle']; ?></span></label></div>
                <br>
            </div>
                <label for="activitiesPlanned"><b>Activities Planned:</b></label>

                <div style=" width: 98%;
                            min-height:100px;
                            border: 2px solid #ccc; 
                            padding: 5px;
                            font-family: inherit;
                            font-size:16px">
                                    <?php
                    $teamwork = $week['activityplan'];
                    $lines = explode("•", $teamwork);

                    foreach ($lines as $line) {
                        $trimmedLine = trim($line);
                        if (!empty($trimmedLine)) {
                            echo "• " . $trimmedLine . "<br>";
                        }
                    }
                    ?>  
                </div>
                <br>

                <!-- <textarea id="activitiesPlanned" disabled name="activitiesPlanned" oninput="autoGenerateBullets(this)"
                    oninput="handleBackspace(event)" required style="font-family: inherit;height:120px;"><?php echo $week['activityplan']; ?></textarea> -->

                <label for="activitiesExecutedByTeam"><b>Activity Executed By Team Work:</b></label><br>
                <div style=" width: 98%;
                           min-height:100px;
                            border: 2px solid #ccc; 
                            padding: 5px;
                            font-family: inherit;
                            font-size:16px">
                                    <?php
                    $teamwork = $week['teamwork'];
                    $lines = explode("•", $teamwork);

                    foreach ($lines as $line) {
                        $trimmedLine = trim($line);
                        if (!empty($trimmedLine)) {
                            echo "• " . $trimmedLine . "<br>";
                        }
                    }
                    ?>  
                </div>
                <br>

                <!-- <textarea id="activitiesExecutedByTeam" disabled name="activitiesExecutedByTeam"
                    required style="font-family: inherit;min-height:150px;max-height:auto"><?php echo $week['teamwork']; ?></textarea> -->
                
                    <label for="activitiesExecutedByIndividual"><b>Activities Executed By Individual:<b></label>
                
                    <div style=" width: 98%;
                            min-height:100px;
                            border: 2px solid #ccc; 
                            padding: 5px;
                            font-family: inherit;
                            font-size:16px">
                                    <?php
                    $teamwork = $week['individualwork'];
                    $lines = explode("•", $teamwork);

                    foreach ($lines as $line) {
                        $trimmedLine = trim($line);
                        if (!empty($trimmedLine)) {
                            echo "• " . $trimmedLine . "<br>";
                        }
                    }
                    ?>  
                </div>
                <br>
                    <!-- <textarea id="activitiesExecutedByIndividual" name="activitiesExecutedByIndividual"
                    required style="font-family: inherit;min-height: 120px;"><?php echo $week['individualwork']; ?></textarea> -->
                
                    <label for="reasonForDelay"><b>Reason for delay, if any:</b></label>
                
                    <div style=" width: 98%;
                            min-height:50px;
                            border: 2px solid #ccc; 
                            padding: 5px;
                            font-family: inherit;
                            font-size:16px">
                                    <?php
                    $teamwork = $week['reasonfordelay'];
                    $lines = explode("•", $teamwork);

                    foreach ($lines as $line) {
                        $trimmedLine = trim($line);
                        if (!empty($trimmedLine)) {
                            echo "" . $trimmedLine . "<br>";
                        }
                    }
                    ?>  
                </div>
                <br>

                    <!-- <textarea id="reasonForDelay" name="reasonForDelay" oninput="autoGenerateBullets(this)" oninput="handleBackspace(event)" placeholder="You can remain it empty,if no delay"style="font-family: inherit;height:50px;"><?php echo $week['reasonfordelay']; ?></textarea> -->
                
                <label for="correctiveMeasures"><b>Corrective measures adopted:</b></label>
                
                <div style=" width: 98%;
                            min-height:50px;
                            border: 2px solid #ccc; 
                            padding: 5px;
                            font-family: inherit;
                            font-size:16px">
                                    <?php
                    $teamwork = $week['correcttivemeasure'];
                    $lines = explode("•", $teamwork);

                    foreach ($lines as $line) {
                        $trimmedLine = trim($line);
                        if (!empty($trimmedLine)) {
                            echo "" . $trimmedLine . "<br>";
                        }
                    }
                    ?>  
                </div>
                <br>
                <br>

                <!-- <textarea id="correctiveMeasures" disabled name="correctiveMeasures" oninput="autoGenerateBullets(this)"
                    oninput="handleBackspace(event)"
                    placeholder="You can remain it empty,if no there are no corrective measure"style="font-family: inherit;height:50px;"><?php echo $week['correcttivemeasure']; ?></textarea> -->
          
          <div style="position: absolute; bottom: 0; right: 20px; text-align: right;margin-top:100px">
            <span style="margin-right:50px;">Remark</span><br>
            <span style="width:45%;">(<?php 
                $mgen=$mn['gender'];
                if($mgen=='male')
                {
                    echo 'Mr.';echo ' ';
                }else{
                    echo 'Ms.';echo ' ';
                }
                echo $mn['firstname'] . ' ' . $mn['lastname']; ?>)</span>  
        </div>

        
        <?php     $selectWQuery = "SELECT * FROM `taskdetails` where timelineid=$weekId";
                    $WResult = mysqli_query($con, $selectWQuery);
                    if (mysqli_num_rows($WResult) > 0) { 
                        while ($Wtask = mysqli_fetch_assoc($WResult)) {
                            $taskId=$Wtask['id'];
                            $selectTQuery = "SELECT * FROM `taskstatus` where taskid=$taskId and studentid=$studentId";
                            $TResult = mysqli_query($con, $selectTQuery);
                            if (mysqli_num_rows($TResult) > 0) { 
                            $Ttask = mysqli_fetch_assoc($TResult);
                            ?>
                        <div style="page-break-before: always;">
                        <div style="justify-content: space-between; margin-top:50px;margin-left:20px">
                        <div style="width:60%; display:inline-block; ">
                    <div style="margin-bottom:5px"><label><b>Student Name: </b><span><?php echo $student['firstname'] . ' ' . $student['lastname']; ?></span></label></div>
                    <div style="margin-bottom:5px"><label><b>Week No: </b><span><?php echo $row['weeknumber']; ?></span></label></div>
                    <div style="margin-bottom:5px"><label><b>Start Date: </b><span><?php 
                        $dateString = $row['startdate'];
                        $timestamp = strtotime($dateString);

                        // Format the timestamp as "dd/mm/yyyy"
                        $formattedDate = date("d/m/Y", $timestamp);
                        
                        echo $formattedDate;
                    ?></span></label></div>
                </div>
                
                <div style="width:38%;display:inline-block">
                    <div style="margin-bottom:5px"><label><b>Group No: </b><span><?php echo $student['groupno']; ?></span></label></div>
                    <div style="margin-bottom:5px"><label><b>Semester: </b><span><?php echo $week['semester']; ?></span></label></div>
                    <div style="margin-bottom:5px"><label><b>End Date: </b><span><?php 
                        $dateString = $row['enddate'];
                        $timestamp = strtotime($dateString);

                        // Format the timestamp as "dd/mm/yyyy"
                        $formattedDate = date("d/m/Y", $timestamp);
                        
                        echo $formattedDate;
                    ?></span></label></div>
                </div>
            </div>
                  <hr>             

                <?php 
                break;
                            }   
                }
                }?>
        <?php     $selectWQuery = "SELECT * FROM `taskdetails` where timelineid=$weekId";
                    $WResult = mysqli_query($con, $selectWQuery);
                    if (mysqli_num_rows($WResult) > 0) { 
                        $ii=0;
                        while ($Wtask = mysqli_fetch_assoc($WResult)) {
                            $taskId=$Wtask['id'];
                            $selectTQuery = "SELECT * FROM `taskstatus` where taskid=$taskId and studentid=$studentId";
                            $TResult = mysqli_query($con, $selectTQuery);
                            if (mysqli_num_rows($TResult) > 0) { 
                            $Ttask = mysqli_fetch_assoc($TResult);
                            ?>
                        
            
                            <div>
                                <h2>Task <?php echo $ii;?>: </h2>
                                <ul>
                                <li><span style="font-size:20px"><b>Task Name: </b><?php echo $Wtask['name']?> </span></li>
                                <li><span style="font-size:20px"><b>Task Details: </b><?php echo $Wtask['details']?>  </span></li>
                                <li><span style="font-size:20px"><b>Task Start Date: </b><?php 
                        $dateString = $Wtask['startdate'];
                        $timestamp = strtotime($dateString);

                        // Format the timestamp as "dd/mm/yyyy"
                        $formattedDate = date("d/m/Y", $timestamp);
                        
                        echo $formattedDate;
                    ?> </span></li>
                                <li><span style="font-size:20px"><b>Task End Date: </b><?php 
                        $dateString = $Wtask['enddate'];
                        $timestamp = strtotime($dateString);

                        // Format the timestamp as "dd/mm/yyyy"
                        $formattedDate = date("d/m/Y", $timestamp);
                        
                        echo $formattedDate;
                    ?> </span></li>
                                <li><span style="font-size:20px"><b>Solution: </b><?php echo $Ttask['solution']?> </span></li>
                                <li><span style="font-size:20px"><b>Evaluation: </b><u><?php echo $Ttask['evaluation']?></u></span></li>
                            </ul>
                            </div>


                <?php 
                            }  
                            $ii++; 
                }
                ?>
                </div>
                <?php
                
                }?>
          
            
</body>
</html>
<!-- <script>
function autoGenerateBullets(textarea) {
    // Reset height to auto to recalculate the height based on content
    textarea.style.height = 'auto';
    
    // Set the height to scrollHeight if it's greater than the default height
    if (textarea.scrollHeight > 120) {
        textarea.style.height = textarea.scrollHeight + 'px';
    }
}

function handleBackspace(event) {
    // Handle backspace event if needed
}
</script> -->