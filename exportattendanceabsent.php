<?php  
//export.php  
include 'include/connection.php';
if(isset($_POST["exportabsent"]))
{
  $eventID = $_POST['eventID'];
  $output = '';
    $sql ="SELECT * FROM attendance where eventID = '$eventID' and status !='logged'";
                           $query = $conn->query($sql);
                          
      
 
  $output .='
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>Count</th>  
                         <th>Fname</th>
                          <th>Mname</th> 
                           <th>Lname</th>   
                         <th>Time in</th>  
                         <th>Barangay</th>  
                         <th>Role</th>
                         <th>Status</th>
    
                    </tr>
  ';
  while ($row = $query->fetch_assoc())
  {
   $output .= '
    <tr>  
                         <td>'.$row["voterID"].'</td>  
                         <td>'.$row["count"].'</td>  
                         <td>'.$row["fname"].'</td>  
                         <td>'.$row["mname"].'</td>  
                         <td>'.$row["lname"].'</td>  
                         <td>'.$row["timein"].'</td>  
                         <td>'.$row["barangay"].'</td>  
                         <td>'.$row["role"].'</td>
                         <td>'.$row["status"].'</td>
                    </tr>
   ';
}
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 
  }
?>