<!doctype html>
<html>
<head>
<?php require_once("../Connections/LFIConnection.php");
if(!isset($_SESSION)){session_start();}
if(isset($_SESSION['usersID'])){
 $userID = $_SESSION['usersID'];
 $usersID = $_SESSION['usersID'];
 }else {echo "UnAuthroized Loggin";
  header('Location: NiceTry.html');
 }
?>


 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title">My Materials</h4>
      </div><!-- /.modal-header -->
      <div class="modal-body">
      
      <div class="materialsArchive" style="padding-right:20px; max-height:1000px; overflow:auto; margin-right:10px;">
      
      
  
<div class="mtableContainer"><!--table-->
<div class="mtableWrapper"><!--tr-->
    <div class="mthead">
         <div>Project Name</div>
         <div>Material Name</div>
         <div>Scale</div>  
         <div>Weight</div>
         <div>Quantity</div>  
    </div><!--.mthead-->

         
   

    <div class="mtbody">
<?php 
	$result=mysqli_query($con,"SELECT * FROM `materials` INNER JOIN `materiallist` ON materials.materiallistID=materiallist.materiallistID INNER JOIN `project` ON project.projectID=materials.projectID WHERE `userID`='$usersID'");
	while($row=mysqli_fetch_array($result)){
	
?>	
	<div class="mmultipleBody">
       <div class="mdivA"><?php echo $row['ProjectName'];?></div>
       <div class="mdivB"><?php echo $row['MaterialName'];?></div>
       <div class="mdivC"><?php echo $row['Scale'];?></div>
       <div class="mdivD"><?php echo $row['Weight'];?></div>
       <div class="mdivE"><?php echo $row['Quantity'];?></div>
     </div> <!--.mmultipleBody-->   
       
<?php }?>
    </div><!--/.mtbody-->
</div><!--.mtableWrapper-->
</div><!-- /.mtableContainer -->
</div><!-- /.materialsArchive -->
      <div class="modal-footer">
        
      </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  
   </div>
