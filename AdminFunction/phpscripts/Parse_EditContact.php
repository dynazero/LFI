<?php
    
	
	require ('../../Connections/local.php');
	
 	$companyID = $_POST['companyID'];
    $formDescript =$_POST['address'];
    $contactTel =$_POST['telephone'];
    $contactCell   =$_POST['cellphone'];
    $contactEmail   =$_POST['email'];
    $contactFb  =$_POST['facebook'];   
 
  
  mysqli_query($con,"UPDATE `contact` SET `ID`='$companyID',`Address`='$formDescript',`Telephone`='$contactTel',`Cellphone`='$contactCell',`Email`='$contactEmail',`Facebook`='$contactFb' WHERE ID = $companyID");
  
  
echo "Company Info Updated";
	
	
?>
