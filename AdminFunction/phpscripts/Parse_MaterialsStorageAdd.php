 <?php include("../../Connections/LFIConnection.php"); 
 
 $materialsName= $_POST['materialsName'];
 $controlType= $_POST['controlType'];
 $materialsQuantity= $_POST['materialsQuantity'];
 $materialsMinimum= $_POST['materialsMinimum']; 
    
	
	$result=mysqli_query($con,"SELECT * FROM `materialsstorage` WHERE `MaterialName` = '$materialsName'");
		$row=mysqli_fetch_array($result);
	
	if(isset($row['MaterialName'])){
		
		$queryMaterial = $row['MaterialName'];
		$addThisQuantity = $materialsQuantity;
		$oldQuantity = $row['Quantity'];
		$newQuantity = (int) $oldQuantity + $addThisQuantity;
		$quantityID = $row['materialsSID'];
		
		echo "Item Exist on the list and Value will be added to $queryMaterial";
		
		mysqli_query($con,"UPDATE `materialsstorage` SET `Quantity`= $newQuantity WHERE `materialsSID` = '$quantityID'");
		
	
	}else if($materialsQuantity < $materialsMinimum){
		
		echo "Cannot add this Material with lower Minimum than Quantity";
		
		
		}else if($materialsQuantity >= $materialsMinimum){
			
			mysqli_query($con,"INSERT INTO `materialsstorage`(`MaterialName`, `MaterialsTypeID`, `Quantity`, `Minimum`) VALUES ('$materialsName','$controlType','$materialsQuantity','$materialsMinimum')");
			
			echo "$materialsName Successfully Added";
			}
	

?>