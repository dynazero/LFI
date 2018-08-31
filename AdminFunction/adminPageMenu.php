<style>

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
	
.imagebadge	{
    position: absolute;
	margin-left: -90px;
	}
	
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
	
	
	
	$(".mainBalanceBox").hide();
	
	$(".balanceTriggerBtn").click(function(){
		
		$(this).hide();
		$(this).parent("tr").children(".mainBalanceBox").fadeIn("fast");
		
		
		//$(".mainBalanceBox").hide("fast");
		
		//.children(".mainBalanceBox")
		});
		
	$(".closeBalanceBox").click(function(){
		$(".mainBalanceBox").hide();
		$(".balanceTriggerBtn").fadeIn("fast");
		
		//$(".mainBalanceBox").hide("fast");
		
		//.children(".mainBalanceBox")
		});
		
	$(".rowBalance").mouseleave(function(){
		$(".mainBalanceBox").hide();
		$(".balanceTriggerBtn").fadeIn("fast");
		
		//$(".mainBalanceBox").hide("fast");
		
		//.children(".mainBalanceBox")
		});	
	
	//$(".imageInside").mouseover(function(){
		
	//	$(this).removeClass("blink");
	//	$(this).parent("a").children(".imagebadge").css({"display":"none"});
		
	//	});
	
	
	
	$("form#UpdateBalance").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_UpdateBalance.php",
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

function startViewRefresh(){
		setInterval(function(){
			
			$.post("phpscripts/Parse_ViewHomeChecker.php",' ',function(result){
				var viewresult = result; 
				
				if(viewresult != 0){
					
					$(".homeView").show(this).html('!');
					
					}else{
						
						$(".homeView").hide();
						}
				});		
			}, 10000)
			
		}
		
function startViewRefreshB(){
		setInterval(function(){
			
			$.post("phpscripts/Parse_ProjectView.php",' ',function(result){
				var viewresult = result; 
				
				if(viewresult == 3){
					
					$(".projectView").show();
					
					$(".selectionClass4").css({"color":"red"});
					$(".selectionClass5").css({"color":"red"});
					
					
					}else if(viewresult == 1){
						
						$(".projectView").show();
						
						$(".selectionClass4").css({"color":"red"});
						$(".selectionClass5").css({"color":"none"});
						
						}else if(viewresult == 2){
							
							$(".projectView").show();
							$(".selectionClass4").css({"color":"none"});
							$(".selectionClass5").css({"color":"red"});
							
							
							}else{
								
								$(".projectView").hide();
								$(".selectionClass4").css({"color":"none"});
								$(".selectionClass5").css({"color":"none"});
								
								
								}
				});		
			}, 10000)
			
		}		
		
function logChecker(valueB){
	
	
	
	var firstVal = document.getElementById(firstbox).innerHTML;
	
	var secondVal = valueB;
	
	if('firstVal' == 'secondVal'){
		
		$("#confirm").val("hello World");
		
		}
	
	
	
	};
	
	


/* 
function calculateView(){
var sum = 0;
	
	$(".completepView").each(function(){
		
		sum += parseInt($(this).text());
		
		});
	alert(sum);
                }
				
				Parse_ViewHomeChecker.php
*/





		


</script>

	

				<div class="mainMenu1 menuClass"><?php include('adminProjectAdmin.php');?></div>
                <div class="mainMenu2 menuClass"><?php include('adminProjectAdd.php');?></div>
                <div class="mainMenu3 menuClass"><?php include('adminProjectAdminB.php');?></div>
                <div class="mainMenu4 menuClass"><?php include('adminMaterialsAdd.php');?></div>
                <div class="mainMenu5 menuClass"><?php include('adminNewUserProjectProposal.php');?></div>
                <div class="mainMenu6 menuClass"><?php include('adminOldUserProjectProposal.php');?></div>
              <!--  <div class="mainMenu7 menuClass"><h3 class="page-header">your special Menu2</h3></div> -->
                <div class="mainMenu8 menuClass"><?php include('adminMyMaterials.php');?></div>
                <div class="mainMenu14 menuClass"><?php include('adminMaterialsLogs.php');?></div>
                				<!--Menu2 repeat-->
                <div class="mainMenu9 menuClass"><?php include('adminMaterialsCustomize.php');?></div>                				
                <div class="mainMenu10 menuClass"><?php include('adminProjectCategory.php');?></div>                				
                <div class="mainMenu11 menuClass"><?php include('adminHomePageGallery.php');?></div>
                <div class="mainMenu15 menuClass"><?php include('adminCompanyInfo.php');?></div> 
                <div class="mainMenu12 menuClass"><?php include('adminCreateNewUser.php');?></div>
                <div class="mainMenu16 menuClass"><?php include('PersonalInfo.php');?></div>
                <div class="mainMenu13 menuClass"><?php include('adminUserManagement.php');?></div>                 
                






<?php include('adminDetailModal.php'); ?>
<?php include('adminProjectImageAdd.php'); ?>
<?php include('ProjectCadAdd.php')?>
<?php include('ProjectDocAdd.php')?>
<div id="commentGalleryUpdater">
<?php include('CommentGallery.php')?>
</div>
<?php include('materialsModalCheck.php')?>

 	
			 
               
			   