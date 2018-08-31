<?php require_once('Connections/local.php'); 
		
?> 
		<?php $result = mysqli_query($con,"SELECT * FROM homeblog");  
			  $rowElement =  mysqli_num_rows($result); 
			    
				$a = 0;
				$x = $rowElement;
				$y = 3;
 				$tempMod = (float)($x / $y);
				$ads = $tempMod;
  				$tempMod = ($tempMod - (int)$tempMod)*$y;
  
   				// echo $x/$y." ";
	 			// echo $tempMod;
	
	
				if($tempMod > 0){
					$ads + 1;
					
					} 
					
					$nonactive = "<div class='item active'>";
					$result = mysqli_query($con,"SELECT * FROM homeblog");  
					while($a <= $ads){ 
					
					 ?>
                    <?php echo $nonactive; ?> 
                     <div class="row">
						 	<?php $row=mysqli_fetch_array($result) ?>
						<?php if ($row['Title'] != ""){?>
                        
						<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="<?php echo $row['Path']; ?>" alt="...">
                            <div class="caption">
                            <h3><?php echo $row['Title']; ?></h3>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?></p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#blog<?php echo $row['ID']; ?>">View details »</a></p>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                           <?php } ?>
                           	
                        <?php  $row=mysqli_fetch_array($result) ?>
                      	  <?php if ($row['Title'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="<?php echo $row['Path']; ?>" alt="...">
                            <div class="caption">
                            <h3><?php echo $row['Title']; ?></h3>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#blog<?php echo $row['ID']; ?>">View details »</a></p>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                          <?php } ?>
                         
						 <?php  $row=mysqli_fetch_array($result) ?>
                      	  <?php if ($row['Title'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="<?php echo $row['Path']; ?>" alt="...">
                            <div class="caption">
                            <h3><?php echo $row['Title']; ?></h3>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#blog<?php echo $row['ID']; ?>">View details »</a></p>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                          
                      </div><!--.row-->
                </div><!--/.item-->    
                          <?php } ?>
					<?php 
					$nonactive = "<div class='item'>"; 
					$a++; 
					//echo $a;
					} 
					
					
					?>                