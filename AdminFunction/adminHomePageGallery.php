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

<h3 class="page-header">Customize <small>Edit Homepage Image Gallery</small></h3>

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
			  	$rowElement = $rowElement;
			    
				$articleCount = 0;
				$x = $rowElement;
				$y = 3;
				
 				$tempMod = (float)($x / $y);
			
				$ads = (int)$tempMod;
				
  				$tempMod = ($tempMod - (int)$tempMod)*$y;
				
   				// echo $x/$y." ";
	 			// echo $tempMod;
				
			
					
				if($tempMod != 1){
				
					
					$leftrightControl	= " <div class='adjuster1'>
                <a class='left carousel-control' href='#homeGall' role='button' data-slide='prev'>
                <span class='glyphicon glyphicon-chevron-left'></span>
              </a>
              </div>
            <div class='adjuster2'>
              <a class='right carousel-control' href='#homeGall' role='button' data-slide='next'>
                <span class='glyphicon glyphicon-chevron-right'></span>
              </a>
        	 </div> ";							
					
					}else{
						
						$leftrightControl	= " ";
						};
					
					$nonactive = "<div class='item active'>";
					
					$result = mysqli_query($con,"SELECT * FROM homegallery");  
					
					while($articleCount <= $ads){?>
					
					 
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
              
              </div><!--/.caption-->
                           </div><!--/.thumbnail-->
                        </div><!--.col-sm-6-->
                       
                          <?php } ?>
                           </div><!--/.row-->
                           </div><!--/.item Container>-->   
                         
					<?php 
					$nonactive = "<div class='item'>";
					$articleCount++; 
					//echo $a;
					}; ?>  
          </div><!--/.carousel-inner-->   
           
		   <?php echo $leftrightControl; ?>
                                      
	</div><!--/.#homeGall-->
</div><!--/#homeGallArea-->


<div id="articleArea">

                <h2>Article Area</h2>
                
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
			  	$rowElement = $rowElement;
			    
				
				$articleCount = 0;
				$x = $rowElement;
				$y = 3;
				
 				$tempMod = (float)($x / $y);
				
				
				$ads = (int)$tempMod;
				
				 
  				$tempMod = ($tempMod - (int)$tempMod)*$y;
  				 
   				// echo $x/$y." ";
	 			// echo $tempMod;
				
				
					$nonactive = "<div class='item active'>";
					
					$result = mysqli_query($con,"SELECT * FROM homecontext");  
					
					
					
					 echo $nonactive; ?> 
                   	 <?php $row=mysqli_fetch_array($result); ?>
                     <?php if ($row['ID'] != ""){?>
                        
                     <div class="row">		
                     				                     
						<div class="col-sm-6 col-md-4">
                        
                            <div class="thumbnail">
                            <h3><?php echo $row['Title']; ?></h3>
                            <div class="caption">
              <p style="overflow:hidden;"><?php echo $row['Description']; ?></p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#hArticle<?php echo $row['ID']; ?>">Edit details »</a></p>
                            </div> <!--/.caption-->
                            </div> <!--/.thumbnail-->
                          </div><!--.col-sm-6-->
                          
                           <?php } ?>
                           	
                     <?php  $row=mysqli_fetch_array($result); ?>
                      	  <?php if ($row['ID'] != ""){?>
                          
                           <div class="col-sm-6 col-md-4">
                           
                            <div class="thumbnail">
                            <h3><?php echo $row['Title']; ?></h3>
                            <div class="caption">
                            <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#hArticle<?php echo $row['ID']; ?>">Edit details »</a></p>
                            </div> <!--/.caption-->
                            </div> <!--/.thumbnail-->
                          </div><!--.col-sm-6-->
                          <?php } ?>
                         
						 <?php  $row=mysqli_fetch_array($result); ?>
                      	  <?php if ($row['ID'] != ""){?>
                           <div class="col-sm-6 col-md-4">
                           
                            <div class="thumbnail">
                            <h3><?php echo $row['Title']; ?></h3>
                            <div class="caption">
              <p style="overflow:hidden;"><?php echo $row['Description']; ?> </p>
              <p><a class="btn btn-default" data-toggle="modal" data-target="#hArticle<?php echo $row['ID']; ?>">Edit details »</a></p>
              				</div><!--/.caption-->
                           </div><!--/.thumbnail-->
                        </div><!--.col-sm-6-->
                        
                          <?php } ?>
                          </div><!--/.row-->
                           </div><!--/.item Container>-->   
                         
					
          </div><!--/.carousel-inner-->                                
	</div><!--/.#homertcle-->
</div><!--/#articleArea-->



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
			    
			$rowElement =  mysqli_num_rows($result); 
			  	$rowElement = $rowElement;
			    
				
				$articleCount = 0;
				$x = $rowElement;
				$y = 3;
				
 				$tempMod = (float)($x / $y);
				
				
				$ads = (int)$tempMod;
				
				 
  				$tempMod = ($tempMod - (int)$tempMod)*$y;
				
					
					
					$result = mysqli_query($con,"SELECT * FROM homeblog"); ?>
                    
                    <div class='item active'>
                     <div class="row" style="margin-top:20px;">
						 	<?php $row=mysqli_fetch_array($result) ?>
						<?php if ($row['Title'] != ""){?>
                        
						<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['Path']; ?>" alt="...">
                            <div class="caption">
                           <div class="h3control">  <small><a href="adminCustomGalleryA.php" target="_blank" style="cursor:pointer;">Edit Custom Gallery</a></small><h3><?php echo $row['Title']; ?></h3></div>
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
                           <div class="h3control"> <small><a href="adminCustomGalleryB.php" target="_blank" style="cursor:pointer;">Edit Custom Gallery</a></small><h3><?php echo $row['Title']; ?></h3></div>
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
                           <div class="h3control">  <small><a href="adminCustomGalleryC.php" target="_blank" style="cursor:pointer;">Edit Custom Gallery</a></small><h3><?php echo $row['Title']; ?></h3></div>
             <!-- <p style="overflow:hidden;"><?php // echo $row['Description']; ?> </p> -->
              <p><a class="btn btn-default" data-toggle="modal" data-target="#blog<?php echo $row['ID']; ?>">Edit details »</a></p>
              
              
              
              				</div><!--/.caption-->
                           </div><!--/.thumbnail-->
                        </div><!--.col-sm-6-->
                        <?php } ?>
                          </div><!--/.row-->
                           </div><!--/.item Container>-->   
                         <div class='item active'>
                     <div class="row" style="margin-top:20px;">
						 	<?php $row=mysqli_fetch_array($result) ?>
						<?php if ($row['Title'] != ""){?>
                        
						<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['Path']; ?>" alt="...">
                            <div class="caption">
                           <div class="h3control">  <small><a href="adminCustomGalleryD.php" target="_blank" style="cursor:pointer;">Edit Custom Gallery</a></small><h3><?php echo $row['Title']; ?></h3></div>
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
                           <div class="h3control"> <small><a href="adminCustomGalleryE.php" target="_blank" style="cursor:pointer;">Edit Custom Gallery</a></small><h3><?php echo $row['Title']; ?></h3></div>
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
                            
                           <div class="h3control"><small><a href="adminCustomGalleryF.php" target="_blank" style="cursor:pointer;">Edit Custom Gallery</a></small><h3><?php echo $row['Title']; ?></h3></div>
                          
             <!-- <p style="overflow:hidden;"><?php // echo $row['Description']; ?> </p> -->
              <p><a class="btn btn-default" data-toggle="modal" data-target="#blog<?php echo $row['ID']; ?>">Edit details »</a></p>
              
              
              
              				</div><!--/.caption-->
                           </div><!--/.thumbnail-->
                        </div><!--.col-sm-6-->
                        <?php } ?>
                          </div><!--/.row-->
                           </div><!--/.item Container>-->   
                           
                           
                              <div class='item active'>
                     <div class="row" style="margin-top:20px;">
						 	<?php $row=mysqli_fetch_array($result) ?>
						<?php if ($row['Title'] != ""){?>
                        
						<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <img src="../<?php echo $row['Path']; ?>" alt="...">
                            <div class="caption">
                           <div class="h3control">  <small><a href="adminCustomGalleryG.php" target="_blank" style="cursor:pointer;">Edit Custom Gallery</a></small><h3><?php echo $row['Title']; ?></h3></div>
             <!-- <p style="overflow:hidden;"><?php //echo $row['Description']; ?></p> -->
              <p><a class="btn btn-default" data-toggle="modal" data-target="#blog<?php echo $row['ID']; ?>">Edit details »</a></p>
                            </div>
                            </div>
                          </div><!--.col-sm-6-->
                           <?php } ?>
                           	
                        
                          </div><!--/.row-->
                           </div><!--/.item Container>-->   
                           
					
          </div><!--/.carousel-inner-->                                
	</div><!--/.#blogGall-->
</div><!--/#blogArea-->

<div id="galleryArchive"> 

<h2>Custom Gallery List</h2>


<?php $result=mysqli_query($con,"SELECT `Title` FROM homeblog ORDER BY `ID`"); ?>

	
 
		<?php $row=mysqli_fetch_array($result);?>
	<?php if ($row['Title'] != " "){?>
<a href="adminCustomGalleryA.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"><?php echo $row['Title']; ?></button></a>
	<?php }else{  ?>
		
		<a href="adminCustomGalleryA.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"> Custom Gallery A</button></a>
		
	<?php } ?>
    	    
    
		<?php $row=mysqli_fetch_array($result);?>
	<?php if ($row['Title'] != " "){?>
<a href="adminCustomGalleryB.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"><?php echo $row['Title']; ?></button></a>
	<?php }else{  ?>
		
		<a href="adminCustomGalleryB.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"> Custom Gallery B</button></a>
		
	<?php } ?>
		
          
		<?php $row=mysqli_fetch_array($result);?>
	<?php if ($row['Title'] != " "){?>
<a href="adminCustomGalleryC.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"><?php echo $row['Title']; ?></button></a>
	<?php }else{  ?>
		
		<a href="adminCustomGalleryC.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"> Custom Gallery C</button></a>
		
	<?php } ?>
		 

		<?php $row=mysqli_fetch_array($result);?>
	<?php if ($row['Title'] != " "){?>
<a href="adminCustomGalleryD.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"><?php echo $row['Title']; ?></button></a>
	<?php }else{  ?>
		
		<a href="adminCustomGalleryD.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"> Custom Gallery D</button></a>
		
	<?php } ?>
    
		<?php $row=mysqli_fetch_array($result);?>
	<?php if ($row['Title'] != " "){?>
<a href="adminCustomGalleryE.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"><?php echo $row['Title']; ?></button></a>
	<?php }else{  ?>
		
		<a href="adminCustomGalleryE.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"> Custom Gallery E</button></a>
		
	<?php } ?>
  
		<?php $row=mysqli_fetch_array($result);?>
	<?php if ($row['Title'] != " "){?>
<a href="adminCustomGalleryF.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"><?php echo $row['Title']; ?></button></a>
	<?php }else{  ?>
		
		<a href="adminCustomGalleryF.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"> Custom Gallery F</button></a>
		
	<?php } ?>

	

		<?php $row=mysqli_fetch_array($result);?>
	<?php if ($row['Title'] != " "){?>
<a href="adminCustomGalleryG.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"><?php echo $row['Title']; ?></button></a>
	<?php }else{  ?>
		
		<a href="adminCustomGalleryG.php" target="_blank" style="cursor:pointer;"><button class="btn btn-primary" style="display:inline-table"> Custom Gallery G</button></a>
		
	<?php } ?>
    
 
</div><!--/#galleryArchive-->

                          



<?php include('adminFadeBlogs.php'); ?>
<?php include('adminFadeHomeGallery.php'); ?>
<?php include('adminFadeArticle.php') ?>

