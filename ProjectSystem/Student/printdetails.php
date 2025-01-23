<?php
include("config.php");
require 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;


$studentId = $_GET['studentId'];
$weekId = $_GET['weekId'];
$year = $_GET['year'];
$groupNo = $_GET['groupNo'];
$selectQuery = "SELECT * FROM timeline WHERE id = $weekId";
$Result = mysqli_query($con, $selectQuery);
$row = mysqli_fetch_assoc($Result);
$selectStudentQuery = "SELECT * FROM student WHERE id = $studentId";
$studentResult = mysqli_query($con, $selectStudentQuery);
$student = mysqli_fetch_assoc($studentResult);
$selectWeekQuery = "SELECT * FROM weeklydiary WHERE weekid = $weekId and studentid=$studentId";
$weekResult = mysqli_query($con, $selectWeekQuery);
$week = mysqli_fetch_assoc($weekResult);
$selectMQuery = "SELECT * FROM grouptable WHERE year = $year and groupno=$groupNo";
$mResult = mysqli_query($con, $selectMQuery);
$mentor= mysqli_fetch_assoc($mResult);
$mid=$mentor['mentorid'];

$selectMNameQuery = "SELECT * FROM mentor WHERE id = $mid";
$mnResult = mysqli_query($con, $selectMNameQuery);
$mn= mysqli_fetch_assoc($mnResult);


// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require('details_pdf.php');
$html=ob_get_contents();
ob_get_clean();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('print-details.pdf',['Attachment'=>false]);
?>