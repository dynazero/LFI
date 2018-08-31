  

           <div class="rtcle">
           
           		<?php $result = mysqli_query($con,"SELECT * FROM homecontext WHERE ID = 1");  
		while($row=mysqli_fetch_array($result)){?>
        	<div class="rtcleWrap">
            <div class="col-6 col-sm-6 col-lg-4">
            <span class="glyphicon glyphicon-flag"></span>
              <h2><?php echo $row['Title'];?></h2>
              <p style="height:100px; overflow:hidden; width:246px;"><?php echo $row['Description'];?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#rticle<?php echo $row['ID'];?>">View details »</a></p>
           </div><!--/.col-6 col-sm-6 col-lg-4-->
           </div><!--/.rtcleWrap-->
           <?php  }?>
           	
                
                      
            <?php $result = mysqli_query($con,"SELECT * FROM homecontext WHERE ID = 2");  
		while($row=mysqli_fetch_array($result)){?>
        	<div class="rtcleWrap">
            <div class="col-6 col-sm-6 col-lg-4">
            <span class="glyphicon glyphicon-road"></span>
              <h2><?php echo $row['Title'];?></h2>
              <p style="height:100px; overflow:hidden; width:246px;"><?php echo $row['Description'];?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#rticle<?php echo $row['ID'];?>">View details »</a></p>
           </div><!--/.col-6 col-sm-6 col-lg-4-->
           </div><!--/.rtcleWrap-->
           <?php  }?>
           
                    
           <?php $result = mysqli_query($con,"SELECT * FROM homecontext WHERE ID = 3");  
		while($row=mysqli_fetch_array($result)){?>
        	<div class="rtcleWrap">
            <div class="col-6 col-sm-6 col-lg-4">
             <span class="glyphicon glyphicon-bookmark"></span>
              <h2><?php echo $row['Title'];?></h2>
              <p style="height:100px; overflow:hidden; width:246px;"><?php echo $row['Description'];?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#rticle<?php echo $row['ID'];?>">View details »</a></p>
           </div><!--/.col-6 col-sm-6 col-lg-4-->
           </div><!--/.rtcleWrap-->
           <?php  }?> 
           
                     
            
           </div><!--/.rtcle-->