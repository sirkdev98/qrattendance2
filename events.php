<?php session_start();
include 'include/connection.php'

?>
<html>
    <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>QR Code | Log in</title>
	  <!-- Tell the browser to be responsive to screen width -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="text/javascript" src="js/instascan.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- DataTables -->
		<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../public/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
		#divvideo{
			 box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
		}
		</style>
    </head>
    <body style="background:#eee">
        <nav class="navbar" style="background:#2c3e50">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#"> <i class="glyphicon glyphicon-qrcode"></i>  QR Code Attendance</a>
			</div>
		<ul class="nav navbar-nav">
			  <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Maintenance <span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="#"><span class="glyphicon glyphicon-user"></span> PRECINT</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span> QR</a></li>
				  <li><a href="events.php"><span class="glyphicon glyphicon-calendar"></span> Events</a></li>
				  <li><a href="attendance.php"><span class="glyphicon glyphicon-time"></span> Attendance</a></li>

				</ul>
			  </li>
			  <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Reports</a></li>
			  <li><a href="#"><span class="glyphicon glyphicon-time"></span> Check Attendance</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
			  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		  </div>
		</nav>
       <div class="container">
            
				
                <div class="col-md-8">
              				<div style="border-radius: 5px;padding:10px;background:#fff;" id="divvideo">
                  <table id="example1" class="table table-bordered">
                    <thead>
                        <tr>
						<td>Event ID</td>
						<td>Name</td>
						<td>Date</td>
						
						<td>Venue</td>
						<td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      include 'include/connection.php';
                        
                           $sql ="SELECT * FROM events where status!='Done'";
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){

                         $eventID = $row['eventID'];
                         $name =  $row['name'];
                         $date =  $row['date'];
                         $venue =  $row['venue'];

                        ?>
                            <tr>
                                <td><?php echo $eventID;?></td>
                                <td><?php echo $name;?></td>
                                <td><?php echo $date;?></td>
                               <td><?php echo $venue;?></td>
                                <td>
<a href="household.php?id=<?php echo $id?>">
<button type='button' class='btn btn-info btn-sm'><i class="fa fa-list" aria-hidden="true"></i></button>
 <a href="#delete<?php echo $eventID; ?>" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'><i class="fa fa-trash-o" aria-hidden="true"></i></i>

                                </td>
                            </tr>
             

                        
                  <div id="delete<?php echo $eventID; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="post">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Delete</h4>
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="delete_id" value="<?php echo $eventID; ?>">
                                        <div class="alert alert-danger">Are you sure you want to delete <?php echo $eventID; ?> <strong>
                                                </strong> </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="deleteevent" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
           <?php
                }
                        ?>
                    </tbody>
                  </table>
                     <div class="container-fluid formbox ">
      <div class="col-xs-12 col-sm-12">
        
        <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3">
          <div>
            <button type="button" class="btn btn-block btn-info btn-lg" data-toggle="modal" data-target="#cageModal">Add Event</button>
          </div>
        </div>
      </div>
    </div>
	 <form class="row" method="post" role="form">
    <div class="container-fluid formbox ">
      <!--Modal Popup on submit-->
      <div id="cageModal" class="modal fade" role="dialog" class="col-sm-10 col-sm-offset-1">
        <div class="modal-dialog">
          <!--modal content-->
          <div class="modal-content">
          
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Event</h4>
            </div>
            <div class="modal-body">
            <label class="form-label">Event Name</label>
             <input type="text" name="name" class="form-control">
 			 <label class="form-label">Barangay</label>
            
                  <select class="form-control" id="barangay" name="barangay" required>
                  <option></option>
                  <option value="ALL">ALL</option>
                  <option value="APOLLO">APOLLO</option>
                  <option value="BALUT">BALUT</option>
                  <option value="BAYAN">BAYAN</option>
                  <option value="BAGONG PARAISO">BAGONG PARAISO</option>
                  <option value="CALERO">CALERO</option>
                  <option value="CENTRO I">CENTRO I</option>
                  <option value="CENTRO II">CENTRO II</option>
                  <option value="DOÑA">DOÑA</option>
                  <option value="KABALUTAN">KABALUTAN</option>
                  <option value="KAPARANGAN">KAPARANGAN</option>
                  <option value="MARIA FE">MARIA FE</option>
                  <option value="MASANTOL">MASANTOL</option>
                  <option value="MULAWIN">MULAWIN</option>
                  <option value="PACAR">PACAR</option>
                  <option value="PAGASA">PAGASA</option>
                  <option value="PALIHAN">PALIHAN</option>
                  <option value="PANTALAN BAGO">PANTALAN BAGO</option>
                  <option value="PANTALAN LUMA">PANTALAN LUMA</option>
                  <option value="PARANG PARANG">PARANG PARANG</option>
                  <option value="PUKSUAN">PUKSUAN</option>
                  <option value="SIBUL">SIBUL</option>
                  <option value="SILAHIS">SILAHIS</option>
                  <option value="TAGUMPAY">TAGUMPAY</option>
                  <option value="TALA">TALA</option>
                  <option value="TALIMUNDOC">TALIMUNDOC</option>
                  <option value="TAPULAO">TAPULAO</option>
                  <option value="TENEJERO">TENEJERO</option>
                  <option value="TUGATOG">TUGATOG</option>
                  <option value="WAWA">WAWA</option>
                  </select>
              <label class="form-label">Event Venue</label>
             <input type="text" name="venue" class="form-control">
              <label class="form-label">Date</label>
             <input type="date" name="date" class="form-control">
              <label class="form-label">Time</label>
             <input type="time" name="time" class="form-control">
             
            </div>
            <div class="modal-footer">
            	 <button type="submit" name="saveevent"class="btn btn-success">Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
<?php
			 if(isset($_POST['saveevent'])){
				$name = $_POST['name'];
				$barangay = $_POST['barangay'];
				$date = $_POST['date'];
				$time = $_POST['time'];
				$venue = $_POST['venue'];

					$sql = "INSERT INTO `events` (`eventID`, `name`, `barangay`, `date`, `time`, `venue`, `status`) VALUES (NULL, '$name', '$barangay', '$date', '$time', '$venue', '$status')";
					if ($conn->query($sql) === TRUE) {  
						$last_id = $conn->insert_id;
$sql = "INSERT INTO `attendance` (`voterID`, `barangay`, `count`, `fname`, `mname`, `lname`, `timein`, `precint`, `status`, `role`, `coorID`, `leaderID`, `groupID`, `eventID`)
SELECT `voterID`, `barangay`,`count`, `fname`, `mname`, `lname`, `timein`, `precint`, `status`, `role`, `coorID`, `leaderID`, `groupID`, '$last_id'
FROM kaisa where barangay = '$barangay'";
if ($conn->query($sql) === TRUE) {  

   echo "<script type='text/javascript'>alert(\"Successfully added event $name \")</script>";
           echo "<script>window.location.href='events.php'</script>";
         
				  }	  
     }}


      if(isset($_POST['deleteevent'])){
				$delete_id = $_POST['delete_id'];

					$sql = "DELETE FROM `events` WHERE `events`.`eventID` = '$delete_id'";
					if ($conn->query($sql) === TRUE) {  

$sql = "DELETE FROM `attendance` WHERE `attendance`.`eventID` = '$delete_id'";

if ($conn->query($sql) === TRUE) {  
   echo "<script type='text/javascript'>alert(\"Successfully deleted  $delete_id\")</script>";
           echo "<script>window.location.href='events.php'</script>";
         
				  }
     }}
?>
                </div>
				
                </div>
				
            </div>
					

        </div>
		<script src="plugins/jquery/jquery.min.js"></script>
		<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

		<script>
		  $(function () {
			$("#example1").DataTable({
			  "responsive": true,
			  "autoWidth": false,
			});
			$('#example2').DataTable({
			  "paging": true,
			  "lengthChange": false,
			  "searching": false,
			  "ordering": true,
			  "info": true,
			  "autoWidth": false,
			  "responsive": true,
			});
		  });
		</script>
		
    </body>
</html>