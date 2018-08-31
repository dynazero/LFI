<?php  include("../../Connections/local.php");
 
 $resultProjA = mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 0 AND `users`.Activated = 0 AND `project`.View = 0");
		  
		  $rowProjA = mysqli_num_rows($resultProjA);
		  
		  if($rowProjA != 0){
			  
			  $rowProjA = 1;
			  
			  }
		  
		  $resultProjB = mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 0 AND `users`.Activated = 1 AND `project`.View = 1");
	
	 	  $rowProjB = mysqli_num_rows($resultProjB);
		  
		  if($rowProjB != 0){
			  
			  $rowProjB = 1;
			  
			  }
		  
		  $rowProjTotal = $rowProjA + $rowProjB;
		  
		  
		  //echo $rowProjA;
		   // echo $rowProjB;
			// echo  $rowProjTotal;
			 
			 if($rowProjA + $rowProjB == 2){
				 
				 $rowResults = "3";
				 
				 echo $rowResults;
				 
				 }else if($rowProjA == 1){
					 
					 echo "1";
					 
					 }else if($rowProjB == 1){
					 
					 echo "2";
					 
					 }else{
						 
						 echo "0";
						 
						 }
			
		  
		  
		  ?>