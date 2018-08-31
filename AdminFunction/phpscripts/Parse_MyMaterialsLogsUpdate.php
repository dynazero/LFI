<?php include("../../Connections/LFIConnection.php"); ?>
<tr>
      <th>Materials Name</th>
      <th>Quantity</th>
      <th>Time Stamps</th>  
      <th>ProjectName</th>
</tr>
         
   

   
<?php 
	$result=mysqli_query($con,"SELECT * FROM `materialsprojectbreak` LEFT JOIN `materialsproject` ON `materialsprojectbreak`.`MaterialProjectID` = `materialsproject`.materialsPID LEFT JOIN `users` ON `materialsprojectbreak`.encoder = `users`.usersID JOIN `materialsstorage` ON `materialsproject`.MaterialsStorageID = `materialsstorage`.materialsSID JOIN `project` ON `materialsproject`.mainprojectID = `project`.projectID ORDER BY `materialsBID` DESC" );
	while($row=mysqli_fetch_array($result)){
		
?>	
	<tr>
       <td><?php echo $row['MaterialName'];?></td>
       <td><?php echo $row['MBQuantity'];?></td>
       <td><?php echo $row['TimeStamp'];?></td>
       <td><?php echo $row['ProjectName'];?></td>       
    </tr> <!--.mmultipleBody-->   
     
<?php }?>