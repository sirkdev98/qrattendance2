<?php
 $server = "localhost";
$username = "root";
$password = "";
$dbname = "attendancedb";
                    
                        $conn = new mysqli($server,$username,$password,$dbname);
						$date = date('Y-m-d');
                        if($conn->connect_error){
                            die("Connection failed" .$conn->connect_error);}
?>
