 <?php include("../Connections/LFIConnection.php"); ?>

<style>
.materialsCategory:hover{
	background:#CCC;
	cursor:default;
	}

.materialsUpdateDialog{
	background-color:#428BCA;
	border-radius:5px;
	cursor:default;
	}	
	

</style>
<script>
$(document).ready(function(e) {
	
	$(".materialsUpdateDialog").hide();
	$("#materialEditB").hide();
	$("#materialcontrolB").hide();
	
	$("#materialcontrolA").click(function(){
		
		$("#materialcontrolA").hide();
		$("#materialcontrolB").show();
		$("#materialEditA").hide("fast");
		$("#materialEditB").show("fast");
		
		});
		
	$("#materialcontrolB").click(function(){
		
		$("#materialcontrolB").hide();
		$("#materialcontrolA").show();
		$("#materialEditB").hide("fast");
		$("#materialEditA").show("fast");
		
		});	
	
	$(".materialsCategory").click(function(){
	
		$(this).children(".materialsUpdateDialog").toggle();
	
	});
	
    $("form#materialsStorageAdd").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_MaterialsAdd.php",
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

    $("form#materialsCustomCreateDialog").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_MaterialsStorageAdd.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			$(".localform").val(" ");
			quicklistrefresh();	
			quicklistrefreshB();
			materialsStorageUpdate();
			materialsLogsUpdate();				
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});
	   $("form#materialsCustomAddDialog").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: "phpscripts/Parse_MaterialsQuantityAdd.php",
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
			$(".localform").val(" ");
			quicklistrefresh();	
			materialsStorageUpdate();
			materialsLogsUpdate();	
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});
	
	

});


function quicklistrefresh(){
		
		var formData = 'confirmation';
			
		//var formData = val;
		
    	//var formData = this.value;
	
	 $.post("phpscripts/Parse_MaterialsQuicklistrefresh.php",{MyData:formData},function(result){
		 
    $("#materialsQuicklistBoard").html(result);
  });

    return false;	
	
	};
	
	
function quicklistrefreshB(){
		
		var formData = 'confirmation';
			
		//var formData = val;
		
    	//var formData = this.value;
	
	 $.post("phpscripts/Parse_MaterialsQuicklistrefreshAdd.php",{MyData:formData},function(result){
		 
    $("#materialsaddLocal").html(result);
  });

    return false;	
	
	};
	
	
</script>


<h3 class="page-header">Customize <small>Materials Customize</small></h3>
<button id="materialcontrolA" class="btn btn-primary" style="align:right;"  >Add</button>
<button id="materialcontrolB" class="btn btn-primary" style="align:right;">Create</button>
<div class="centerMatADD"> 
    <div class="leftMatADD"> 
            <div class="panel panel-primary" style="max-width:300px; max-height:600px; overflow:auto;">
            <div class="panel-heading" ><small>Materials Quicklist </small>   </div>
              <div id="materialsQuicklistBoard" class="panel-body">
            <?php $result=mysqli_query($con,"SELECT * FROM `materialsstorage` JOIN `materialstype` ON `materialsstorage`.MaterialsTypeID = `materialstype`.materialsTID ORDER BY `materialsSID` DESC"); ?>
            
                        <table id="materialsQuicklist" class="table" style="cursor:default;">
            
            <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Quantity</th>
            </tr>
                   
               
            
            
            <?php  while($row=mysqli_fetch_array($result)){
                    
                    
                    $alert = "<span class='badge'>!</span>";
                    
                    
                    if($row['Quantity'] >= $row['Minimum'] || $row['Quantity'] == $row['Minimum']){
                        
                        $alert = " " ;
                        
                        }
                
                
            ?>	 
                <tr class="materialsCategory">
                   <td><?php echo $alert; ?> <?php echo $row['MaterialName'];?></td>
                   
                   <td><?php echo $row['Types'];?> </td>
                   <td><?php echo $row['Quantity'];?></td>                   
                </tr> <!--.mmultipleBody-->    
                     
            <?php }?>
               </table>  
                        
            </div>
            </div>      
</div> <!--/.leftMatADD-->  

     <div id="materialEditA" class="rightMatADD"> 
     
     <form id="materialsCustomCreateDialog" method="post" enctype="multipart/form-data">
     
     <input class="form-control localform" name="materialsName" placeholder="Name" required/> 
	<h5><small>Materials Name</small></h5>
     <select class="form-control" name="controlType" required>
    	
    <?php $resulttype=mysqli_query($con,"SELECT * FROM `materialstype`");
                while($rowtype=mysqli_fetch_array($resulttype)){ ?>
                
    	<option value="<?php echo $rowtype['materialsTID']; ?>"><?php echo $rowtype['Types']; ?></option> 
	     <?php } ?>
     </select>     
     
     <h5><small>Control Type</small></h5>
     
     <input class="form-control localform" type="number" min="0" name="materialsQuantity" placeholder="Quantity" required/>
     <h5><small>Materials Quantity</small></h5>
     
     <input class="form-control localform" type="number" min="0" name="materialsMinimum" placeholder="Minimum" required/>
     <h5><small>Set Minimum Quantity</small></h5>
     
     <button type="submit" class="btn btn-primary">Create</button>
     </form>
        
	  </div> <!--/.rightMatADD-->
      
       <div id="materialEditB" class="rightMatADD"> 
     
     <form id="materialsCustomAddDialog" method="post" enctype="multipart/form-data">
     
     <select id="materialsaddLocal" class="form-control" name="controlType" required>
    	
    <?php $resulttype=mysqli_query($con,"SELECT * FROM `materialsstorage`");
                while($rowtype=mysqli_fetch_array($resulttype)){ ?>
                
    	<option value="<?php echo $rowtype['materialsSID']; ?>"><?php echo $rowtype['MaterialName']; ?></option> 
	     <?php } ?>
     </select>  
     
     <input name="materialName" type="hidden" value="<?php echo $rowtype['MaterialName'];?>" />
     
	<h5><small>Materials Name</small></h5>
     
     <input class="form-control localform" type="number" min="0" name="materialsQuantity" placeholder="Quantity" required/>
     <h5><small>Materials Quantity</small></h5>
     
     <button type="submit" class="btn btn-primary">Add</button>
     </form>
        
	  </div> <!--/.rightMatADD-->
		
</div><!--/.centerMatADD-->		