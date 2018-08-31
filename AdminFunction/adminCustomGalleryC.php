<?php include("../Connections/local.php");
/*if(!isset($_SESSION)){session_start();}
if(isset($_SESSION['usersID'])){
 $userID = $_SESSION['usersID'];
 $usersID = $_SESSION['usersID'];
 }else {echo "UnAuthroized Loggin";
  header('Location: NiceTry.html');
 }*/
?>
<!doctype html>
<head>
<meta charset="utf-8">
<link rel="icon" href="../Images/webImage/lfiLogo.png" sizes="any" type="image/svg+xml"/><title>LFI Custom Gallery</title>
<script src="../jquery-1.11.1.js"></script>
<script src="../bootstrap/bootstrap.js"></script>
<link href="../bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet"/>
<style>
body{	
	background-color:#CCC;
	}

#galleryArchive .btnEdt{
 width:100px;
 height:35px;;
}

#galleryArchive .btnEdt .btn-default{
	width:100px;
	height:35px;
}

#galleryArchive{
	width:100%;
	margin-left:auto;
	margin-right:auto;
	min-height:250px;
	background-color:#CCC;
	
}

#galleryArchive h2{
	text-align: center;
	color:white;
	width: 300px;	
	margin-left:auto;
	margin-right:auto;
	}

#galleryArchive h2 span{
	position:relative;
	top:5px;
	cursor:pointer;
	}
	
#galleryArchive h6{
	text-align: center;
	width:130px;	
	margin-left:auto;
	margin-right:auto;
	}

#galleryArchive .item{
	margin-right:0px;
	}
          
#galleryArchive .adjuster1{
		width:100px;
		position:absolute;
		top:40%; 	
		left:5px; 
		height:50px;
		margin-left:2%;
	}	
#galleryArchive .adjuster2{
	width:100px;
		position:absolute;
		top:40%; 	 
		right:5px;
		height:50px;
		margin-right:2%;
	}		


#galleryArchive .row .thumbnail{
			margin-left:auto;
			margin-right:auto;
			width:230px;
			height:200px;
			max-height:350px;
			border:0px;
		}
    
#galleryArchive .row .thumbnail img{
	 float:left;
 	 width:100px;
   height:80px; 					
 } 
  
#galleryArchive .row .thumbnail h3{
	text-decoration:underline;
	font-size:12px;
	overflow:hidden;
	 width:150px;
	 height:50px;
 }



#galleryArchive .row .thumbnail p{
	 height:20px;
 }
 

</style>
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
</head>
<body>



<div id="galleryArchive">
<h2><!--<a data-toggle="modal" data-target="#hBlogAdd"><span class="glyphicon glyphicon-plus-sign"></span></a></span>--><a data-toggle="modal" data-target="#cGallAdd"><span class="glyphicon glyphicon-plus-sign"></span></a><?php $result = mysqli_query($con,"SELECT `Title` FROM `homeblog` WHERE `ID` = 3"); 
				$row=mysqli_fetch_array($result) ;   
                echo $row['Title']; ?>
                </h2>
                
    <div id="gallArc" class="carousel slide" data-ride="carousel">
         
             <div class="carousel-inner">        
                        
		
					
                   <div class='item active'> 
                     <div class="row" style="margin-top:20px;">
                     <?php $result = mysqli_query($con,"SELECT * FROM `galleryarchive` WHERE `GalleryNumber` = 3 ORDER BY ID ASC");   ?>
						 	<?php while($row=mysqli_fetch_array($result)){ ?>
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
                           <?php }; ?>	
                        
                           
                          
                      </div><!--.row-->
                </div><!--/.item-->    
                  
         </div><!--/#gallarc-->
                 
</div><!--/#galleryArchive--> 

<?php include('adminFadeCustGallC.php') ?> 
</body>
