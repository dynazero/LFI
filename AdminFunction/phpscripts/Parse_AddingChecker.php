<?php 
include('../../Connections/local.php'); 

$MaterialID = $_POST['MyData']; 

$result=mysqli_query($con,"SELECT * FROM `materialsstorage` JOIN `materialstype` ON `materialsstorage`.MaterialsTypeID = `materialstype`.materialsTID WHERE `materialsstorage`.materialsSID = '$MaterialID'");
	$row=mysqli_fetch_array($result);	
	
	$rookieChecker = 2;
	
		if($row['Quantity'] <= $row['Minimum']){
			
			
			$rookieChecker = 1;
			
			
			
		}



echo $rookieChecker;
?>