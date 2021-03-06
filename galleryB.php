<?php include('Connections/local.php'); ?>
<script src="js/clearbox.js" type="text/javascript"></script>
<style type="text/css">
/* BeginOAWidget_Instance_2648024: #OAWidget */
.container {
      width: 100%px;
      height: 100px;
      margin-right:auto;
      margin-left:auto;      
      margin-bottom:5px;
      font-size:11px;
	  margin-top:40px;
      }
      
      
      .item a img {
		
	  width:250px;
      height:200px;	  
      float:left;
      padding:3px;
      background-color: #FFF;
      margin: 5px;
      border:1px solid #cccccc;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      -khtml-border-radius: 3px;
      border-radius: 3px;
      -moz-box-shadow:0 0 5px rgba(0,0,0,0.45),0px 1px 2px rgba(0,0,0,0.2);
	 -webkit-box-shadow:0 0 5px rgba(0,0,0,0.45),0px 1px 2px rgba(0,0,0,0.2);
	  box-shadow:0 0 5px rgba(0,0,0,0.45),0px 1px 2px rgba(0,0,0,0.2);      
      filter:alpha(opacity=100);
      -moz-opacity: 1;
      -khtml-opacity: 1;
      opacity: 1;
      }
      
      .item a:hover img, .item a:active img {
      padding:3px;
      border:1px solid #cccccc;
      filter:alpha(opacity=80);
      -moz-opacity:0.80;
      -khtml-opacity: 0.80;
      opacity: 0.80;
      }
      
      .clearfix:after{
      clear:both;
      }
      #inline{
      visibility: hidden;
      color:#444;
      }
	  
	 .go {
  background-color: #0D0E1C;
  height: 35px;
  line-height: 35px;
  padding: 0 30px;
  color: white;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 2
} 

	.go a {
	  text-decoration:none;
	  font-size:14px;
	  color: #D3D4D5;
	 font-size: 13px;
	 font-family:"Lato", sans-serif;
	 font-weight: 800;
	  padding:5px 6px;
	  letter-spacing: -1.1px;
	}
	
	.go a:hover{
	  background-color:#EEE;
	  border-radius:4px;
	}
	
	

	  
/* EndOAWidget_Instance_2648024 */
</style>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2648024" binding="#OAWidget" />
</oa:widgets>
-->
</script>

<script type="text/javascript">
// BeginOAWidget_Instance_2648024: #OAWidget
/*
      // 	ClearBox Config File (JavaScript)
      */
      
      var
      
      // CB layout:
      
      CB_MinWidth=300,				// minimum (only at images) or initial width of CB window
      CB_MinHeight=300,				// initial heigth of CB window
      CB_WinPadd=15,					// padding of the CB window from sides of the browser 
      CB_ImgBorder=3,					// border size around the picture in CB window
      CB_ImgBorderColor='#FFF',			// border color around the picture in CB window
      CB_Padd=4,					// padding around inside the CB window
      
      CB_BodyMarginLeft=0,				//
      CB_BodyMarginRight=0,				// if you set margin to <body>,
      CB_BodyMarginTop=0,				// please change these settings!
      CB_BodyMarginBottom=0,				//
      
      CB_ShowThumbnails='auto',			// it tells CB how to show the thumbnails ('auto', 'always' or 'off') thumbnails are only in picture-mode!
      CB_ThumbsBGColor='#000',			// color of the thumbnail layer
      CB_ThumbsBGOpacity=.35,				// opacity of the thumbnail layer
      CB_ActThumbOpacity=.65,				// thumbnail opacity of the current viewed image
      
      CB_SlideShowBarColor='#FFF',			// color of the slideshow bar
      CB_SlideShowBarOpacity=.60,			// opacity of the slideshow bar
      CB_SlideShowBarPadd=17,				// padding of the slideshow bar (left and right)
      CB_SlideShowBarTop=2,				// position of the slideshow bar from the top of the picture
      
      CB_SimpleDesign='off',				// if it's 'on', CB doesn't show the frame but only the content - really nice ;)
      
      CB_CloseBtnTop=-10,				// vertical position of the close button in picture mode
      CB_CloseBtnRight=-14,				// horizontal position of the close button in picture mode
      CB_CloseBtn2Top=-20,				// vertical position of the close button in content mode
      CB_CloseBtn2Right=-30,				// horizontal position of the close button in content mode
      
      CB_OSD='off',					// turns on OSD
      CB_OSDShowReady='off',				// when clearbox is loaded and ready, it shows an OSD message
      
      // CB font, text and navigation (at the bottom of CB window) settings:
      
      CB_FontT='Verdana',				//
      CB_FontSizeT=13,				// these variables are referring to the title or caption line
      CB_FontColorT='#777',				// 
      CB_FontWeightT='normal',			//
      
      CB_FontC='arial',				//
      CB_FontSizeC=11,				// these variables are referring to
      CB_FontColorC='#999',				// comment lines under the title
      CB_FontWeightC='normal',			//
      CB_TextAlignC='justify',			//
      CB_txtHCMax=120,				// maximum height of the comment box in pixels
      
      CB_FontG='arial',				//
      CB_FontSizeG=11,				// these variables are referring to the gallery name
      CB_FontColorG='normal',				//
      CB_FontWeightG='@@CB_FontWeightG@@',			//
      
      CB_PadT=10,					// space in pixels between the content and the title or caption line
      
      CB_OuterNavigation='off',			// turns outer navigation panel on
      
      CB_ShowURL='off',				// it shows the url of the content if no title or caption is given
      CB_ItemNum='on',				// it shows the ordinal number of the content in galleries
      CB_ItemNumBracket='()',				// whatever you want ;)
      
      CB_ShowGalName='',				// it shows gallery name
      CB_TextNav='on',				// it shows previous and next navigation
      CB_NavTextImgPrvNxt='on',			// it shows previous and next buttons instead of text
      CB_ShowDL='on',					// it shows download controls
      CB_NavTextImgDL='on',				// it shows download buttons instead of text
      
      CB_ImgRotation='on',				// it shows the image rotation controls
      CB_NavTextImgRot='on',				// it shows the image rotation buttons instead of text
      
      // Settings of the document-hiding layer:
      
      CB_HideColor='#000',				// color of the layer
      CB_HideOpacity=.8,				// opacity (0 is invisible, 1 is 100% color) of the layer
      CB_HideOpacitySpeed=400,			// speed of fading
      CB_CloseOnH='on',				// CB will close, if you click on background
      
      // CB animation settings:
      CB_Animation='double',				// 'double', 'normal', 'off', 'grow', 'growinout' or 'warp' (high cpu usage)
      CB_ImgOpacitySpeed=300,				// speed of content fading (in ms)
      CB_TextOpacitySpeed=300,			// speed of text fading under the picture (in ms)
      CB_AnimSpeed=300,				// speed of the resizing animation of CB window (in ms)
      CB_ImgTextFade='on',				// turns on or off the fading of content and text
      CB_FlashHide='on',				// it hides flash animations on the page before CB starts
      CB_SelectsHide='on',				// it hides select boxes on the page before CB starts
      CB_SlShowTime=3000,				// default speed of the slideshow (in sec)
      CB_Preload='on',				// preload neighbour pictures in galleries
      CB_ShowLoading='on'				// 
      
      
      
      ;
// EndOAWidget_Instance_2648024
</script>
<div class="go"><a href="index.php">Back to Home Page</a> <a href="gallery/mainGallery.php">Back to Gallery</a></div>
<div class="container clearfix">
	
<?php $result = mysqli_query($con,"SELECT * FROM galleryarchive WHERE GalleryNumber ='2'");
				  		$x = 0;
						while($row=mysqli_fetch_array($result)){
						?>
<div class="item"><a rel="clearbox[gallery=Gallery,,comment=<?php echo $row['Description'];?>]" href="../<?php echo $row['PathFile'];?>" title="<?php echo $row['Title'];?>"><img class="border"src="../<?php echo $row['PathFile'];?>" alt="<?php echo $row['Title'];?>" /></a></div>       
                         <?php $x++; }?>
  
 
 
 </div>
  
 
 

  

