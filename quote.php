  <?php require_once('Connections/local.php'); ?>

<div id="quoteWrapper">
    <div class="quoteContainer">
    <?php $result = mysqli_query($con,"SELECT * FROM `comment` ORDER BY `ID` DESC");
			$row = mysqli_fetch_assoc($result)?>
			
		 
   	 <h2> <?php echo $row['Title']; ?></h2>
    <h3><?php echo $row['Description']; ?></h3>
    	
        
	</div><!--/.quoteContainer-->   
    </div><!--/#quoteWrapper-->  