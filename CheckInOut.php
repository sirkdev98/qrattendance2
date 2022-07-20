<?php

 date_default_timezone_set('Asia/Manila');
    session_start();


include 'include/connection.php';


$emplogid = $_POST['employeeID'];

    if(isset($_POST['employeeID'])){
    	
   
        $empid =$_POST['employeeID'];
		$date = date('Y-m-d');
		$time = date('H:i:s A');
		//check for logs today

		$employeeexist = "SELECT * FROM `tbl_employees` WHERE empid = '$emplogid'";
		$empcheckk = $conn->query($employeeexist);

		if($empcheckk->num_rows < 1){
			$_SESSION['error'] = $empid.' Doesnt Exist in employee Database'; 

		}//if employee exist proceed to this else to insert log for today
		else{
				  while ($row = $empcheckk->fetch_assoc()){

                         $empid = $row['empid'];
                         $fname =  $row['fname'];
                         $mname =  $row['mname'];
                         $lname =  $row['lname'];
                         $gender =  $row['gender'];
                         $bday =  $row['bday'];
                         $position =  $row['position'];
                         $site =  $row['site'];

}


		$sql = "SELECT * FROM tbl_logs WHERE empid = '$emplogid' and logdate = CURDATE()";
		$logcheck = $conn->query($sql);

		if($logcheck->num_rows < 1){
		//add logs if no log yet
		$sqladdlog = "INSERT INTO `tbl_logs` (`id`, `timein`, `timeout`, `logdate`, `empid`, `siteid`) VALUES (NULL, '$time', '', '$date', '$emplogid', '$site')";
		
		if($conn->query($sqladdlog) ===TRUE){
					 $_SESSION['success'] = 'Successfuly Time In: '.$emplogid;
		}
		}//end no log yet for today
		elseif ($logcheck->num_rows != 0) {
			// code...
		
		$sqlcheckloginandout = "SELECT * FROM tbl_logs WHERE empid = '$emplogid' and logdate = CURDATE() and timeout ='0000-00-00 00:00:00'";
		$checkloginandout = $conn->query($sqlcheckloginandout);

			if($checkloginandout->num_rows !=0){

				$row = $logcheck->fetch_assoc();
			$logid = $row['id'];

		$sqllogout = "UPDATE `tbl_logs` SET `timeout` = '$time' WHERE `tbl_logs`.`id` = '$logid'";
		
		if($conn->query($sqllogout) ===TRUE){

 				$_SESSION['success'] = 'Successfuly Timed Out: '.$empid;
		}

}
else{  $_SESSION['error'] = 'Already Timed in and Out: '.$empid; }


}
	}	//update time out if no out yet
	
	
			
		













}













		/*else{
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
	}*/

	/*}else{
		$_SESSION['error'] = 'Please scan your QR Code number';
}*/
header("location: qr.php");

$conn->close();
?>