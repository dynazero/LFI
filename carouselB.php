


<h2>Portfolio Gallery</h2>
                <h6>Feature Projects</h6>
    <div id="blogGall" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
     
     <!--<div class="adjuster">
              <ol class="carousel-indicators">
                <li data-target="#blogGall" data-slide-to="0" class="active"></li>
                <li data-target="#blogGall" data-slide-to="1"></li>
                <li data-target="#blogGall" data-slide-to="2"></li>
              </ol>-->

              <!-- Wrapper for slides -->
             <div class="carousel-inner">        
                        
		<?php $result = mysqli_query($con,"SELECT * FROM homeblog");  
			  $rowElement =  mysqli_num_rows($result); 
			    
				$a = 0;
				$x = $rowElement;
				$y = 3;
 				$tempMod = (float)($x / $y);
				$ads = $tempMod;
  				$tempMod = ($tempMod - (int)$tempMod)*$y;
  				$closingDiv = "</div> </div>";
   				// echo $x/$y." ";
	 			// echo $tempMod;
	
	
				if($tempMod > 0){
					$ads + 1;				
					$closingDiv = "";
					
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
                          <div class="h3control"> <h3><?php echo $row['Title']; ?></h3> </div>
          <!--    <p style="overflow:hidden;"><?php echo $row['Description']; ?></p>-->
              <p id="blog<?php echo $row['ID']; ?>"><a class="btn btn-default" data-toggle="modal" data-target="#">View Gallery»</a></p>
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
                         <div class="h3control">    <h3><?php echo $row['Title']; ?></h3></div>
            <!--   <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p> -->
              <p id="blog<?php echo $row['ID']; ?>"><a class="btn btn-default" data-toggle="modal" data-target="#">View Gallery »</a></p>
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
                          <div class="h3control">      <h3><?php echo $row['Title']; ?></h3> </div>
          <!--     <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p> -->
              <p id="blog<?php echo $row['ID']; ?>"><a class="btn btn-default" data-toggle="modal" data-target="#blog<?php echo $row['ID']; ?>">View Gallery »</a></p>
                           </div>
                           </div>
                          </div><!--.col-sm-6-->
                           
                      </div><!--.row-->
                </div><!--/.item-->    
                          <?php $nonactive = "<div class='item'>";
						  } ?>
					<?php 
					 
					$a++; 
					//echo $a;
					} 
					
					 
					?>  
                    
                     </div>              
            </div>
         </div><!--/.carousel-inner-->
                      <!-- Controls -->
            <div class="adjuster1">
                <a class="left carousel-control" href="#blogGall" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              </div><!--/.adjuster1-->
            <div class="adjuster2">
              <a class="right carousel-control" href="#blogGall" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
        	 </div><!--/.adjuster2-->
             
      </div><!--/.adjuster-->    
                
 