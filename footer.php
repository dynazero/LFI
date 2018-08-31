	<a href="#ovrallWrap"><div class="logoFoot"> </div></a>
   
    <div class="footContainer"> 
    <div class="footA">
    	<div class="footwrap">
        	<div class="footTitle">Login</div>
            <div class="footContent">
           		<div data-toggle="modal"  data-target="#signupPanel">Sign Up</div>
                <div data-toggle="modal"  data-target="#loginPanel">Sign In</div>
                
            </div>
        </div>
                      
       <div class="footwrap">
       <div class="footTitle">Contact</div>
         <div class="footContent">            	
            	<div><a href="gallery/mainGallery.php" style="color:inherit;">Project Gallery</a></div>
                <div><a href="#photoGall" style="color:inherit;">Our Home Gallery</a></div>
            	<div><a href="#articlesArea" style="color:inherit;">LFI Articles</a></div>
                <div><a href="#blogArea" style="color:inherit;">Our Blogs</a></div>
                
            </div>           
         </div>   
         
      
               
    	<div class="footwrap">
        	<div class="footTitle">Contact</div>
            <?php $result = mysqli_query($con,"SELECT * FROM `contact` ORDER BY `ID` DESC"); 
					$row = mysqli_fetch_assoc($result)?>
		
            <div class="footContent">
            	<div><?php echo $row['Address']; ?></div>
            	<div><?php echo $row['Cellphone']; ?></div>
                <div><?php echo $row['Telephone']; ?></div>
            	<div><?php echo $row['Email']; ?></div>
            </div>            
        </div>
     
        
        </div><!--/.footA-->
        <div class="footB">
        <div id=socialMedia>
			
            
            
            <div class="socialButtons">
                <div class="fbglyp"></div>
                <div class="title"><a href="<?php echo $row['Facebook']; ?>">Facebook</a></div>
            </div>
            
           
       

      
            <div class="footNote">
       LFI Incorporated © 2014
       </div>
		
		</div><!--/#socialMedia-->
		</div><!--/.footB-->
                                   
    </div><!--/.footContainer-->
    