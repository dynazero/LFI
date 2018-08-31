<?php include("../../Connections/local.php");
 $MaterialID = $_POST['MyData']; 
 
  $result=mysqli_query($con,"SELECT * FROM `materialsstorage` JOIN `materialstype` ON `materialsstorage`.MaterialsTypeID = `materialstype`.materialsTID WHERE `materialsstorage`.materialsSID = $MaterialID");
  
		$row=mysqli_fetch_array($result);  
		$alert = " ";
		$alertChecker = $row['AlertNot'];
		
		if($row['Quantity'] <= $row['Minimum']){ ?>
			
            
            
			<?php $alert = "<span class='badge'>!</span>" ; ?>
			
			<?php }
		?>	           
           <table class="table" style="cursor:default;">
           
           	
      <tr>  
      <th><small>Material Name</small></th> 
      <th><small>Inventory Type</small></th> 
      <th><small>Storage Available</small></th> 
      </tr>
            
           
            
          
    <tr>   	
    	<td> <?php echo $alert; ?> <?php echo $row['MaterialName']; ?> </td>
        <td><?php echo 	$row['Types']; ?> </td>
        <td><?php echo 	$row['Quantity']; ?> </td>
    </tr>
    
    </table> 