<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progressive sheet</title>
    <style>
    table {
        width: 100%;
        border: 1px solid black;
        border-collapse: collapse;
        /* This property ensures that adjacent cell borders are merged */
    }

    th,
    td {
        border: 1px solid black;
        /* Apply borders to all table cells (headers and data cells) */
        padding: 12px;
        /* Optional: Add padding to cells for better appearance */
    }

    .sign th,
    .sign td {
        padding: 0px;
        padding-top: 10px;
        border: none;
        /*Override border for the sign table */
    }

    .sign {
        border: none;
        /* Override border for the sign table */

    }

    .page-break {
        margin: 0.1in;
        page-break-before: always;
    }
    </style>
</head>

<body style="margin: 0.4in;">
    <div style="text-align: center;">
        <b style="font-size: 30px;">Weekly Progress Report</b><br><br>
        <b style="font-size: 20px;margin-top:20px;">Of</b><br><br>
    </div>

    <table>
        <tbody>

            <tr>
                <td style="width:100px">
                    <b>Program Name</b>
                </td>
                <td>
                    Computer Engineering
                </td>
                <td style="width:100px">
                    <b>Academic Year</b>
                </td>
                <td style="width:100px">
                    <?php echo $year.'-'.$year+1;?>
                </td>

            </tr>
            <tr>
                <td style="width:100px">
                    <b>Program Code</b>
                </td>
                <td>
                    CO
                </td>
                <td style="width:100px">
                    <b>Semester</b>
                </td>
                <td style="width:100px">
                    5 I
                </td>

            </tr>
            <tr>
                <td style="width:100px">
                    <b>Course Title</b>
                </td>
                <td>
                    Capstone Project Planning 
                </td>
                <td style="width:100px">
                    <b>Course Code</b>
                </td>
                <td style="width:100px">
                    CPP - 22058
                </td>

            </tr>
        </tbody>

    </table>
    <br>
    <div style="text-align:center;">
        <b style="font-size: 20px;text-align: center;">Submitted by</b><br>
        <br>
    </div>
    <table>
        <tbody>
            <tr>
                <td style="width: 100px;">
                    <b>Name of Student</b>
                </td>
                <td colspan="5"><?php echo $student['firstname'].' '.$student['middlename'].' '.$student['lastname'];?>
                </td>
            </tr>
            <tr>
                <td style="width: 100px;">
                    <b>Roll No.</b>
                </td>
                <td style="width: 50px;">
                    <?php echo $student['rollno'];  ?>
                </td>
                <td style="width: 70px;">
                    <b>Enrollment Number</b>
                </td>
                <td> <?php echo $student['enrollmentno'];  ?> </td>
                <td style="width: 70px;">
                    <b>Exam Seat Number</b>
                </td>
                <td style="width: 70px;"> </td>
            </tr>
            <tr>
                <td style="width: 100px;">
                    <b>Capstone Project Title</b>
                </td>
                <td colspan="5"><?php echo $grouptable['projecttitle'];  ?> </td>
            </tr>
        </tbody>
    </table>
    <br>
    <div style="text-align:center;">
        <b style="font-size: 20px;text-align: center;">Other Group Memebers</b><br>
        <br>
    </div>
    <table>
        <thead>
            <th style="width:20px">Sr.No.</th>
            <th>Name</th>
            <th style="width:50px">Roll No.</th>
            <th style="width:120px">Enrollment Number</th>
            <th style="width:60px">Exam Seat</th>

        </thead>
        <tbody>
            <?php
            $coun=1;
          while($member= mysqli_fetch_assoc($oResult)){?>

            <tr>

                <td><?php echo $coun; ?></td>
                <td><?php echo $member['firstname'].' '.$member['middlename'].' '.$member['lastname']; ?></td>
                <td><?php echo $member['rollno'];?></td>
                <td><?php echo $member['enrollmentno'];?></td>
                <td><?php ?></td>

            </tr>
            <?php $coun++; }?>

        </tbody>
    </table>
    <div style="position: absolute;
bottom:0.4in;
left: 17%;
text-align: center;">
        <b>
            <div style="margin-top:10px;font-size: 20px;">
                <span>DEPARTMENT OF COMPUTER ENGINEERING </span>
            </div>
            <div style="margin-top:10px;font-size: 18px;">
                <span>S.S.V.P.S's Bapusaheb Shivajirao Deore Polytechnic, Dhule </span>
            </div>
            <div style="margin-top:10px;font-size: 18px;">
                <span>(Institute Code : 0059)</span>
            </div>
            <div style="margin-top:10px;font-size: 18px;">

                <span>2023-2024</span>
            </div>

        </b>
    </div>
    <div class="page-break">

        <div style="text-align:center;">

            <div><img src="http://localhost/ProjectSystem/student/taskpdfs/msbtelogo.jpeg" alt="Sample Image"
                    height="130px" width="135px"><br></div>

            <b>
                <div style="margin-top: 10px;"><span style="font-size: 20px;">MAHARASHTRA STATE BOARD OF TECHNICAL
                        EDUCATION,</span> </div>
                <div style="margin-top: 10px;"> <span style="font-size: 20px;">MUMBAI</span></div>
                <div style="margin-top: 10px;"><span style="font-size: 30px;">CERTIFICATE</span></div>
            </b>
        </div><br>

        <div>
            <p style="text-align: justify;line-height: 2;">This is to certify that,
                <b><?php if($student['gender']=='male'){ echo 'Mr.';} else{ echo 'Ms.';}?>
                    <?php echo $student['firstname'].' '.$student['middlename'].' '.$student['lastname'];?></b>
                from S.S.V.P.S’s B. S .Deore Polytechnic, Dhule having Enrollment No.
                <b><?php echo $student['enrollmentno'];  ?></b> has
                completed Capstone Project Planning of final year having title “<b><?php echo $grouptable['projecttitle'];  ?>
                </b>” during the academic
                year <?php echo $year.'-'.$year+1  ?>. The project is completed in a group consisting of 4 persons under
                the guidance
                of the Faculty and Guide.</p>
        </div>

        <table class="sign">
            <tbody>
                <tr>
                    <td style="width: 50px;"><b>Date:</b></td>
                    <td style="width:230px"></td>
                    <td style="width:180px;"><b>Examination Seat No.:</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="width: 50px;"><b>Place</b></td>
                    <td colspan="3" style="width:200px">Dhule</td>

                </tr>
            </tbody>
        </table><br>
        <table class="sign">
            <tbody>
                <tr>
                    <td style="width: 70px;"><b>Signature:</b></td>
                    <td style="width:280px"></td>
                    <td style="width:50px;"><b>Signature:</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="width: 50px;"><b>Name:</b></td>
                    <td style="width:280px"><br> <?php


                        $mgen = $mn['gender'];
                        if ($mgen == 'male') {
                            echo 'Mr.';
                            echo ' ';
                        } else {
                            echo 'Ms.';
                            echo ' ';
                        }
                        echo $mn['firstname'] . ' ' . $mn['lastname']; ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guide
                    </td>
                    <td style="width:70px;"><b>Name:</b></td>
                    <td><br>Mr. N. D. Patel<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Faculty</td>

                </tr>
            </tbody>
        </table>
        <br<br><br><br>
            <table class="sign">
                <tbody>
                    <tr>
                        <td style="width: 70px;"><b>Signature:</b></td>
                        <td style="width:280px"></td>
                        <td style="width:50px;"><b>Signature:</b></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 50px;"><b>Name:</b></td>
                        <td style="width:280px"><br>Ms. S. H. Patil<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;H.O.D</td>
                        <td style="width:70px;"><b>Name:</b></td>
                        <td><br>Prof. P. B. Kachave<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Principal</td>

                    </tr>
                </tbody>
                <tr>
                    <td colspan="4" style="padding-left: 250px;padding-top:20px">
                        <img src="http://localhost/ProjectSystem/student/taskpdfs/seallogo.png" alt="Sample Image"
                            height="110px" width="110px">
                    </td>
                </tr>
            </table>
    </div>
    <div class="page-break">
        
        <table>
            <thead>
                <th colspan="5">Progressive Assessment (PA) Sheet</th>
            </thead>
            <tbody>

                <tr>
                    <td>
                        <ul type="solid-circle" style="padding-left: 7px;padding-top: 0px;">
                            <li>Project Proposal
                                Identification</li>
                            <li> Punctuality</li>
                            <li>Project Diary</li>
                        </ul><br>
                        <b>Out Of 10</b>
                    </td>
                    <td>
                        <ul type="solid-circle" style="padding-left: 7px;">
                            <li>Execution of
                                plan during
                                fifth
                                semester</li>
                        </ul><br><br>
                        <b>Out Of 20</b>
                    </td>
                    <td>
                        <ul type="solid-circle" style="padding-left: 7px;">
                            <li>Project Report
                                including
                                documentation</li>
                        </ul><br><br>
                        <b>Out Of 15</b>
                    </td>
                    <td>
                        <ul type="solid-circle" style="padding-left: 7px;">
                            <li>Presentation
                            </li>

                        </ul><br><br><br><br>
                        <b>Out Of 05</b>
                    </td>
                    <td>
                        Total<br><br><br><br><br>
                        <b>Out Of 50</b>
                    </td>

                </tr>
                <tr>
                    <td><br><br><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>


    </div>
    <div class="page-break">
        <h2 style="text-align:center">Content</h2>

        <table>

            <thead>
                <th style="width:20px">Sr. No.</th>
                <th style="width:40px">Weekly Progress Report for</th>
                <th style="width:70px">Dates</th>
                <th>List of Activities</th>
                <th style="width:40px">Remark</th>
                <th style="width:70px">Signature of Guide</th>
            </thead>
            <tbody>
                <?php
                $countn=1;
                mysqli_data_seek($Result, 0);
                 while($row= mysqli_fetch_assoc($Result)){?>
                <tr>
                    <td><?php echo $countn; ?></td>
                    <td><?php echo $row['weeknumber']?></td>
                    <td><?php  $dateString = $row['startdate'];
                        $timestamp = strtotime($dateString);

                        // Format the timestamp as "dd/mm/yyyy"
                        $formattedDate = date("d/m/Y", $timestamp);
                        
                        echo $formattedDate; 
                        $dateStringg = $row['enddate'];
                        $timestampe = strtotime($dateStringg);

                        // Format the timestamp as "dd/mm/yyyy"
                        $formattedDatee = date("d/m/Y", $timestampe);
                        echo " to ";
                        echo $formattedDatee; ?></td>

                    <td><?php echo $row['activityplan']?></td>
                    <td></td>
                    <td></td>

                </tr>


                <?php $countn++; }?>
            </tbody>
        </table>
        <?php
   
        
        ?>

    </div>

</body>

</html>