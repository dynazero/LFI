<?php include('../../Connections/local.php'); 

	$maxPid = mysqli_query($con,"SELECT MAX(materialsPID) FROM `materialsproject`");	
	$maxPidresult=mysqli_fetch_array($maxPid);
			
$newmaterialsPID = $maxPidresult['MAX(materialsPID)'] + 1;
$materialID = $_POST['materialsADDName'];
$projectID = $_POST['projectsMatAddName'];
$Quantity = $_POST['quantity'];
$userID = $_POST['userEncoder'];


 

$storageCheck = mysqli_query($con,"SELECT `materialsstorage`.Quantity FROM `materialsstorage` WHERE `materialsstorage`.materialsSID = $materialID");	
	$storageCheckresult=mysqli_fetch_array($storageCheck);
	$existmatQuantity=$storageCheckresult['Quantity'];
	
if($existmatQuantity <= $Quantity)
{
	
	
	$Quantity = $existmatQuantity;		
	$storageQuantityless = 0;
	
	
	
	
	}else{

	
	$storageQuantityless = $existmatQuantity - $Quantity;
	$Quantity = $Quantity;
	}
	$existMatCheck = mysqli_query($con,"SELECT * FROM `materialsproject` WHERE `mainprojectID` = $projectID AND `MaterialsStorageID` = $materialID");	
	$existMatCheckresult=mysqli_fetch_array($existMatCheck);
	
	
		if($existMatCheckresult != ""){
			//there's existing record
			
			$existingQuantity=$existMatCheckresult['MPQuantity'];
			$mpQuantityAdd=$existingQuantity + $Quantity;
			$existingmaterialsPID=$existMatCheckresult['materialsPID'];
			
			mysqli_query($con,"UPDATE `materialsstorage` SET Quantity='$storageQuantityless' WHERE `materialsSID`='$materialID'");
			
			mysqli_query($con,"UPDATE `materialsproject` SET MPQuantity='$mpQuantityAdd' WHERE `materialsPID` = '$existingmaterialsPID'");
			
			mysqli_query($con,"INSERT INTO `materialsprojectbreak`(`MaterialProjectID`, `MBQuantity`, `TimeStamp`, `encoder`) VALUES ('$existingmaterialsPID','$Quantity',NOW(),'$userID')");
			
			
			}else{
				//no MAT record
				mysqli_query($con,"UPDATE `materialsstorage` SET Quantity='$storageQuantityless' WHERE materialsSID='$materialID'");
				
				mysqli_query($con,"INSERT INTO `materialsproject`(`materialsPID`, `mainprojectID`, `MaterialsStorageID`, `MPQuantity`) VALUES ('$newmaterialsPID','$projectID','$materialID','$Quantity')");
				
				mysqli_query($con,"INSERT INTO `materialsprojectbreak`(`MaterialProjectID`, `MBQuantity`, `TimeStamp`, `encoder`) VALUES ('$newmaterialsPID','$Quantity',NOW(),'$userID')");
				
				};?>
				
                
                
                
                
                
                
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