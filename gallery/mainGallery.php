<!DOCTYPE html>
<html>
<head>
 <script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/scripts.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="icon" href="../Images/webImage/lfiLogo.png" sizes="any" type="image/svg+xml"/><title>LFI Gallery</title>
  <link rel="stylesheet" href="css/demo-styles.css" />
  <script src="js/modernizr-1.5.min.js"></script>
  <style>

.logolandScape2{
	background-image:url(../Images/UploadedImage/rm3.jpg);
	
	}

.logolandScape3{
	background-image:url(../Images/UploadedImage/mle3.jpg);
	}	
	
.page-title{
	font-size: 2.4em;	
	}	
	
.go{
	display:none;
	}	
	
</style>
</head>

<body>
 <header>
   <a href="../index.php" class="tutorial-link">Back to Home Page</a>
 </header>
  <!--===============================Start Demo====================================================-->
<div class="demo-wrapper">
<!-- classnames for the pages should include: 1) type of page 2) page name-->
  <div class="s-page random-restored-page">
    <h2 class="page-title">TestRoom</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="s-page custom-page">
    <h2 class="page-title">Thank You!</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  
   <!-- ********************************    start     random-r-page     **************************************--> 
  <div class="r-page random-r-page">

    <div class="page-content">
      <h2 class="page-title">Our first Panel</h2>
      <p>Chew iPad power cord chew iPad power cord attack feet chase mice leave dead animals as gifts and stick butt in face chew iPad power cord. Chase mice. Run in circles use lap as chair why must they do that. Intrigued by the shower destroy couch leave hair everywhere sleep on keyboard chew iPad power cord. Use lap as chair. Missing until dinner time stand in front of the computer screen, intently sniff hand. Find something else more interesting. Destroy couch play time so inspect anything brought into the house hate dog burrow under covers. Sleep on keyboard destroy couch so hate dog so hide when guests come over. Chase mice destroy couch lick butt throwup on your pillow use lap as chair yet intrigued by the shower but climb leg. Stare at ceiling make muffins or hunt anything that moves claw drapes. Intently sniff hand intrigued by the shower. Why must they do that. Cat snacks leave dead animals as gifts or inspect anything brought into the house sweet beast so stare at ceiling give attitude. Flop over claw drapes but sun bathe lick butt, and chase mice. Rub face on everything lick butt leave hair everywhere lick butt, missing until dinner time for use lap as chair lick butt. Make muffins leave dead animals as gifts play time. Chew foot intrigued by the shower stare at ceiling inspect anything brought into the house yet hopped up on goofballs. 

      Hunt anything that moves intently sniff hand for hunt anything that moves play time. Chew foot climb leg throwup on your pillow so lick butt yet make muffins hate dog. Intrigued by the shower. Intently sniff hand shake treat bag. Cat snacks burrow under covers make muffins but all of a sudden go crazy find something else more interesting. Flop over chase mice. Give attitude. Inspect anything brought into the house. Stick butt in face sun bathe so find something else more interesting and intrigued by the shower. Rub face on everything use lap as chair. 

      Under the bed claw drapes chase mice but leave hair everywhere yet make muffins yet claw drapes. Use lap as chair. Find something else more interesting stretch for under the bed. Nap all day intrigued by the shower, hate dog sweet beast intently sniff hand so hate dog nap all day. Swat at dog hide when guests come over and mark territory chase mice for cat snacks. Use lap as chair. Lick butt throwup on your pillow need to chase tail. 

      Mark territory. Stick butt in face shake treat bag yet hunt anything that moves, yet hopped up on goofballs yet stare at ceiling under the bed. Give attitude chase imaginary bugs stretch so hunt anything that moves so hide when guests come over but intrigued by the shower find something else more interesting. Make muffins behind the couch for chew foot. Sweet beast flop over but throwup on your pillow. Intently sniff hand use lap as chair and missing until dinner time and chase imaginary bugs. 
      </p>
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
 <!-- ********************************     end random-r-page/ start Panel Lists ************************************--> 
  <div class="r-page random-r-page panelOne">

    <div class="page-content">
    <?php 
	include("../Connections/local.php"); 
	$result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 1");
		 	$rowElement =  mysqli_fetch_row($result); ?>
      <h2 class="page-title"><a href="../galleryA.php" style="text-decoration:none; color:white;"><?php echo $rowElement[0]; ?></a></h2>
      
      <?php include('../galleryA.php'); ?>
      
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
  
    <div class="r-page random-r-page panelTwo">

    <div class="page-content">
    <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 2");
		 	$rowElement =  mysqli_fetch_row($result);?>
      <h2 class="page-title"><a href="../galleryB.php" style="text-decoration:none; color:white;"><?php echo $rowElement[0]; ?></a></h2>
      
       <?php include('../galleryB.php'); ?>
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
  
  <div class="r-page random-r-page panelSpe">

    <div class="page-content">
    <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 7");
		 	$rowElement =  mysqli_fetch_row($result);?>
      <h2 class="page-title"><a href="../galleryG.php" style="text-decoration:none; color:#455962;"><?php echo $rowElement[0]; ?></a></h2>
       <?php include('../galleryG.php'); ?>
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
  
   <div class="r-page random-r-page panelThree">

    <div class="page-content">
    <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 3");
		 	$rowElement =  mysqli_fetch_row($result);?>
      <h2 class="page-title"><a href="../galleryc.php" style="text-decoration:none; color:#999;"><?php echo $rowElement[0]; ?></h2></h2>
      <?php include('../galleryC.php'); ?>
      
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
  
  <div class="r-page random-r-page panelFour">

    <div class="page-content">
    <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 4");
		 	$rowElement =  mysqli_fetch_row($result);?>
      <h2 class="page-title"><a href="../galleryD.php" style="text-decoration:none; color:white;"><?php echo $rowElement[0]; ?></a></h2>
      <?php include('../galleryD.php'); ?>
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
  
   <div class="r-page random-r-page panelSpe2">

    <div class="page-content">
    <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 6");
		 	$rowElement =  mysqli_fetch_row($result);?>
      <h2 class="page-title"><a href="../galleryF.php" style="text-decoration:none; color:#DDDDDD;"><?php echo $rowElement[0]; ?></a></h2>
      <?php include('../galleryF.php'); ?>
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
  
  
  <div class="r-page random-r-page panelFive">

    <div class="page-content">
    <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 5");
		 	$rowElement =  mysqli_fetch_row($result);?>
      <h2 class="page-title"><a href="../galleryE.php" style="text-decoration:none; color:white;"><?php echo $rowElement[0]; ?></a></h2>
      <?php include('../galleryE.php'); ?>
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
  
  
   <!-- ******************************************     end Panel Lists ****************************************-->
<!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-1 slideTextUp" data-page-type="r-page" data-page-name="panelOne">
         <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 1");
		 	$rowElement =  mysqli_fetch_row($result);?>
          <div><p><?php echo $rowElement[0]; ?></p></div> <!--landscapeOne-->
          <div><p>View Our Commercial Models</p></div><!--landscapeOne Scrape-->
        </li>
        <li class="tile tile-small tile tile-2 slideTextRight" data-page-type="r-page" data-page-name ="panelThree">
          <div><p class="icon-arrow-right"></p></div><!--squareOne Scrape-->
         <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 3");
		 	$rowElement =  mysqli_fetch_row($result);?>
          <div><p><?php echo $rowElement[0]; ?></p></div><!--squareOne-->
        </li>
        <li class="tile tile-small last tile-3" data-page-type="r-page" data-page-name="panelThree">
          <p class="icon-calendar-alt-fill"></p>
        </li>
        <li class="tile tile-big tile-4 fig-tile" data-page-type="r-page" data-page-name="panelFive">
          <figure>
            <img src="images/mainpage.png" /><!--landscapeFour-->
            <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 5");
		 	$rowElement =  mysqli_fetch_row($result);?>
            <figcaption class="tile-caption caption-left"><?php echo $rowElement[0]; ?></figcaption><!--landscapeFour Scrape-->
          </figure>
        </li>
      </div>

      <div class="col2 clearfix">
        <li class="tile tile-big tile-5" data-page-type="r-page" data-page-name="panelTwo">
        <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 2");
		 	$rowElement =  mysqli_fetch_row($result);?>
          <div><p style="font-size: 28px;"><span class="icon-cloud"></span><?php echo $rowElement[0]; ?></p></div> <!--landscapeTwo-->
        </li>
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="panelFour">
          <div><p style="font-size: 30px;"><span class="icon-skype"></span>High Rise</p></div>  <!--landscapeThree-->
          <div><p style="font-size: 35px;">Buildings and Infrastractures</p></div>
        </li>
        <!--Tiles with a 3D effect should have the following structure:
            1) a container inside the tile with class of .faces
            2) 2 figure elements, one with class .front and the other with class .back-->
        <li class="tile tile-small tile-7 rotate3d rotate3dX" data-page-type="r-page" data-page-name="panelSpe2">
          <div class="faces">
            <div class="front"><span class="icon-picassa"></span></div>
            <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 6");
		 	$rowElement =  mysqli_fetch_row($result);?>
            <div class="back"><p><?php echo $rowElement[0]; ?></p></div>
          </div>
        </li>
        <li class="tile tile-small last tile-8 rotate3d rotate3dY" data-page-type="r-page" data-page-name="panelSpe">
          <div class="faces">
            <div class="front"><span class="icon-instagram"></span></div>
            <?php $result = mysqli_query($con,"SELECT Title FROM homeblog WHERE `ID` = 7");
		 	$rowElement =  mysqli_fetch_row($result);?>
            <div class="back"><p>Hotels, Office Models</p></div>
          </div>
        </li>
      </div>

      <div class="col3 clearfix">      
        <li class="tile tile-2xbig tile-9 fig-tile" data-page-type="custom-page" data-page-name="#">
          <figure>
            <img src="images/resort5.jpg" style="top: -50px; position: relative;"/>
            <figcaption class="tile-caption caption-bottom">Reach us via email @ Lfi.gmail.com or You can even Visit our office 215 salcedo Makati. 
            </figure>
        </li>
        <li class="tile tile-big tile-10" data-page-type="s-page" data-page-name="#">
          <div><p>LFI Incorporated © 2014 </p></div>
        </li>
      </div>
    </ul>
  </div><!--end dashboard-->

</div>
<!--====================================end demo wrapper================================================-->
<script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/scripts.js"></script>

</body>
</html>
