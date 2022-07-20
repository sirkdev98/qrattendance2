<?php  
//export.php  
include 'include/connection.php';


if(isset($_POST["export"])){

 
  $from = $_POST['startDatePicker'];
  $to = $_POST['endDatePicker'];
  $site = $_POST['site'];
  $output = '';

    $sql ="SELECT
  tbl_employees.empid,
  tbl_employees.fname,
  tbl_employees.mname, 
  tbl_employees.lname, 
  tbl_employees.position,
  tbl_logs.logdate,
  tbl_logs.timein,
  tbl_logs.timeout,
  tbl_logs.siteid,
  tbl_logs.empid


FROM tbl_logs
JOIN tbl_employees
ON tbl_logs.empid = tbl_employees.empid WHERE tbl_logs.siteid = '$site' AND tbl_logs.logdate BETWEEN '$from' and '$to'";
                           $query = $conn->query($sql);
                          
      
 
  $output .='
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         
                        <th>Fname</th>
                        <th>Mname</th> 
                        <th>Lname</th>

                        <th>Position</th>   
                        <th>logdate</th>  
                        <th>Time in</th>  
                        <th>Time out</th>  
                        
                       
    
                    </tr>
  ';
  while ($row = $query->fetch_assoc())
  {
   $output .= '
    <tr>  
                         <td>'.$row["empid"].'</td>  
                         <td>'.$row["fname"].'</td>  
                         <td>'.$row["mname"].'</td>  
                         <td>'.$row["lname"].'</td> 
                        
                         <td>'.$row["position"].'</td>
                         <td>'.$row["logdate"].'</td>
                         <td>'.$row["timein"].'</td>   
                         <td>'.$row["timeout"].'</td>  
                  
                        
                    </tr>
   ';


  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Timelo_'.$from.'-'.$to.'.xls');
  echo $output;
 
  }
  ?>