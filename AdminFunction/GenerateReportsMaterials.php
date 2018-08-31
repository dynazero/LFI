<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LFI Project Reports</title>
<script src="../jquery-1.11.1.js"></script>
<script src="../bootstrap/bootstrap.js"></script>
<link href="../bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet"/>

<?php require_once("../Connections/LFIConnection.php");?>

<style>
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
</head>

<body>
<table id="materialsInventory" class="table table-bordered" style="cursor:default;">

<tr>
      <th>Materials Name</th>
      <th>Materials Type</th>
      <th>Quantity</th>  
      <th>Minimum</th>
</tr>
         
   

   
<?php 
	$result=mysqli_query($con,"SELECT * FROM `materialsstorage` JOIN `materialstype` ON `materialsstorage`.MaterialsTypeID = `materialstype`.materialsTID");
	while($row=mysqli_fetch_array($result)){
		
		
		$alert = "<span class='badge'>!</span>";
		
		
		if($row['Quantity'] >= $row['Minimum'] || $row['Quantity'] == $row['Minimum']){
			
			$alert = " " ;
			
			}
	
	
?>	
	<tr>
       <td><?php echo $alert; ?> <?php echo $row['MaterialName'];?></td>
       <td><?php echo $row['Types'];?></td>
       <td><?php echo $row['Quantity'];?></td>
       <td><?php echo $row['Minimum'];?></td>       
    </tr> <!--.mmultipleBody-->   
     
<?php }?>
   </table>


</body>
</html>