
<?php include("../Connections/LFIConnection.php");
if(!isset($_SESSION)){session_start();}
if(isset($_SESSION['usersID'])){
 $userID = $_SESSION['usersID'];
 $usersID = $_SESSION['usersID'];
 }else {echo "UnAuthroized Loggin";
  header('Location: NiceTry.html');
 }
?>

<div class="modal-dialog" style="min-width:300px; max-width:800px;">

    <div class="modal-content">
        
        <div class="modal-header">  
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        	<h4 class="modal-title">My Proposals</h4>
         </div>
         
         
         <div class="modal-body"  style="min-width:300px; height:auto;  overflow:hidden; padding-right:10px;">
         	<div class="projectArchive" style="padding-right:20px; max-height:1000px; overflow:auto; margin-right:10px;">
            
<div class="tableContainer"><!--table-->
  <div class="tableWrapper"><!--tr-->
     <div class="thead">
            <div>Project Name</div>
            <div>Activated</div>
            <div>Category</div>
            <div>Balance</div>    
     </div><!--.thead-->
  </div><!--.tableWrapper-->

 <div class="tableWrapper"><!--tr-->
     	<div class="tbody">
<?php 
	$result=mysqli_query($con,"SELECT * FROM project INNER JOIN `projectcategory` ON project.projectcategoryID=projectcategory.projectcategoryID WHERE `userID` = '$usersID'");
	while($row=mysqli_fetch_array($result)){
		
	
?>	
  
		<div class="multipleBody">
        
    	<div class="divAWrap1"><div class="divA"><?php echo $row['ProjectName'];?></div></div>
        <div class="divAWrap2">
        <div class="divB"><?php if($row['Activated'] == 1){
				echo "Active";
			}else{echo "Non Active";}?></div>
            
        <div class="divC"><?php echo $row['CategoryName'];?></div>
        <div class="divD"><?php 
		$tempID = $row['projectID'];
		$resultBalance=mysqli_query($con,"SELECT Balance FROM projectbalance WHERE projectID='$tempID'");
		$rowBalance=mysqli_fetch_array($resultBalance);
		
		$thisBal = $rowBalance['Balance'];
		
		if($thisBal == ""){
			
			echo "N/A";
			}else{
				echo $thisBal;
				}
			
		?></div>
        </div>
        </div> <!--.multipleBody-->
        <?php }?>
         </div><!--.tbody-->
    </div><!--.tableWrapper-->
    

</div><!--/.tableContainer-->

 </div><!--/.modalContainer-->
         </div><!--/.modal-body-->
         <div class="modal-footer">
         
         </div>
        
    </div><!--/.modal-content-->
</div><!--/.modal-dialog-->
