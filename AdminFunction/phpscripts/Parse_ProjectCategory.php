<?php
    require_once("../../Connections/LFIConnection.php");
	$CategoryName = $_POST['CategoryName'];
	$result=mysqli_query($con,"SELECT * FROM projectcategory WHERE CategoryName = '$CategoryName'");
		 if(!mysqli_fetch_array($result))
			{
				
				
	
		if (!mysqli_query($con,"INSERT INTO projectcategory (CategoryName)
						VALUES('$CategoryName')"))
 						 {
  								echo("Error description: " . mysqli_error($con));
  						 }else{
							 
							 	echo("Category Inserted Complete...");
							 }
				
				
			}else {
				
				echo "Category Name Already Existed";
				}
	
?>
