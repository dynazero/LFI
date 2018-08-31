<?php include("../../Connections/LFIConnection.php"); 
 

 $controlType= $_POST['controlType'];
 $materialsQuantity= $_POST['materialsQuantity'];
 $materialsName= $_POST['materialName'];
 
$result=mysqli_query($con,"SELECT * FROM `materialsstorage` WHERE `materialsSID` = '$controlType'");
		$row=mysqli_fetch_array($result);
 
   
  		$queryMaterial = $row['MaterialName'];
		$addThisQuantity = $materialsQuantity;
		$oldQuantity = $row['Quantity'];
		$newQuantity = (int) $oldQuantity + $addThisQuantity;
		$quantityID = $row['materialsSID'];
		
		
		
		mysqli_query($con,"UPDATE `materialsstorage` SET `Quantity`= $newQuantity WHERE `materialsSID` = '$quantityID'");
		
		

 echo "Value added to $queryMaterial";
?>