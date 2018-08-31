<?php
include("../../Connections/local.php");

 $RoleName = "manager";
 $userID = $_POST['myuser'];
					 
					 $rowA1=mysqli_query($con,"SELECT COUNT(*) FROM `projectgallery` JOIN `commentgallery` ON `commentgallery`.projectgalleryID =`projectgallery`.projectgalleryID INNER JOIN `project` ON `projectgallery`.projectID = `project`.projectID  WHERE `commentgallery`.$RoleName = 0 AND `project`.adminOwner = $userID OR `projectgallery`.$RoleName = 0 AND `project`.adminOwner = $userID ");
					 
					 
					 
					 $resultCountA1 = mysqli_fetch_array($rowA1);
					 $pgPanelA1 = $resultCountA1['0']; 
					 
					 
						 $rowA2=mysqli_query($con,"SELECT COUNT(*) FROM `projectfiles` JOIN `project` ON `project`.projectID = `projectfiles`.projectID WHERE `projectfiles`.$RoleName = 0 AND `project`.adminOwner = $userID");
					 
					 $resultCountA2 = mysqli_fetch_array($rowA2);
					 $drPanelA2 = $resultCountA2['0']; 
					 
					
						 
						  $rowA3=mysqli_query($con,"SELECT COUNT(*) FROM `cadgallery` JOIN `project` ON `project`.projectID = `cadgallery`.projectID  WHERE `cadgallery`.$RoleName= 0 AND `project`.adminOwner = $userID");
					 
					 $resultCountA3 = mysqli_fetch_array($rowA3);
					 $cdPanelA3 = $resultCountA3['0'];
					
							 
						
						$projectView = $pgPanelA1+$drPanelA2+$cdPanelA3; 
						
						 echo $projectView;
						
						?>