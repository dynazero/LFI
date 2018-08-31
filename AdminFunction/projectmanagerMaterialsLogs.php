
<?php include("../Connections/local.php");
/*if(!isset($_SESSION)){session_start();}
if(isset($_SESSION['usersID'])){
 $userID = $_SESSION['usersID'];
 $usersID = $_SESSION['usersID'];
 }else {echo "UnAuthroized Loggin";
  header('Location: NiceTry.html');
 }*/
?>



  <h3 class="page-header">Inventory <small>Materials Logs</small></h3>
  
<table id="materialsLogs" class="table" style="cursor:default;">

<tr>
      <th>Materials Name</th>
      <th>Quantity</th>
      <th>Time Stamps</th>  
      <th>ProjectName</th>
      <th>Encoder</th>
</tr>
         
   

   
<?php 
	$result=mysqli_query($con,"SELECT * FROM `materialsprojectbreak` LEFT JOIN `materialsproject` ON `materialsprojectbreak`.`MaterialProjectID` = `materialsproject`.materialsPID LEFT JOIN `users` ON `materialsprojectbreak`.encoder = `users`.usersID JOIN `materialsstorage` ON `materialsproject`.MaterialsStorageID = `materialsstorage`.materialsSID JOIN `project` ON `materialsproject`.mainprojectID = `project`.projectID WHERE `project`.adminOwner = $userID ORDER BY `materialsBID` DESC" );
	while($row=mysqli_fetch_array($result)){
		
		
		
		
		
?>	
	<tr>
       <td><?php echo $row['MaterialName'];?></td>
       <td><?php echo $row['MBQuantity'];?></td>
       <td><?php echo $row['TimeStamp'];?></td>
       <td><?php echo $row['ProjectName'];?></td>  
        <td><?php echo $row['UserName'];?></td>       
    </tr> <!--.mmultipleBody-->   
     
<?php }?>
   </table>  