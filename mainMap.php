 <div id="mainMap">
		<div id="googleMap"></div>
    </div><!--/#mainMap-->
    
   
<div id="mapLogo">
        <div id="addressMap">
        <?php $result = mysqli_query($con,"SELECT * FROM `contact` ORDER BY `ID` DESC"); 
					$row = mysqli_fetch_assoc($result)?>
		
        
        
             <div class="mapTitle">Contact Us</div>
             <div class="mapContent"><?php echo $row['Address']; ?></div>
             <div class="mapContent"><?php echo $row['Cellphone']; ?></div>
             <div class="mapContent"><?php echo $row['Telephone']; ?> </div>
             <div class="mapContent"><?php echo $row['Email']; ?></div>
         </div><!--/#addressMap-->
    </div><!--/#mapLogo-->
    