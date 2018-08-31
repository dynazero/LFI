<?php include('../Connections/local.php'); ?>




<script>
	

	
$(document).ready(function(e) {


$("form#blogEditor").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_EditBlog.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
			
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

$("form#blogDeleter").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_DelBlog.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});


$("form#hGallEditor").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_EditHomeGallery.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
			
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

$("form#hGallDeleter").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_DelHomeGallery.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

$("form#hGallAdd").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_AddHomeGallery.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});


$("form#hBlogAdd").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_AddBlog.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

$("form#hArticleEditor").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_EditArticle.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
			
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

$("form#companyInfoEditor").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_EditContact.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
			
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});


$("form#custGallEditor").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_EditCustGall.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
			
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

$("form#custGallDeleter").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_DelCustGallery.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});


$("form#custGallAdd").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_AddCustGallery.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});
});



    
</script>


<div id="articleArea">
<h2>Article View</h2>
                
    <div id="homertcle" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
     
     <!--<div class="adjuster">
              <ol class="carousel-indicators">
                <li data-target="#blogGall" data-slide-to="0" class="active"></li>
                <li data-target="#blogGall" data-slide-to="1"></li>
                <li data-target="#blogGall" data-slide-to="2"></li>
              </ol>-->

              <!-- Wrapper for slides -->
             <div class="carousel-inner">        
                       
		<?php $result = mysqli_query($con,"SELECT * FROM homecontext");  
			  $rowElement =  mysqli_num_rows($result); 
			    
				$articleCount = 0;
				$x = $rowElement;
				$y = 4;
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
					$result = mysqli_query($con,"SELECT * FROM homecontext");  
					while($articleCount <= $ads){ 
					
					 ?>
                    <?php echo $nonactive; ?> 
                     <div class="row">
						 	<?php $row=mysqli_fetch_array($result) ?>
						<?php if ($row['ID'] != ""){?>
                        
						<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <h3><?php echo $row['Title']; ?></h3>
                            <div class="caption">
              <p style="overflow:hidden;"><?php echo $row['Description']; ?></p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#hArticle<?php echo $row['ID']; ?>">Edit details »</a></p>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                           <?php } ?>
                           	
                        <?php  $row=mysqli_fetch_array($result) ?>
                      	  <?php if ($row['ID'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <h3><?php echo $row['Title']; ?></h3>
                            <div class="caption">
                            <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#hArticle<?php echo $row['ID']; ?>">Edit details »</a></p>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                          <?php } ?>
                         
						 <?php  $row=mysqli_fetch_array($result) ?>
                      	  <?php if ($row['ID'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <h3><?php echo $row['Title']; ?></h3>
                            <div class="caption">
              <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#hArticle<?php echo $row['ID']; ?>">Edit details »</a></p>
              					</div>
                            </div>
                          </div><!--.col-sm-6-->
                          </div>
                           </div> 
                      </div><!--.row-->
                </div><!--/.item-->    
                          <?php $nonactive = "<div class='item'>";
						  } ?>
					<?php 
					 
					$articleCount++; 
					//echo $a;
					};
					
					
					?>                
         
         </div><!--/.carousel-inner-->
                      <!-- Controls -->
          <!--   <div class="adjuster1">
                <a class="left carousel-control" href="#homeGall" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              </div><!--/.adjuster1-->
           <!--  <div class="adjuster2">
              <a class="right carousel-control" href="#homeGall" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
        	 </div><!--/.adjuster2-->
             
       <!--</div><!--/.adjuster-->    
                
</div><!--/#articleArea-->    

<div id="homeGallArea">
<h2><a data-toggle="modal" data-target="#hGalleryAdd"><span class="glyphicon glyphicon-plus-sign"></span></a>Home Gallery View </h2>
                
    <div id="homeGall" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
     
     <!--<div class="adjuster">
              <ol class="carousel-indicators">
                <li data-target="#blogGall" data-slide-to="0" class="active"></li>
                <li data-target="#blogGall" data-slide-to="1"></li>
                <li data-target="#blogGall" data-slide-to="2"></li>
              </ol>-->

              <!-- Wrapper for slides -->
             <div class="carousel-inner">        
                       
		<?php $result = mysqli_query($con,"SELECT * FROM homegallery");  
			  $rowElement =  mysqli_num_rows($result); 
			    
				$setwrapper = 0;
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
					$result = mysqli_query($con,"SELECT * FROM homegallery");  
					while($setwrapper <= $ads){ 
					
					 ?>
                    <?php echo $nonactive; ?> 
                     <div class="row">
						 	<?php $row=mysqli_fetch_array($result) ?>
						<?php if ($row['ID'] != ""){?>
                        
						<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['Path']; ?>" alt="...">
                            <div class="caption">
                            <h3><?php echo $row['Title']; ?></h3>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?></p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#hGallery<?php echo $row['ID']; ?>">Edit details »</a></p>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                           <?php } ?>
                           	
                        <?php  $row=mysqli_fetch_array($result) ?>
                      	  <?php if ($row['ID'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['Path']; ?>" alt="...">
                            <div class="caption">
                            <h3><?php echo $row['Title']; ?></h3>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#hGallery<?php echo $row['ID']; ?>">Edit details »</a></p>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                          <?php } ?>
                         
						 <?php  $row=mysqli_fetch_array($result) ?>
                      	  <?php if ($row['ID'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['Path']; ?>" alt="...">
                            <div class="caption">
                            <h3><?php echo $row['Title']; ?></h3>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#hGallery<?php echo $row['ID']; ?>">Edit details »</a></p>
                           </div>
                       </div>
                           
                          </div><!--.col-sm-6-->
                          
                      </div><!--.row-->
                      
                </div><!--/.item-->    
                          <?php $nonactive = "<div class='item'>";
						  } ?>
					<?php 
					 
					$setwrapper++; 
					//echo $a;
					};
					
					
					?>      
                      </div>
                       
                    
                   
                       
     			    </div>
         </div><!--/.carousel-inner-->
                      <!-- Controls -->
            <div class="adjuster1">
                <a class="left carousel-control" href="#homeGall" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              </div><!--/.adjuster1-->
            <div class="adjuster2">
              <a class="right carousel-control" href="#homeGall" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
        	 </div><!--/.adjuster2-->
               </div>
      </div><!--/.adjuster-->    
                
</div><!--/#homeGallArea-->    

<div id="blogArea">
<h2><!--<a data-toggle="modal" data-target="#hBlogAdd"><span class="glyphicon glyphicon-plus-sign"></span></a></span>-->Project Gallery</h2>
                
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
                     <div class="row" style="margin-top:20px;">
						 	<?php $row=mysqli_fetch_array($result) ?>
						<?php if ($row['Title'] != ""){?>
                        
						<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['Path']; ?>" alt="...">
                            <div class="caption">
                           <div class="h3control">  <h3><?php echo $row['Title']; ?></h3></div>
             <!-- <p style="overflow:hidden;"><?php //echo $row['Description']; ?></p> -->
              <p><a class="btn btn-default" data-toggle="modal" data-target="#blog<?php echo $row['ID']; ?>">Edit details »</a></p>
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
                           <div class="h3control"> <h3><?php echo $row['Title']; ?></h3></div>
              <!-- <p style="overflow:hidden;"><?php //echo $row['Description']; ?> </p> -->
              <p><a class="btn btn-default" data-toggle="modal" data-target="#blog<?php echo $row['ID']; ?>">Edit details »</a></p>
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
                           <div class="h3control">  <h3><?php echo $row['Title']; ?></h3></div>
             <!-- <p style="overflow:hidden;"><?php // echo $row['Description']; ?> </p> -->
              <p><a class="btn btn-default" data-toggle="modal" data-target="#blog<?php echo $row['ID']; ?>">Edit details »</a></p>
                             
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
           </div>          
</div><!--/#blogArea-->    

<div id="galleryArchive">
<h2><!--<a data-toggle="modal" data-target="#hBlogAdd"><span class="glyphicon glyphicon-plus-sign"></span></a></span>--><a data-toggle="modal" data-target="#cGallAdd"><span class="glyphicon glyphicon-plus-sign"></span></a>Our Custom Gallery</h2>
                
    <div id="gallArc" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
     
     <!--<div class="adjuster">
              <ol class="carousel-indicators">
                <li data-target="#blogGall" data-slide-to="0" class="active"></li>
                <li data-target="#blogGall" data-slide-to="1"></li>
                <li data-target="#blogGall" data-slide-to="2"></li>
              </ol>-->

              <!-- Wrapper for slides -->
             <div class="carousel-inner">        
                        
		<?php $result = mysqli_query($con,"SELECT * FROM galleryarchive");  
			  $rowElement =  mysqli_num_rows($result); 
			    
				$a = 0;
				$x = $rowElement;
				$y = 6;
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
					$result = mysqli_query($con,"SELECT * FROM `galleryarchive`");  
					$row=mysqli_fetch_array($result);
					
					while($a <= $ads){  
					
					 ?>
                    <?php echo $nonactive; ?> 
                     <div class="row" style="margin-top:20px;">
                     
						 	<?php $row=mysqli_fetch_array($result) ?>
						<?php if ($row['PathFile'] != ""){?>
                        
						<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['PathFile']; ?>" alt="...">
                            <div class="caption">
                           <div class="h3control">  <h3><?php echo $row['Title']; ?></h3></div>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?></p>
              <div class="btnEdt"><a class="btn btn-default" data-toggle="modal" data-target="#gallarc<?php echo $row['ID']; ?>">Edit details »</a></div>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                           <?php } ?>
                           	
                        <?php  $row=mysqli_fetch_array($result) ?>
                      	  <?php if ($row['PathFile'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['PathFile']; ?>" alt="...">
                            <div class="caption">
                           <div class="h3control"> <h3><?php echo $row['Title']; ?></h3></div>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
               <div class="btnEdt"><a class="btn btn-default" data-toggle="modal" data-target="#gallarc<?php echo $row['ID']; ?>">Edit details »</a></div>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                          <?php } ?>
                         
						 <?php  $row=mysqli_fetch_array($result) ?>
                      	  <?php if ($row['PathFile'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['PathFile']; ?>" alt="...">
                            <div class="caption">
                           <div class="h3control">  <h3><?php echo $row['Title']; ?></h3></div>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
               <div class="btnEdt"><a class="btn btn-default" data-toggle="modal" data-target="#gallarc<?php echo $row['ID']; ?>">Edit details »</a></div>
                             </div>
                            </div>
                          </div><!--.col-sm-6-->
                          <?php } ?>
                         

					
						 	<?php $row=mysqli_fetch_array($result) ?>
						<?php if ($row['PathFile'] != ""){?>
                        
						<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['PathFile']; ?>" alt="...">
                            <div class="caption">
                           <div class="h3control">  <h3><?php echo $row['Title']; ?></h3></div>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?></p>
               <div class="btnEdt"><a class="btn btn-default" data-toggle="modal" data-target="#gallarc<?php echo $row['ID']; ?>">Edit details »</a></div>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                           <?php } ?>
                           	
                        <?php  $row=mysqli_fetch_array($result) ?>
                      	  <?php if ($row['PathFile'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['PathFile']; ?>" alt="...">
                            <div class="caption">
                           <div class="h3control"> <h3><?php echo $row['Title']; ?></h3></div>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
               <div class="btnEdt"><a class="btn btn-default" data-toggle="modal" data-target="#gallarc<?php echo $row['ID']; ?>">Edit details »</a></div>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                          <?php } ?>
                         
						 <?php  $row=mysqli_fetch_array($result) ?>
                      	  <?php if ($row['PathFile'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['PathFile']; ?>" alt="...">
                            <div class="caption">
                           <div class="h3control">  <h3><?php echo $row['Title']; ?></h3></div>
              <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
              <div class="btnEdt"><a class="btn btn-default" data-toggle="modal" data-target="#gallarc<?php echo $row['ID']; ?>">Edit details »</a></div>			
           					 </div>
                            </div>
                              
                          </div><!--.col-sm-6-->
                            <?php } ?>
                         
                           
                          
                      </div><!--.row-->
                </div><!--/.item-->    
                          <?php $nonactive = "<div class='item'>";
						   ?>
					<?php 
					 
					$a++;
					
					 }
					//echo $a;
					
					
					
					?>  
                     </div>
                      
              <div class="adjuster1">
                <a class="left carousel-control" href="#gallArc" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              </div><!--/.adjuster1-->
              <div class="adjuster2">
              <a class="right carousel-control" href="#gallArc" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
        	 </div><!--/.adjuster2-->
             
     </div><!--/.adjuster-->                 
            </div> 
                    
          
            
         </div><!--/.carousel-inner-->
                      <!-- Controls -->
           
           </div>    
                 
</div><!--/#galleryArchive-->    

<?php include 'adminFadeBlogs.php' ?>
<?php include 'adminFadeHomeGallery.php' ?>
<?php include 'adminFadeArticle.php' ?>
<?php include 'adminFadeCustGall.php' ?>
