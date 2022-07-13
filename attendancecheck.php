<?php session_start();

include 'include/connection.php';

$eventID = $_GET['id'];


$_SESSION['eventID'] = $eventID;



if(isset($_SESSION['username'])){
    
       $cidd = $_SESSION['id'];
      $userrole= $_SESSION['role'];
      $userfname= $_SESSION['fname'];
      $userlname= $_SESSION['lname'];
		


}else{
 header('location: logout.php');

}



if ($eventID =="") {
	  header('location: index.php');}

if ($eventID == "all") {

                         $name = "ALL BARANGAYS";
                         $date = "all date";
                         $venue =  "GYM";
}else{


 $sql ="SELECT * From events where eventID = $eventID";
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){
                          $eventID = $row['eventID'];
                         $name =  $row['name'];
                         $date =  $row['date'];
                         $venue =  $row['venue'];
                           }


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
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
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
	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> -->

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
			<div class="github-link">
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
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Showing the data of the event: <div class="weight-600 font-30 text-blue"><?php echo $name; ?></div>
						</h4>
						<div class="weight-600 font-24 text-orange"><?php echo $venue." | ".$date; ?></div>
						<p class="font-18 max-width-600">Here you can see the summary of the selected event. You can also download CSV files here.</p>
						 <form method="post" action="exportattendance.php">
						 	<input type="text" name="eventID" hidden value='<?php echo $eventID;?>'>
					<a href="https://bastatagaoranikaisa.com/kaisaqr/qr.php?id=<?php echo $eventID?>">	<input type="button" name="export" class="btn btn-warning" value="Scan Again" /></a>
     <input type="submit" name="export" class="btn btn-info" value="DOWNLOAD EXCEL" />
    </form>
    <br>
    <form method="post" action="exportattendanceabsent.php">
						 	<input type="text" name="eventID" hidden value='<?php echo $eventID;?>'>
					
     <input type="submit" name="exportabsent" class="btn btn-danger" value="DOWNLOAD ABSENT LIST" />
    </form>
					</div>
				</div>
			</div>



			<?php 



	
		//Show per event only


	if ($eventID !="all") {

 $sql ="SELECT COUNT(*)as count FROM attendance WHERE eventID = $eventID";
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){
                           $count = $row['count'];
                           }

 $sql ="SELECT COUNT(*)as attendies
FROM attendance
WHERE eventID = $eventID and status = 'logged'" ;
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){
                           $loggedcount = $row['attendies'];
                           }

 $sql ="SELECT COUNT(*)as absent
FROM attendance
WHERE eventID = $eventID and status != 'logged'" ;
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){
                           $absentcount	 = $row['absent'];
                           }

$percentage = ($loggedcount /$count)*100;
$percentage =round($percentage, 2);
}
//show all

	if ($eventID =="all") {
		$sql ="SELECT COUNT(*)as count
FROM attendance";
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){
                           $count = $row['count'];
                           }

 $sql ="SELECT COUNT(*)as attendies
FROM attendance WHERE status = 'logged'" ;
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){
                           $loggedcount = $row['attendies'];
                           }

 $sql ="SELECT COUNT(*)as absent
FROM attendance WHERE status != 'logged'" ;
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){
                           $absentcount	 = $row['absent'];
                           }

$percentage = ($loggedcount /$count)*100;
$percentage =round($percentage, 2);
		}


			?>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
						
						<div class="progress-data">
							<i class="icon-copy fa fa-address-book" style="font-size: 3.73em;  color: #1b03a3 ;"></i>
						
					</div>
							<div class="widget-data">
								<div class="h4 mb-0" style="color:#1b03a3 ;:">TOTAL Invited</div>
								<div class="weight-600" style="color:#1b03a3 ; font-size:36px;"	><?php echo $count; ?> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
								<div class="progress-data">
							<i class="icon-copy fa fa-check" style="font-size: 3.73em;  color:#FFA500;"></i>
						
					</div>
							<div class="widget-data">
								<div class="h5 mb-0" style="color:#FFA500;:">Total Attendies</div>
								<div class="weight-600" style="color:#FFA500; font-size:36px;"	><?php echo $loggedcount; ?> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<i class="icon-copy fa fa-users" style="font-size: 3.73em;  color:#FF0000;"></i>
							</div>
							<div class="widget-data">
								<div class="h5 mb-0" style="color:#FF0000;:">No attendance</div>
								<div class="weight-600" style="color:red; font-size:36px;"	><?php echo $absentcount; ?> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<i class="icon-copy fa fa-percent" style="font-size: 3.73em;  color:#87CEFA;"></i>
							</div>
							<div class="widget-data">
								<div class="h6 mb-0" style="color:#87CEFA;:">Attendance Turnount</div>
								<div class="weight-600" style="color:#87CEFA; font-size:36px;"	><?php echo $percentage?>%</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
				
		
               
			<div class="row">
				<div class="col-xl-12 mb-30">
					
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h5">View All Data</h4>

					</div>

					<div class="pb-20">
							<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th>ID</th>
								
						
									<th>Name</th>
									<th>Role</th>

									<th>Barangay</th>
									<th>Status</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
										<?php		$sql ="SELECT * FROM attendance where eventID = '$eventID' and status = 'logged'";
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){

                           	$idnumber = $row['voterID'];
                           	$name =	$row['fname']." ".$row['mname']." ".$row['lname'];
                           	$role =	$row['role'];
                           		$barangay =	$row['barangay'];
                           		$status = $row['status']
                           ?>
								
									
									<td><?php echo $idnumber; ?></td>
									<td><?php echo $name; ?></td>
									<td><?php echo $role; ?></td>
									<td><?php echo $barangay; ?></td>
									<td><?php echo $status;  ?></td>
						
							
								</tr>
									
				</tr>
					<?php	}?>
																
							</tbody>
						</table>
					</div>
				</div>
				</div>
				
			</div>
			<?php

 $sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='palihan'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allpalihan = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance where barangay = 'palihan' and status ='logged' and role = 'coordinator' ";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $palihancoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='palihan' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $palihancoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='palihan' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $palihanleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='palihan' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $palihanleader = $row['leaderall'];                          
}








$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='parang parang'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allparangparang = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='parang parang' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $parangparangcoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='parang parang' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $parangparangcoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='parang parang' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $parangparangleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='parang parang' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $parangparangleader = $row['leaderall'];                          
}





$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='tala'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $alltala = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='tala' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $talacoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='tala' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $talacoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='tala' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $talaleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='tala' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $talaleader = $row['leaderall'];                          
}





$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='tenejero'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $alltenejero = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='tenejero' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tenejerocoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='tenejero' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tenejerocoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='tenejero' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tenejeroleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='tenejero' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tenejeroleader = $row['leaderall'];                          
}













$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='centro i'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allcentro1 = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='centro i' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $centro1coorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='centro i' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $centro1coor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='centro i' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $centro1leaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='centro i' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $centro1leader = $row['leaderall'];                          
}





$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='sibul'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allsibul = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='sibul' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $sibulcoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='sibul' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $sibulcoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='sibul' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $sibulleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='sibul' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $sibulleader = $row['leaderall'];                          
}





$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='centro ii'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allcentro2 = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='centro ii' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $centro2coorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='centro ii' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $centro2coor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='centro ii' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $centro2leaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='centro ii' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $centro2leader = $row['leaderall'];                          
}









$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='apollo'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allapollo = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='apollo' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $apollocoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='apollo' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $apollocoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='apollo' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $apolloleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='apollo' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $apolloleader = $row['leaderall'];                          
}






$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='bagong paraiso'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allparaiso = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='bagong paraiso' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $paraisocoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='bagong paraiso' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $paraisocoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='bagong paraiso' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $paraisoleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='bagong paraiso' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $paraisoleader = $row['leaderall'];                          
}





$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='balut'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allbalut = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='balut' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $balutcoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='balut' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $balutcoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='balut' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $balutleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='balut' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $balutleader = $row['leaderall'];                          
}





$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='calero'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allcalero = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='calero' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $calerocoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='calero' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $calerocoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='calero' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $caleroleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='calero' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $caleroleader = $row['leaderall'];                          
}








$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='silahis'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allsilahis = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='silahis' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $silahiscoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='silahis' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $silahiscoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='silahis' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $silahisleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='silahis' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $silahisleader = $row['leaderall'];                          
}













$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='pagasa'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allpagasa = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='pagasa' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pagasacoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='pagasa' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pagasacoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='pagasa' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pagasaleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='pagasa' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pagasaleader = $row['leaderall'];                          
}
















$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='mulawin'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allmulawin = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='mulawin' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $mulawincoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='mulawin' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $mulawincoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='mulawin' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $mulawinleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='mulawin' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $mulawinleader = $row['leaderall'];                          

               
               
               
           }
        
           
        
        
        
        

$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='pantalan bago'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allpbago = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='pantalan bago' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pbagocoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='pantalan bago' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pbagocoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='pantalan bago' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pbagoleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='pantalan bago' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pbagoleader = $row['leaderall'];                          

               
               
               
           }
       
           
           
           
           
           
           

$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='kabalutan'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allkabalutan = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='kabalutan' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $kabalutancoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='kabalutan' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $kabalutancoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='kabalutan' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $kabalutanleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='kabalutan' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $kabalutanleader = $row['leaderall'];                          

               
               
               
           }
           
           
           
           
           
           
           
           
           
           
           

$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='pacar'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allpacar = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='pacar' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pacarcoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='pacar' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pacarcoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='pacar' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pacarleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='pacar' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $pacarleader = $row['leaderall'];                          

               
               
               
           }
           
           
           
           
           
           
    
    
    
$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='puksuan'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allpuksuan = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='puksuan' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $puksuancoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='puksuan' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $puksuancoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='puksuan' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $puksuanleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='puksuan' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $puksuanleader = $row['leaderall'];                          

               
               
               
           }
           
           
           
           
           
           
      









$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='maria fe'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allmariafe = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='maria fe' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $mariafecoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='maria fe' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $mariafecoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='maria fe' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $mariafeleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='maria fe' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $mariafeleader = $row['leaderall'];                          

               
               
               
           }
    
    
    
    
    
    
    
    

$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='dona'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $alldona = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='dona' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $donacoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='dona' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $donacoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='dona' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $donaleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='dona' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $donaleader = $row['leaderall'];                          

               
               
               
           }
    
    
    
    
    
     

$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='kaparangan'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allkaparangan = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='kaparangan' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $kaparangancoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='kaparangan' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $kaparangancoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='kaparangan' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $kaparanganleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='kaparangan' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $kaparanganleader = $row['leaderall'];                          

               
               
               
           }
   
    
    
    
    
    
    
    
    
     

$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='tagumpay'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $alltagumpay = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='tagumpay' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tagumpaycoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='tagumpay' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tagumpaycoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='tagumpay' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tagumpayleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='tagumpay' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tagumpayleader = $row['leaderall'];                          

               
               
               
           }
   
    
    
    
    
    
    
$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='wawa'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allwawa = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='wawa' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $wawacoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='wawa' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $wawacoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='wawa' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $wawaleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='wawa' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $wawaleader = $row['leaderall'];                          

               
               
               
           }
   
    
    
    
    
    
    
    
    
    
$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='masantol'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allmasantol = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='masantol' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $masantolcoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='masantol' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $masantolcoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='masantol' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $masantolleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='masantol' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $masantolleader = $row['leaderall'];                          

               
               
               
           }
   
    
    
    
    
           

    
    
      
    
$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='tapulao'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $alltapulao = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='tapulao' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tapulaocoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='tapulao' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tapulaocoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='tapulao' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tapulaoleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='tapulao' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tapulaoleader = $row['leaderall'];      
    
    
    
    

}



   
$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='tugatog'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $alltugatog = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='tugatog' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tugatogcoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='tugatog' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tugatogcoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='tugatog' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tugatogleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='tugatog' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $tugatogleader = $row['leaderall'];      
    
    
    
    

}







    
      
    
$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='bayan'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allbayan = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='bayan' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $bayancoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='bayan' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $bayancoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='bayan' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $bayanleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='bayan' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $bayanleader = $row['leaderall'];      
    
    
    

}


$sql1 = "SELECT count(*) as alltotal from attendance WHERE  barangay ='pantalan luma'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $allpluma = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as alltotalp from attendance WHERE  barangay ='pantalan luma' and status ='logged'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
              
               $allpres =$row['alltotalp'];
           }
                            $plumacoorpresent = "data unavailable";
                            

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='pantalan luma' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();}
                            $plumacoor = "data unavailable";
                            

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='pantalan luma' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $plumaleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='pantalan luma' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $plumaleader = $row['leaderall'];      
    
    
    

}




$sql1 = "SELECT count(*) as alltotal from attendance WHERE barangay ='talimundoc'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $alltalimundoc = $row['alltotal'];
                            }

$sql1 = "SELECT count(*) as coorpresent from attendance WHERE barangay ='talimundoc' and role = 'coordinator' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $talimundoccoorpresent = $row['coorpresent'];
                            }

  $sql1 = "SELECT count(*) as coorall from attendance WHERE barangay ='talimundoc' and role = 'coordinator'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $talimundoccoor = $row['coorall'];
                            }

  $sql1 = "SELECT count(*) as leaderpresent from attendance WHERE barangay ='talimundoc' and role = 'leader' and status !=''";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $talimundocleaderpresent = $row['leaderpresent'];

                          }

  $sql1 = "SELECT count(*) as leaderall from attendance WHERE barangay ='talimundoc' and role = 'leader'";
                  $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0) {
                 $row = $result1->fetch_assoc();
                            $talimundocleader = $row['leaderall'];      
    
    
    

}
















			?>
			<div class="card-box mb-30">
<div class="table-responsive">

                <table class="table table-hover table-bordered" id="sampleTable"   style="font-family:tahoma; font-size:115%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Barangay</th>
                      <th>COORDINATOR</th>
                      <th>LEADER</th>
                      <th>BATCH</th>
                      <th>ALL</th>

                    </tr>

                  </thead>
                  <tbody>
                      
                      
                      <tr>
                          
                           <td>29</td>
                  		 <td>Talimundoc</td>
                   		 <td><?php echo  $talimundoccoorpresent."/".$talimundoccoor; ?></td>
                   		 <td><?php echo  $talimundocleaderpresent."/".$talimundocleader; ?></td>
                   		 <td>9:00D4</td>
                   		 <td><?php echo  $alltalimundoc; ?></td>
                  	</tr>
                          
                  		 <td>28</td>
                  		 <td>Pantalan Luma</td>
                   		 <td><?php echo  $plumacoor ?></td>
                   		 <td><?php echo  $plumacoor ?></td>
                   		 <td>1:00</td>
                   		 <td><?php echo  $allpres."/".$allpluma; ?></td>
                  	</tr>
                      
                      
                      
                      
                        <tr>
                  		 <td>27</td>
                  		 <td>Bayan</td>
                   		 <td><?php echo  $bayancoorpresent."/".$bayancoor; ?></td>
                   		 <td><?php echo  $bayanleaderpresent."/".$bayanleader; ?></td>
                   		 <td>9:00D4</td>
                   		 <td><?php echo  $allbayan; ?></td>
                  	</tr>
                      
                      <tr>
                  		 <td>26</td>
                  		 <td>Tugatog</td>
                   		 <td><?php echo  $tugatogcoorpresent."/".$tugatogcoor; ?></td>
                   		 <td><?php echo  $tugatogleaderpresent."/".$tugatogleader; ?></td>
                   		 <td>9:00D4</td>
                   		 <td><?php echo  $alltugatog; ?></td>
                  	</tr>
                        
                        <tr>
                  		 <td>25</td>
                  		 <td>Tapulao</td>
                   		 <td><?php echo  $tapulaocoorpresent."/".$tapulaocoor; ?></td>
                   		 <td><?php echo  $tapulaoleaderpresent."/".$tapulaoleader; ?></td>
                   		 <td>9:00D3</td>
                   		 <td><?php echo  $alltapulao; ?></td>
                  	</tr>
                      
                        <tr>
                  		 <td>24</td>
                  		 <td>Masantol</td>
                   		 <td><?php echo  $masantolcoorpresent."/".$masantolcoor; ?></td>
                   		 <td><?php echo  $masantolleaderpresent."/".$masantolleader; ?></td>
                   		 <td>1:00</td>
                   		 <td><?php echo  $allmasantol; ?></td>
                  	</tr>
                    
                      
                        <tr>
                  		 <td>23</td>
                  		 <td>Wawa</td>
                   		 <td><?php echo  $wawacoorpresent."/".$wawacoor; ?></td>
                   		 <td><?php echo  $wawaleaderpresent."/".$wawaleader; ?></td>
                   		 <td>9:00D3</td>
                   		 <td><?php echo  $allwawa; ?></td>
                  	</tr>
                      
                      
                      
                      <tr>
                  		 <td>22</td>
                  		 <td>Tagumpay</td>
                   		 <td><?php echo  $tagumpaycoorpresent."/".$tagumpaycoor; ?></td>
                   		 <td><?php echo  $tagumpayleaderpresent."/".$tagumpayleader; ?></td>
                   		 <td>1:00</td>
                   		 <td><?php echo  $alltagumpay; ?></td>
                  	</tr>
                      
                       <tr>
                  		 <td>21</td>
                  		 <td>Kaparangan</td>
                   		 <td><?php echo  $kaparangancoorpresent."/".$kaparangancoor; ?></td>
                   		 <td><?php echo  $kaparanganleaderpresent."/".$kaparanganleader; ?></td>
                   		 <td>9:00</td>
                   		 <td><?php echo  $allkaparangan; ?></td>
                  	</tr>
                      
                      
                      <tr>
                  		 <td>20</td>
                  		 <td>Dona</td>
                   		 <td><?php echo  $donacoorpresent."/".$donacoor; ?></td>
                   		 <td><?php echo  $donaleaderpresent."/".$donaleader; ?></td>
                   		 <td>3:00D3</td>
                   		 <td><?php echo  $alldona; ?></td>
                  	</tr>
                      
                         <tr>
                  		 <td>19</td>
                  		 <td>Maria Fe</td>
                   		 <td><?php echo  $mariafecoorpresent."/".$mariafecoor; ?></td>
                   		 <td><?php echo  $mariafeleaderpresent."/".$mariafeleader; ?></td>
                   		 <td>2:00sabungan</td>
                   		 <td><?php echo  $allmariafe; ?></td>
                  	</tr>
                      
                      
                         <tr>
                  		 <td>18</td>
                  		 <td>Puksuan</td>
                   		 <td><?php echo  $puksuancoorpresent."/".$puksuancoor; ?></td>
                   		 <td><?php echo  $puksuanleaderpresent."/".$puksuanleader; ?></td>
                   		 <td>3:00D3</td>
                   		 <td><?php echo  $allpuksuan; ?></td>
                  	</tr>
                      
                      <tr>
                  		 <td>17</td>
                  		 <td>Pacar</td>
                   		 <td><?php echo  $pacarcoorpresent."/".$pacarcoor; ?></td>
                   		 <td><?php echo  $pacarleaderpresent."/".$pacarleader; ?></td>
                   		 <td>9:00D3</td>
                   		 <td><?php echo  $allpacar; ?></td>
                  	</tr>
                      
                      
                      
                      
                       	<tr>
                  		 <td>16</td>
                  		 <td>Kabalutan</td>
                   		 <td><?php echo  $kabalutancoorpresent."/".$kabalutancoor; ?></td>
                   		 <td><?php echo  $kabalutanleaderpresent."/".$kabalutanleader; ?></td>
                   		 <td>10:00D1</td>
                   		 <td><?php echo  $allkabalutan; ?></td>
                  	</tr>
                  	
                      	<tr>
                  		 <td>15</td>
                  		 <td>Pantalan Bago</td>
                   		 <td><?php echo  $pbagocoorpresent."/".$pbagocoor; ?></td>
                   		 <td><?php echo  $pbagoleaderpresent."/".$pbagoleader; ?></td>
                   		 <td>2:00sabungan</td>
                   		 <td><?php echo  $allpbago; ?></td>
                  	</tr>
                      
                      
                      	<tr>
                  		 <td>14</td>
                  		 <td>Mulawin</td>
                   		 <td><?php echo  $mulawincoorpresent."/".$mulawincoor; ?></td>
                   		 <td><?php echo  $mulawinleaderpresent."/".$mulawinleader; ?></td>
                   		 <td>9:00</td>
                   		 <td><?php echo  $allmulawin; ?></td>
                  	</tr>
                      
                      	<tr>
                  		 <td>13</td>
                  		 <td>Pag asa</td>
                   		 <td><?php echo  $pagasacoorpresent."/".$pagasacoor; ?></td>
                   		 <td><?php echo  $pagasaleaderpresent."/".$pagasaleader; ?></td>
                   		 <td>9:00D3</td>
                   		 <td><?php echo  $allpagasa; ?></td>
                  	</tr>
                      
                      
                      	<tr>
                  		 <td>12</td>
                  		 <td>Silahis</td>
                   		 <td><?php echo  $silahiscoorpresent."/".$silahiscoor; ?></td>
                   		 <td><?php echo  $silahisleaderpresent."/".$silahisleader; ?></td>
                   		 <td>8:00D1</td>
                   		 <td><?php echo  $allsilahis; ?></td>
                  	</tr>
                      
                      
                      	<tr>
                  		 <td>11</td>
                  		 <td>Calero</td>
                   		 <td><?php echo  $calerocoorpresent."/".$calerocoor; ?></td>
                   		 <td><?php echo  $caleroleaderpresent."/".$caleroleader; ?></td>
                   		 <td>9:00</td>
                   		 <td><?php echo  $allcalero; ?></td>
                  	</tr>
                      
                      	<tr>
                  		 <td>10</td>
                  		 <td>Balut</td>
                   		 <td><?php echo  $balutcoorpresent."/".$balutcoor; ?></td>
                   		 <td><?php echo  $balutleaderpresent."/".$balutleader; ?></td>
                   		 <td>8:00D1</td>
                   		 <td><?php echo  $allbalut; ?></td>
                  	</tr>
                      
                      	<tr>
                  		 <td>9</td>
                  		 <td>Paraiso</td>
                   		 <td><?php echo  $paraisocoorpresent."/".$paraisocoor; ?></td>
                   		 <td><?php echo  $paraisoleaderpresent."/".$paraisoleader; ?></td>
                   		 <td>2:00sabungan</td>
                   		 <td><?php echo  $allparaiso; ?></td>
                  	</tr>
                       	<tr>
                  		 <td>8</td>
                  		 <td>Apollo</td>
                   		 <td><?php echo  $apollocoorpresent."/".$apollocoor; ?></td>
                   		 <td><?php echo  $apolloleaderpresent."/".$apolloleader; ?></td>
                   		 <td>8:00D1</td>
                   		 <td><?php echo  $allapollo; ?></td>
                  	</tr>
                       	<tr>
                  		 <td>7</td>
                  		 <td>Centro 2</td>
                   		 <td><?php echo  $centro2coorpresent."/".$centro2coor; ?></td>
                   		 <td><?php echo  $centro2leaderpresent."/".$centro2leader; ?></td>
                   		 <td>9:00</td>
                   		 <td><?php echo  $allcentro2; ?></td>
                  	</tr>
                  	
                      	<tr>
                  		 <td>6</td>
                  		 <td>Sibul</td>
                   		 <td><?php echo  $sibulcoorpresent."/".$sibulcoor; ?></td>
                   		 <td><?php echo  $sibulleaderpresent."/".$sibulleader; ?></td>
                   		 <td>1:00</td>
                   		 <td><?php echo  $allsibul; ?></td>
                  	</tr>
                  	<tr>
                  		 <td>1</td>
                  		 <td>Palihan</td>
                   		 <td><?php echo  $palihancoorpresent."/".$palihancoor; ?></td>
                   		 <td><?php echo  $palihanleaderpresent."/".$palihanleader; ?></td>
                   		 <td>10:00D1</td>
                   		 <td><?php echo  $allpalihan; ?></td>
                  	</tr>
                  	<tr>
                  		 <td>2</td>
                  		 <td>Parang Parang</td>
                   		 <td><?php echo  $parangparangcoorpresent."/".$parangparangcoor; ?></td>
                   		 <td><?php echo  $parangparangleaderpresent."/".$parangparangleader; ?></td>
                   		 <td>10:00D1</td>
                   		 <td><?php echo  $allparangparang; ?></td>
                  	</tr>
                  	                  	<tr>
                  		 <td>3</td>
                  		 <td>Tala</td>
                   		 <td><?php echo  $talacoorpresent."/".$talacoor; ?></td>
                   		 <td><?php echo  $talaleaderpresent."/".$talaleader; ?></td>
                   		 <td>2:00sabungan</td>
                   		 <td><?php echo  $alltala; ?></td>
                  	</tr>
                  		  <tr>
                  		 <td>4</td>
                  		 <td>Tenejero</td>
                   		 <td><?php echo  $tenejerocoorpresent."/".$tenejerocoor; ?></td>
                   		 <td><?php echo  $tenejeroleaderpresent."/".$tenejeroleader; ?></td>
                   		 <td>3:00D3</td>
                   		 <td><?php echo  $alltenejero; ?></td>
                  	</tr>
                  		</tr>
                  		  <tr>
                  		 <td>5</td>
                  		 <td>Centro 1</td>
                   		 <td><?php  echo  $centro1coorpresent."/".$centro1coor; ?></td>
                   		 <td><?php echo  $centro1leaderpresent."/".$centro1leader; ?></td>
                   		 <td>10:00D1</td>
                   		 <td><?php echo  $allcentro1; ?></td>
                  	</tr>

				</div>

			
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>



	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script>
	 <script type="text/javascript">
       $(document).ready(function() {
                 $('#sampleTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
            });
   </script>
</body>
</html>