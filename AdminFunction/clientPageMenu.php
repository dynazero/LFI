<style>
#editMSG{
	width:80px;
	margin-right:10px;		
	}

.innerSeparator{
	width:190px;
	min-height:100px;
	position:relative;
	left:75%;
}	

.smallerDate{
	width: 55px;
	height: 5px;
	font-size: 10px;
	position: absolute;	
	display: inline-block;
	margin-left: -74px;
	margin-top: 79px;
	}

.cdBadge{
position: absolute;
right:45px;
display: inline-block;
cursor:default;
}

.drBadge{
    position: absolute;
	right:45px;
	display: inline-block;
	cursor:default;
	}

.pgBadge{
    position: absolute;
	cursor:default;
	right:45px;
	display: inline-block;
	}
	
.imageInside{
width:80px; 
height:80px; 
display:inline-table; 
margin-bottom:10px;
margin-right:3px;
margin-left:3px;	
cursor: pointer;
border-radius: 2px;
}

.imageInside:hover{
	width:82px;
	height:82px;	
	margin-right:2px;
	margin-left:2px;
}	


.panel-title span:hover{
	cursor:pointer;	
	color:orange;
}

@media-moz-document url-prefix() {
  fieldset { display: table-cell; }
}



</style>


<script>
$(document).ready(function(e) {
	
	
	$("form#editProjectDetailprojectmanager").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_projectmanagerProjectDetailUpdate.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
	});


    $("form#editMSG").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_EditEmployee.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});


$("form#editProjectDetail").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_adminProjectDetailUpdate.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

$("form#projectImgAdd").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_ProjImgAdd.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});


$("form#projectCadAdd").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_AddCad.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});


$("form#projectDocAdd").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_AddDoc.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});



});

function logChecker(valueB){
	
	
	
	var firstVal = document.getElementById(firstbox).innerHTML;
	
	var secondVal = valueB;
	
	if('firstVal' == 'secondVal'){
		
		$("#confirm").val("hello World");
		
		}
	
	
	
	};
	
	function startViewRefresh(){
		setInterval(function(){
			var userID = $('#checksession').val();
			$.post("phpscripts/Parse_ViewHomeCheckerC.php",{myuser:userID},function(result){
				var viewresult = result; 
			
				
				if(viewresult != 0){
					
					$(".homeView").show(this).html('!');
					
					}else{
						
						$(".homeView").hide();
						}
				});		
			}, 10000)
			
		}
	
	
</script>

	
				<div class="mainMenu1 menuClass"><?php include('clientProjectAdmin.php');?></div>
                <div class="mainMenu2 menuClass"><?php include('clientMyProjects.php');?></div>
                <div class="mainMenu3 menuClass"><?php include('clientProposalAdd.php');?></div>
                  <div class="mainMenu4 menuClass"><?php include('PersonalInfo.php');?></div>
                
                                
                






<?php include('clientDetailModal.php');?>
<?php include('ProjectCadAdd.php');?>
<?php include('ProjectDocAdd.php');?>
<?php include('CommentGallery.php');?>
<?php include('clientMaterialsModalCheck.php');?>
 	
			 
               
			   