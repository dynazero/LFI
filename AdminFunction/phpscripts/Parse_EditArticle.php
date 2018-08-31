<?php
require ('../../Connections/local.php');
	
  $articleTitle =$_POST['hArticleTitle'];
  $articleID = $_POST['hArticleID'];
  $formDescript =$_POST['descript']; 
  
  
  
  mysqli_query($con,"UPDATE `homecontext` SET `ID`='$articleID',`Title`='$articleTitle',`Description`='$formDescript' WHERE ID =  $articleID ");
  
echo "Article Updated";
    ?>