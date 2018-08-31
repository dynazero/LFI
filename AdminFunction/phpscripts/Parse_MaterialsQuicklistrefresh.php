 <?php include("../../Connections/LFIConnection.php"); ?>
  <?php $result=mysqli_query($con,"SELECT * FROM `materialsstorage` JOIN `materialstype` ON `materialsstorage`.MaterialsTypeID = `materialstype`.materialsTID ORDER BY `materialsSID` DESC"); ?>
  
  
        <table id="materialsQuicklist" class="table" style="cursor:default;">
 
            <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Quantity</th>
            </tr>
                   
               
           
				
				
            <?php    while($row=mysqli_fetch_array($result)){
                    
                    
                    $alert = "<span class='badge'>!</span>";
                    
                    
                    if($row['Quantity'] >= $row['Minimum'] || $row['Quantity'] == $row['Minimum']){
                        
                        $alert = " " ;
                        
                        }?>
                
                
            	 
                <tr class="materialsCategory">
                   <td><?php echo $alert; ?> <?php echo $row['MaterialName'];?></td>
                   
                   <td><?php echo $row['Types'];?> </td>
                   <td><?php echo $row['Quantity'];?></td>                   
                </tr> <!--.mmultipleBody-->    
                     
            <?php }?>