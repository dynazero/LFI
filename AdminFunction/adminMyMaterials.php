
<?php include("../Connections/local.php");
/*if(!isset($_SESSION)){session_start();}
if(isset($_SESSION['usersID'])){
 $userID = $_SESSION['usersID'];
 $usersID = $_SESSION['usersID'];
 }else {echo "UnAuthroized Loggin";
  header('Location: NiceTry.html');
 }*/
?>



  <h3 class="page-header">Inventory <small>My Storage</small></h3>
  
  
    
<table id="materialsInventory" class="table" style="cursor:default;">

<tr>
      <th>Materials Name</th>
      <th>Materials Type</th>
      <th>Quantity</th>  
      <th>Minimum</th>
</tr>
         
   

   
<?php 
	$result=mysqli_query($con,"SELECT * FROM `materialsstorage` JOIN `materialstype` ON `materialsstorage`.MaterialsTypeID = `materialstype`.materialsTID");
	while($row=mysqli_fetch_array($result)){
		
		
		$alert = "<span class='badge'>!</span>";
		
		
		if($row['Quantity'] >= $row['Minimum'] || $row['Quantity'] == $row['Minimum']){
			
			$alert = " " ;
			
			}
	
	
?>	
	<tr>
       <td><?php echo $alert; ?> <?php echo $row['MaterialName'];?></td>
       <td><?php echo $row['Types'];?></td>
       <td><?php echo $row['Quantity'];?></td>
       <td><?php echo $row['Minimum'];?></td>       
    </tr> <!--.mmultipleBody-->   
     
<?php }?>
   </table>  