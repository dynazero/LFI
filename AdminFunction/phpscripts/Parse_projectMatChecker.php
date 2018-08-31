    <?php include("../../Connections/local.php");
 $projectID = $_POST['MyData']; ?>
        
 <?php $resultrowCheck=mysqli_query($con,"SELECT * FROM `materialsproject` JOIN `project` JOIN `materialsstorage` ON `materialsproject`.mainprojectID = `project`.projectID AND `materialsproject`.MaterialsStorageID = `materialsstorage`.materialsSID WHERE  `materialsproject`.mainprojectID = $projectID"); 
 		$rowCheck = mysqli_fetch_row($resultrowCheck);?>
       
 <?php if($rowCheck != ""){ ?>
        
       <table class="table" style="cursor:default;">
           
           	
      <tr>  
      <th><small>Items Taken</small></th> 
      <th><small>Quantity</small> </th> 
      </tr>
            
           
    <?php $result=mysqli_query($con,"SELECT * FROM `materialsproject` JOIN `project` JOIN `materialsstorage` ON `materialsproject`.mainprojectID = `project`.projectID AND `materialsproject`.MaterialsStorageID = `materialsstorage`.materialsSID WHERE  `materialsproject`.mainprojectID = $projectID");
		while ($row=mysqli_fetch_array($result)){ ?>           
          
    <tr>   	
        <td><?php echo 	$row['MaterialName']; ?> </td>
        <td><?php echo 	$row['MPQuantity']; ?></td>
    </tr>
    <?php }; ?>	 
    
    </table> 
    
    <?php }else{ ?>
		
		 <h4><small>No Materials Added to this Project Yet.</small></h4> 
         
	<?php	} ?>