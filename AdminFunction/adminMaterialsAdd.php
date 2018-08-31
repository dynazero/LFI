<style>

.centerMatADD{
	/*max-width:700px;*/
	min-width: 750px;	
	}

.leftMatADD{
	float:left;
	}


.rightMatADD{
	float:right;
	}
	
	
</style>

<script>
$(document).ready(function(e) {
	
	minimumChecker();
    $("form#NewmaterialsAdd").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_NewMaterialsAdd.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
             $("#projectMatBoard").html(data);
			 materialsStorageCheck();
			 materialsLogsUpdate();
			 materialsStorageUpdate();
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

});


function materialsStorageCheck(){
		
		minimumChecker();
		var formData = $("#materialsADDName").val();
			
		//var formData = val;
		
    	//var formData = this.value;
	
	 $.post("phpscripts/Parse_materialsChecker.php",{MyData:formData},function(result){
		 
    $("#materialBoard").html(result);
  });

    return false;	
	
	};
	
function projectMatCheck(){
	
		var formData = $("#projectsMatAddName").val();
		
    	//var formData = $("#materialsADDName).value;
	
	 $.post("phpscripts/Parse_projectMatChecker.php",{MyData:formData},function(result){
		 
    $("#projectMatBoard").html(result);
  });

    return false;
	
	};
	
function materialsStorageUpdate(){
		
		var formData = 'confirmation';
			
		//var formData = val;
		
    	//var formData = this.value;
	
	 $.post("phpscripts/Parse_MyMaterialsUpdate.php",{MyData:formData},function(result){
		 
    $("#materialsInventory").html(result);
  });

    return false;	
	
	};
	
function materialsLogsUpdate(){
		
		var formData = 'confirmation';
			
		//var formData = val;
		
    	//var formData = this.value;
	
	 $.post("phpscripts/Parse_MyMaterialsLogsUpdate.php",{MyData:formData},function(result){
		 
    $("#materialsLogs").html(result);
  });

    return false;	
	
	};		
	
function minimumChecker(){
		
		var formData = $("#materialsADDName").val();
			
		//var formData = val;
		
    	//var formData = this.value;
	
	 $.post("phpscripts/Parse_AddingChecker.php",{MyData:formData},function(result){
		 
		if(result != 1){
			 
			 
			 $("#confirmMATbtn").removeAttr('disabled','disabled');
			 $("#checkingB").hide();
			 
			}else{
				 
			$("#confirmMATbtn").attr('disabled','disabled');
			 $("#checkingB").show();
			}
		 
    
	
  });

    return false;	
	
	};		
		


</script>



    <h3 class="page-header">Projects <small>Materials Add</small></h3> 
    
    <div class="centerMatADD"> 
    <div class="leftMatADD"> 
    
    <div class="panel panel-primary" style="max-width:300px;">
<div class="panel-heading" ><small>Materials</small></div>
  <div id="materialBoard" class="panel-body">
  
   <?php $result=mysqli_query($con,"SELECT * FROM `materialsstorage` JOIN `materialstype` ON `materialsstorage`.MaterialsTypeID = `materialstype`.materialsTID");
		$row=mysqli_fetch_array($result);  
		
			$alert = "<span class='badge'>!</span>";
		$alertChecker = $row['AlertNot'];
		
		if($row['Quantity'] >= $row['Minimum'] || $row['Quantity'] == $row['Minimum']){
			
			$alert = " " ;
			
			}
				
	
		?>	           
           <table class="table" style="cursor:default;">
           
           	
      <tr>  
      <th><small>Material Name</small></th> 
      <th><small>Inventory Type</small></th> 
      <th><small>Storage Available </small></th> 
      </tr>
            
           
            
          
    <tr>   	
    	<td><?php echo $alert; ?> <?php echo 	$row['MaterialName']; ?> </td>
        <td><?php echo 	$row['Types']; ?> </td>
        <td><?php echo 	$row['Quantity']; ?> </td>
    </tr>
    
    </table>     
           
  </div>
  </div>
  
  
   <div class="panel panel-success" style="max-width:300px;">
<div class="panel-heading" ><small>Projects</small></div>
  <div id="projectMatBoard" class="panel-body">
           
        <h4><small>Please Select a Project First</small></h4>    
           
  </div>
  </div>
  
  </div> <!--/.leftMatADD-->
  
  
  <div class="rightMatADD"> 
         
            <form id="NewmaterialsAdd" method="post" enctype="multipart/form-data">
            
            <select class="form-control" id="materialsADDName" name="materialsADDName" onChange="materialsStorageCheck()"> 
            
            <?php $result=mysqli_query($con,"SELECT * FROM `materialsstorage` JOIN `materialstype` ON `materialsstorage`.MaterialsTypeID = `materialstype`.materialsTID");
		while($row=mysqli_fetch_array($result)){?>	           
            
            	<option value="<?php echo $row['materialsSID']; ?>"><?php echo $row['MaterialName']; ?></option>
                
            <?php } ?>
            
            </select> 
            
             
            
           <h5><small>Materials</small></h5> 
           
           
           <select class="form-control" autofocus id="projectsMatAddName" name="projectsMatAddName" onChange="projectMatCheck()"> 
            
            <?php $result=mysqli_query($con,"SELECT `project`.`Activated` AS ProjectStatus, `project`.`Employees` AS Employees,`project`.`ProjectName` AS ProjectName, `project`.`projectID` AS projectID, `users`.`UserName` AS UserName,`project`.`filePath` AS filePath FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 1 OR `project`.Activated = 2");
		while($row=mysqli_fetch_array($result)){?>	           
            
            	<option value="<?php echo $row['projectID']; ?>"><?php echo $row['ProjectName']; ?></option>
                
            <?php } ?>
            
            </select> 
            <h5><small>Projects</small></h5> 
            
            <input class="form-control" min="1" name="quantity" type="number" value="1"/>
            
            <h5><small>Quantity</small></h5> 
            <input type="hidden" name="userEncoder" value="<?php echo $_SESSION['usersID'];?>"/>
            
            <button id="confirmMATbtn" class="btn btn-primary"  type="submit">Submit</button>
            
            <h4 id="checkingB"><small>*Material Reached minimum Limit</small></h4>
            
            </form>
            

  </div> <!--/.rightMatADD-->
		
</div><!--/.centerMatADD-->