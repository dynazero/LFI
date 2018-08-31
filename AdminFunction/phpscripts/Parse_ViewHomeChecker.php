<?php  include("../../Connections/local.php");

$RoleName = "admin";


$rowA1 = mysqli_query($con,"SELECT COUNT(*) FROM `projectgallery` LEFT JOIN `commentgallery` ON `commentgallery`.projectgalleryID =`projectgallery`.projectgalleryID WHERE `commentgallery`.admin = 0 OR `projectgallery`.admin = 0");

 					 $resultCountA1 = mysqli_fetch_array($rowA1);
					 $pgPanelA1 = $resultCountA1['0']; 
					 
	 $rowA2=mysqli_query($con,"SELECT COUNT(*) FROM `projectfiles` WHERE `projectfiles`.$RoleName = 0");
					 
					 $resultCountA2 = mysqli_fetch_array($rowA2);
					 $drPanelA2 = $resultCountA2['0']; 
					 
					 
							  $rowA3=mysqli_query($con,"SELECT COUNT(*) FROM `cadgallery` WHERE `cadgallery`.$RoleName = 0");
					 
					 $resultCountA3 = mysqli_fetch_array($rowA3);
					 $cdPanelA3 = $resultCountA3['0'];
					 
						$projectView = $pgPanelA1+$drPanelA2+$cdPanelA3;
					 
					 
					 echo $projectView;
					 


?>