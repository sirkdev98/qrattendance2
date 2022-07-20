


<?php
include 'include/controller.php';
include 'include/connection.php';
              


require('fpdf181/fpdf.php');
require_once("phpqrcode/qrlib.php");

require_once("phpqrcode/qrlib.php");





$empid = $_GET['empid'];


// Create connection

$pdf = new FPDF ('L','mm',array(148,105));
$pdf->AddFont('BebasKai','','BebasKai.php');

 
     $sql = "SELECT * FROM `tbl_employees` where empid =$empid";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                     while( $row = $result->fetch_assoc()){
                        
                        $empid = $row['empid'];
                         $fname =  $row['fname'];
                         $mname =  $row['mname'];
                         $lname =  $row['lname'];
                         $gender =  $row['gender'];
                         $bday =  $row['bday'];
                         $position =  $row['position'];
                         $site =  $row['site'];
}

                      }
                  
                            
QRcode::png($empid,$empid.".png");

$bday = date("F-d-Y", strtotime($bday));

$pdf = new FPDF ('L','mm',array(148,105));
$pdf->AddFont('BebasKai','','BebasKai.php');

$pdf->Addpage('P');


$pdf->SetFont('Arial', '', 12);

$pdf->Image("http://localhost/qrattendance2/qr_generator.php?code=".$empid, 38, 40, 30, 30, "png");

$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(0,30,$fname." ".$mname." ".$lname,0,1,'C');
$pdf ->Cell(0,35,'',0,1,'C');
$pdf ->Cell(0,1,$empid,0,1,'C');



//

//set font
$pdf->SetFont('BebasKai', '', 12);

//cell width, height, text, border, end line, [align]










$pdf->Output();
   





?>