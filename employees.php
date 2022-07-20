
<?php session_start();

include 'include/connection.php';




if(isset($_SESSION['username'])){
    
       $cidd = $_SESSION['id'];
      $userrole= $_SESSION['role'];
      $userfname= $_SESSION['fname'];
      $userlname= $_SESSION['lname'];
		


}else{
 header('location: logout.php');

}

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
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
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Ross C. Lopez</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
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
			<a href="index.html">
				<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
					<a href="qr.php" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-qrcode"></span><span class="mtext">Scan QR</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
						
							<li><a href="index.php">Dashboard</a></li>
							<li><a href="downloadables.php">Downloadables</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Data</span>
						</a>
						<ul class="submenu">
							
							<li><a href="employees.php">Employee</a></li>
							<li><a href="sites.php">Sites</a></li>
							
							
						</ul>
					</li>
					<li>
					
					
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Advanced Components</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Data</a></li>
									<li class="breadcrumb-item active" aria-current="page">Empolyees</li>
								</ol>
							</nav>
						</div>
				
					</div>
				</div>

				<!-- Bootstrap Select Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Add Employee</h4>
							
						</div>
					</div>
					<form method="post">
						<div class="row">
							<div class="col-md-4 col-sm-12">
								
									<label>First Name</label>
									<input class="form-control" type="text" name="fname" placeholder="First Name" required>
								
							</div>
						<div class="col-md-4 col-sm-12">
								
									<label>Middle Name</label>
									<input class="form-control" type="text" name="mname" placeholder="Middle Name">
								
							</div>
						<div class="col-md-4 col-sm-12">
								
									<label>Last Name</label>
									<input class="form-control" type="text" name="lname" placeholder="Last Name" required>
								
							</div>
						</div>

							<br>
							<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Gender</label>
									<select class="form-control" data-size="3" name="gender" >
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										
									
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Birthday</label>
									<input class="form-control" placeholder="Select Date" type="date" name="bday" required>
								</div>
							</div>
							</div>
							<br>
							<div class="row">
							<div class="col-md-4 col-sm-12">
								
									<label>Position</label>
									<select class="form-control" data-size="5" data-style="btn-outline-info" name="position" required>
										<option selected disabled>Select Here</option>
										<?php
                      $sql = "SELECT `positiontitle` FROM tbl_position";
                      $result = $conn->query($sql);
                      if($result->num_rows> 0){
                         $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                           }
                           foreach ($options as $option) {
 															 ?>
   								<option value="<?php echo $option['positiontitle']; ?>"><?php echo $option['positiontitle']; ?> </option>
    							<?php } ?>
									
									</select>
			
							</div>

							<div class="col-md-4 col-sm-12">
								
									<label>Site</label>
									<select class="form-control" data-size="5" data-style="btn-outline-info" name="site" required>
										<option selected disabled>Select Here</option>
										  <?php
                      $sql = "SELECT `sitename`,`siteid` FROM tbl_site";
                      $result = $conn->query($sql);
                      if($result->num_rows> 0){
                         $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                           }
                           foreach ($options as $option) {
 															 ?>
   								<option value="<?php echo $option['siteid']; ?>"><?php echo $option['sitename']; ?> </option>
    							<?php } ?>
							</select>
			

							</div></div>
								<br>
						<div class="row">
							
							<div class="col-md-4 col-sm-12">
							<button class="btn-success form-control" type="submit" name="addemployee">ADD</button>
							</div>
						</div>

					</form>
				</div>

			</div>



	<?php 
						if (isset($_POST['addemployee'])) {

							$fname = $_POST['fname'];
							$mname = $_POST['mname'];
							$lname = $_POST['lname'];
							$gender = $_POST['gender'];
							$bday = $_POST['bday'];
							$position = $_POST['position'];
							$site = $_POST['site'];

							$sql = "INSERT INTO `tbl_employees` (`empid`, `fname`, `mname`, `lname`, `gender`, `bday`, `position`, `site`) VALUES (NULL, '$fname', '$mname', '$lname', '$gender', '$bday', '$position', '$site')";
					if ($conn->query($sql) === TRUE) {  

			echo "<script type='text/javascript'>alert(\"Successfully Added \")</script>";
           echo "<script>window.location.href='employees.php'</script>";

						}
						}

						?>
















	
<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text- h4">Showing the employee records</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									
									<th>ID</th>
									<th>Name</th>
									<th>Birthday</th>
									<th>Position</th>
									<th>Site</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
					<?php	$sql ="SELECT * FROM `tbl_employees`";
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){

                         $empid = $row['empid'];
                         $fname =  $row['fname'];
                         $mname =  $row['mname'];
                         $lname =  $row['lname'];
                         $gender =  $row['gender'];
                         $bday =  $row['bday'];
                         $position =  $row['position'];
                         $site =  $row['site'];

                     ?>

								<tr>

									<td><?php echo $empid; ?></td>
									<td><?php echo $fname." ".$mname." ".$lname; ?></td>
									<td><?php echo $bday; ?></td>
									<td><?php echo $position; ?></td>
									<td><?php echo $site; ?></td>
									<td>
										<a href="profile.php?id=<?php echo $empid; ?>"><button type="button" class="btn btn-info"><i class="icon-copy fa fa-user" aria-hidden="true"></i></button></a>	

										<a href="#edit<?php echo $empid; ?>" data-toggle="modal"><button type="button" class="btn btn-warning"><i class="icon-copy fa fa-edit" aria-hidden="true"></i></button></a>

										<button type="button" class="btn btn-danger"><i class="icon-copy fa fa-trash" aria-hidden="true"></i></button>


									</td>
								</tr>

								<div class="col-md-4 col-sm-12 mb-30">
					
							
							<div class="modal fade bs-example-modal-lg" id="edit<?php echo $empid; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
												<div class="pd-20 card-box mb-30">

					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Employee</h4>
								<form method="post">
							<input class="form-control" type="text" name="editid" placeholder="First Name" value="<?php echo $empid; ?>">
						</div>
					</div>
					
						<div class="row">
							<div class="col-md-4 col-sm-12">
								
									<label>First Name</label>
									<input class="form-control" type="text" name="fname" placeholder="First Name" value="<?php echo $fname; ?>">
								
							</div>
						<div class="col-md-4 col-sm-12">
								
									<label>Middle Name</label>
									<input class="form-control" type="text" name="mname" placeholder="Middle Name" value="<?php echo $mname; ?>">
								
							</div>
						<div class="col-md-4 col-sm-12">
								
									<label>Last Name</label>
									<input class="form-control" type="text" name="lname" placeholder="Last Name" value="<?php echo $lname; ?>">
								
							</div>
						</div>

							<br>
							<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Gender</label>
									<select class="form-control" data-size="3" name="gender" >
										<option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										
									
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Birthday</label>
									<input class="form-control" placeholder="Select Date" type="date" name="bday" value="<?php echo $bday; ?>">
								</div>
							</div>
							</div>
							<br>
							<div class="row">
							<div class="col-md-4 col-sm-12">
								
									<label>Position</label>
									<select class="form-control" data-size="5" data-style="btn-outline-info" name="position">
										<option selected value="<?php echo $position; ?>"><?php echo $position; ?></option>
										<?php
                      $sql = "SELECT `positiontitle` FROM tbl_position";
                      $result = $conn->query($sql);
                      if($result->num_rows> 0){
                         $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                           }
                           foreach ($options as $option) {
 															 ?>
   								<option value="<?php echo $option['positiontitle']; ?>"><?php echo $option['positiontitle']; ?> </option>
    							<?php } ?>
									
									</select>
			
							</div>

							<div class="col-md-4 col-sm-12">
								
									<label>Site</label>
									<select class="form-control" data-size="5" data-style="btn-outline-info" name="site">
										
										  <?php
                      $sql = "SELECT `sitename`,`siteid` FROM tbl_site where siteid = $site";
                      $result = $conn->query($sql);
                      if($result->num_rows> 0){
                         $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                           }
                           foreach ($options as $option) {
 															 ?>
   								<option selected value="<?php echo $option['siteid']; ?>"><?php echo $option['sitename']; ?> </option>
    							<?php } ?>
    							<?php
    							$sql = "SELECT `sitename`,`siteid` FROM tbl_site";
                      $result = $conn->query($sql);
                      if($result->num_rows> 0){
                         $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                           }
                           foreach ($options as $option) {
 															 ?>
   								<option value="<?php echo $option['siteid']; ?>"><?php echo $option['sitename']; ?> </option>
    							<?php } ?>

							</select>
			

							</div></div>
								<br>
				

				
				</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button class="btn btn-primary" name="saveedit" type="submit">Save changes</button>
										</div>		
					</form>
									</div>
								</div>
							</div>
						</div>
					</div>
						
		</div>
						<?php } ?>
							</tbody>
						</table>
					</div>
				</div>




	<?php 
						if (isset($_POST['saveedit'])) {
							$editid = $_POST['editid'];			
							$fname = $_POST['fname'];
							$mname = $_POST['mname'];
							$lname = $_POST['lname'];
							$gender = $_POST['gender'];
							$bday = $_POST['bday'];
							$position = $_POST['position'];
							$site = $_POST['site'];

							$sql = "UPDATE `tbl_employees` SET `fname` = '$fname', `mname` = '$mname', `lname` = '$lname', `gender` = '$gender', `bday` = '$bday', `position` = '$position', `site` = '$site' WHERE `tbl_employees`.`empid` = $editid";
					if ($conn->query($sql) === TRUE) {  

			echo "<script type='text/javascript'>alert(\"Successfully Edited \")</script>";
           echo "<script>window.location.href='employees.php'</script>";

						}
						}

						?>


				<!-- Export Datatable End -->

					
	</div>
					</div>
				</div>
				<!-- Simple Datatable End -->
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
</html>