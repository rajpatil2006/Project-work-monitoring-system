<?php
include("config.php");
require 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

$studentId = $_GET['studentId'];
$semester = $_GET['semester'];
$year = $_GET['year'];
$selectStudentQuery = "SELECT * FROM student WHERE id = $studentId";
$studentResult = mysqli_query($con, $selectStudentQuery);
$student = mysqli_fetch_assoc($studentResult);
$groupnu=$student['groupno'];
//$selectWeekQuery = "SELECT * FROM weeklydiary WHERE weekid = $weekId and studentid=$studentId";
//$weekResult = mysqli_query($con, $selectWeekQuery);
//$week = mysqli_fetch_assoc($weekResult);
$selectMQuery = "SELECT * FROM grouptable WHERE year = $year and groupno=$groupnu";
$mResult = mysqli_query($con, $selectMQuery);
$grouptable= mysqli_fetch_assoc($mResult);
$mid=$grouptable['mentorid'];

$othermember="SELECT * FROM student WHERE id != $studentId AND groupno=$groupnu";
$oResult = mysqli_query($con, $othermember);

$selectMNameQuery = "SELECT * FROM mentor WHERE id = $mid";
$mnResult = mysqli_query($con, $selectMNameQuery);
$mn= mysqli_fetch_assoc($mnResult);
$ye=$year;
$selectQuery = "SELECT * FROM `timeline` where $ye=$year AND semester=6 ORDER BY weeknumber ASC";
$Result = mysqli_query($con, $selectQuery);

// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require('test_details.php');
$html=ob_get_contents();
ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->set_option('isRemoteEnabled',true);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('print-details.pdf',['Attachment'=>false]);
?>