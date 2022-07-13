<?php session_start();


$eventID = $_GET['id'];

$_SESSION['eventID'] = $eventID;

if(isset($_SESSION['username'])){
    
       $cidd = $_SESSION['id'];
      $userrole= $_SESSION['role'];
      $userfname= $_SESSION['fname'];
      $userlname= $_SESSION['lname'];
		
}else{
 header('location: login.php');

}


?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Kaisa App</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/kaisa.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/kaisa.ico">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/kaisa.ico">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<di
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name"><?php echo $userfname; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="#"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="#"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="#">
	 	<img src="vendors/images/deskapp-logo.png" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.png" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							
							<li><a href="index.php">Event Registration</a></li>
							<li><a href="archive.php">Events archive</a></li>
							<li><a href="#">More</a></li>
						</ul>
					</li>
				</ul></div></div></div></div><div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Events Archive</h4>
							<a href="attendancecheck.php?id=all">
<button type='button' class='btn btn-info btn-sm'><i class="fa fa-list" aria-hidden="true"> SEE ALL DETAILS</i></button></a>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Event Registration</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<!-- //text to the right -->
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
 <div class="container">

				
                <div class="col-md-12">
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
                        
                           $sql ="SELECT * FROM events where status ='Done'";
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
<a href="attendancecheck.php?id=<?php echo $eventID?>">
<button type='button' class='btn btn-info btn-sm'><i class="fa fa-list" aria-hidden="true"> Details</i></button>
<a href="https://bastatagaoranikaisa.com/kaisaqr/qr.php?id=<?php echo $eventID?>">
<button type='button' class='btn btn-warning btn-sm'><i class="fa fa-camera" aria-hidden="true"></i></button>


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

				if ($barangay == "ALL") {
					$sql = "INSERT INTO `events` (`eventID`, `name`, `barangay`, `date`, `time`, `venue`, `status`) VALUES (NULL, '$name', '$barangay', '$date', '$time', '$venue', '$status')";
					if ($conn->query($sql) === TRUE) {  
						$last_id = $conn->insert_id;
$sql = "INSERT INTO `attendance` (`voterID`, `barangay`, `count`, `fname`, `mname`, `lname`, `timein`, `precint`, `status`, `role`, `coorID`, `leaderID`, `groupID`, `eventID`)
SELECT `voterID`, `barangay`,`count`, `fname`, `mname`, `lname`, `timein`, `precint`, `status`, `role`, `coorID`, `leaderID`, `groupID`, '$last_id'
FROM kaisa";
if ($conn->query($sql) === TRUE) {  

   echo "<script type='text/javascript'>alert(\"Successfully added event $name \")</script>";
           echo "<script>window.location.href='events.php'</script>";
         
				  }	  
						
				}}else{

					$sql = "INSERT INTO `events` (`eventID`, `name`, `barangay`, `date`, `time`, `venue`, `status`) VALUES (NULL, '$name', '$barangay', '$date', '$time', '$venue', '$status')";
					if ($conn->query($sql) === TRUE) {  
						$last_id = $conn->insert_id;
$sql = "INSERT INTO `attendance` (`voterID`, `barangay`, `count`, `fname`, `mname`, `lname`, `timein`, `precint`, `status`, `role`, `coorID`, `leaderID`, `groupID`, `eventID`)
SELECT `voterID`, `barangay`,`count`, `fname`, `mname`, `lname`, `timein`, `precint`, `status`, `role`, `coorID`, `leaderID`, `groupID`, '$last_id'
FROM kaisa where barangay = '$barangay'";
if ($conn->query($sql) === TRUE) {  

   echo "<script type='text/javascript'>alert(\"Successfully added event $name \")</script>";
           echo "<script>window.location.href='index.php'</script>";
         
				  }	  
     }}

}
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
	
                </div>
				
                </div>
				
            </div>
				</div>
			</div>
			div>
		</div>
	</div>
	<!-- js -->
<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>

</body>
</html>