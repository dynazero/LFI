<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


Notification New Users
<table>

<tr>
<th>Project Name</th>
<th>User Name</th>
<th>PDF file Path</th>
</tr>
<?php 
	require_once("../Connections/LFIConnection.php");
	$result = mysqli_query($con,"SELECT * FROM `project` JOIN `users` WHERE `project`.Activated = 1 AND `users`.Activated = 1");
	while($row=mysqli_fetch_assoc($result)){
?>
	<tr>
    
    <td><?php echo $row['ProjectName'];?></td>
    <td><?php echo $row['UserName'];?></td>
    <td><a href="AdminFunction/<?php echo $row['filePath'];?>" download="PDFFile.pdf"><?php echo $row['filePath'];?></a></td>
    </tr>

<?php }?>

</table>
</body>

</html>