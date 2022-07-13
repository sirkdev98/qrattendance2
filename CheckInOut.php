<?php

 date_default_timezone_set('Asia/Manila');
    session_start();
  $eventIDget=$_SESSION['eventID'];

include 'include/connection.php';



    if(isset($_POST['voterID'])){
    	
   
        $empid =$_POST['voterID'];
		$date = date('Y-m-d');
		$time = date('H:i:s A');

		$sql = "SELECT * FROM tbl_logs WHERE empid = '$empid' and logdate = CURDATE()";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find QRCode number '.$voterID." and ".$eventID;
		}else{
				$row = $query->fetch_assoc();
				$id = $row['voterID'];
				$sql ="SELECT * FROM attendance WHERE voterID = '$voterID' AND status='logged' AND timein!='' AND eventID = '$eventID'";
				$query=$conn->query($sql);
				if($query->num_rows>0){
				$_SESSION['error'] = 'LOGGED ALREADY LOGGED '.$voterID;
			}else{
					$sql = "UPDATE `attendance` SET `timein` = '$time', `status` = 'logged' WHERE `attendance`.`voterID` = '$voterID'";
			

					if($conn->query($sql) ===TRUE){
					 $_SESSION['success'] = 'Successfuly Time In: '.$row['fname'].' '.$row['lname'];
			 }else{
			  $_SESSION['error'] = $conn->error;
		   }	
		}
	}

	}else{
		$_SESSION['error'] = 'Please scan your QR Code number';
}
header("location: qr.php?id=$eventID");
	   echo $eventid;
$conn->close();
?>