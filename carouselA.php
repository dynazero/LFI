<?php include('Connections/local.php'); ?>

   							
                             
                             
    <!-- Indicators -->
     <div class="adjuster">
              <ol class="carousel-indicators">	<?php 
							$y = 0;
					$activeclass = "data-target='#photoGall' data-slide-to='".$y."' class='active'";
							
							$result = mysqli_query($con,"SELECT * FROM homegallery"); 
								
								while ($row=mysqli_fetch_array($result)){ ?>
                                
     			 <li  <?php echo $activeclass;?> > </li>
                   
              <?php  
			  $y++;
			  $activeclass = "data-target='#photoGall' data-slide-to='".$y."'"; }?>
                
				  </ol>
  


              <!-- Wrapper for slides -->
             <div class="carousel-inner">
              
            
<?php 
			$nonactive = "<div class='item active'>";
?> 
		<?php $result = mysqli_query($con,"SELECT * FROM homegallery");  
		
				
				while($row=mysqli_fetch_array($result)){?>
					 <?php echo $nonactive; ?> 
                <img src="" alt="" style="background-image:url(<?php echo $row['Path'];?>); background-repeat:no-repeat; background-position:center; background-size:cover; width:100%; height:500px;" >
                 
                  <div class="carousel-caption">
                  	<div class="crslTitle"><?php echo $row['Title'];?></div>
                  <div class="crslDesc"><?php echo $row['Description'];?></div>
                  </div>
                </div><!--/.item-->
                <?php $nonactive = "<div class='item'>";}?>
              
             <!-- Controls -->
              </div><!--/.carousel-inner-->
      </div><!--/.adjuster-->
      
              <div class="adjuster1">
                <a class="left carousel-control" href="#photoGall" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              </div><!--/.adjuster1-->
              <div class="adjuster2">
              <a class="right carousel-control" href="#photoGall" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
              
        	  </div><!--/.adjuster2-->
              