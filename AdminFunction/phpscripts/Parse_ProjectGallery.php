<?php
require_once("../../Connections/LFIConnection.php");
    
	$ProjectID = $_POST['ProjectName'];
	$uploads_dir = "projectGallery";
foreach ($_FILES['file']['error'] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['file']['tmp_name'][$key];
        $name = $_FILES['file']['name'][$key];
		$loc = "$uploads_dir/$name";
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
		mysqli_query($con,"INSERT INTO `projectgallery` (`projectID`,`ImageName`,`ImagePath`,`Approved`) VALUES('$ProjectID','$name','$uploads_dir/$name',0)");
    }
	
	echo "Upload Complete";
}
	
?>



