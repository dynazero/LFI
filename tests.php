<?php
						include("Connections/local.php");
			$resultUser = mysqli_query($con,'SELECT `usersID` FROM `users` WHERE `Activated` = 0');
		
		while($rowUser=mysqli_fetch_assoc($resultUser)){
			
			$delta = $rowUser['usersID'];
			
	$result = mysqli_query($con,"SELECT * FROM `project` WHERE `projectID` = $delta");
				
	while($row=mysqli_fetch_assoc($result)){
		
		var_dump($result);
		
	}
	
	
			$delta++;}
			
			?>
			
            