<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="Images/webImage/lfiLogo.png" sizes="any" type="image/svg+xml"/><title>LFI Construction</title>
<script src="jquery-1.11.1.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="mapJS.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet"/>


<script>

$(document).ready(function(e) {
    	
	
	$("#addressMap").click(function(){
		$("#mapLogo").fadeOut('slow');
		});
});
</script>	

<style>

html{
	background-color:#121623;
}

#overallWrap{
	overflow-x: hidden;
	overflow-y: auto;
	}

#topLink{
	background: rgba(13,14,28,1);
background: -moz-linear-gradient(top, rgba(13,14,28,1) 0%, rgba(13,14,28,1) 1%, rgba(19,19,37,1) 25%, rgba(17,17,34,1) 50%, rgba(13,14,28,1) 71%, rgba(19,24,37,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(13,14,28,1)), color-stop(1%, rgba(13,14,28,1)), color-stop(25%, rgba(19,19,37,1)), color-stop(50%, rgba(17,17,34,1)), color-stop(71%, rgba(13,14,28,1)), color-stop(100%, rgba(19,24,37,1)));
background: -webkit-linear-gradient(top, rgba(13,14,28,1) 0%, rgba(13,14,28,1) 1%, rgba(19,19,37,1) 25%, rgba(17,17,34,1) 50%, rgba(13,14,28,1) 71%, rgba(19,24,37,1) 100%);
background: -o-linear-gradient(top, rgba(13,14,28,1) 0%, rgba(13,14,28,1) 1%, rgba(19,19,37,1) 25%, rgba(17,17,34,1) 50%, rgba(13,14,28,1) 71%, rgba(19,24,37,1) 100%);
background: -ms-linear-gradient(top, rgba(13,14,28,1) 0%, rgba(13,14,28,1) 1%, rgba(19,19,37,1) 25%, rgba(17,17,34,1) 50%, rgba(13,14,28,1) 71%, rgba(19,24,37,1) 100%);
background: linear-gradient(to bottom, rgba(13,14,28,1) 0%, rgba(13,14,28,1) 1%, rgba(19,19,37,1) 25%, rgba(17,17,34,1) 50%, rgba(13,14,28,1) 71%, rgba(19,24,37,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0d0e1c', endColorstr='#131825', GradientType=0 );
	width:100%;
	min-height:50px;
	}
	
.col-md-4 .nav-pills{
	width:70px;
	height:50px;
	margin-left:auto;
	margin-right:auto;
	margin-top:8px;
	
	}	

.col-md-8 .nav-pills{
	min-width:400px;
	margin-left:auto;
	margin-right:auto;
	margin-top:12px;
	}

.col-md-8 ul li {
	width:200px;
	margin-left:auto;
	margin-right:auto;
	}	

.item{
	width:100%;
	height:100%;
	}
	
.col-md-8 ul li a{
	color:#D3D4D5;
	font-weight:900;
	font-family:"Arial Black", Gadget, sans-serif;
	text-transform:capitalize;
	}	

.login{
	color:orange;
	}

.login:hover{
	color:white;
	}


.signup{
	color:blue;
	text-decoration:underline;
	}

.signup:hover{
	color:skyblue;
	}


.logBtn{   
	text-align: center;
	margin-bottom: 5px;
	}

#photoGall a{
	border-radius:5px;
	background:white;
	height:50px;
	width:50px;
	box-shadow: 1px 3px 2px black;
	}	
	
			
#photoGall .adjuster{
		position:relative;
		width:100%; 
		height:500px;	
		}
		
#photoGall .adjuster1{
		width:100px;
		top:50%; 	
		left:20px; 
		height:50px;
		position:absolute;
		margin-left:2%;
		}
		
#photoGall .adjuster2{
		width:100px;
		top:50%; 
		right:20px;
		height:50px;
		position:absolute;
		margin-right:2%;
		}
						
#photoGall .left{
		margin-top:0px;
              	}
				
#photoGall .right{
          	margin-top:0px;
              	}				

#photoGall .carousel-indicators li{
	background:#E7E7E7;
	border-color:#E7E7E7;
	opacity:0.7;
	}	

.rtcleSect{
	background-color:#EDF0F2;
	width:100%;
	margin-left:auto;
	margin-right:auto;
	min-height: 215px;
	}

.rtcle{
	width:60%;
	margin-left:auto;
	margin-right:auto;
	}
	
.col-6{
	padding-left:40px;
	float:left;
	}

.rtcle p{
	max-width:250px;
	max-height:100px;
	color:#646C78;
	}	
	
.modal-dialog {
	margin:0px;
	}

.rtcleWrap{
	min-width:250px;
	}

.rtcle h2{
	position:relative;
	left:-40px;
	}
	
.rtcle span{
	left:-50px;
	top:25px;
	float:left;
	border-radius:3px;
	border:1px solid #BCC2C6;
	background-color:#F2F5F6;
	width:35px;
	height:35px;
	padding:10px;
	}
	
.rtcle p a{
	border:0px;
	color:#B2B8BC;
	font-weight:bolder;
	text-transform:capitalize;
	}	
#blogArea h2{
	text-align: center;
	width:130px;	
	margin-left:auto;
	margin-right:auto;
	}

#blogArea h6{
	text-align: center;
	width:130px;	
	margin-left:auto;
	margin-right:auto;
	}

#blogArea .item{
	margin-right:0px;
	}
          
#blogArea .adjuster1{
		width:100px;
		position:absolute;
		top:40%; 	
		left:5px; 
		height:50px;
		margin-left:2%;
	}	
#blogArea .adjuster2{
	width:100px;
		position:absolute;
		top:40%; 	 
		right:5px;
		height:50px;
		margin-right:2%;
	}		

.adjuster1 a{
				border-radius:5px;
				background:white;
        height:40px;
        width:40px;
				box-shadow: 1px 3px 2px black;
}

.adjuster2 a{
				border-radius:5px;
				background:white;
				height:40px;
				width:40px;
				box-shadow: 1px 3px 2px black;
}

#blogArea .row .thumbnail{
			margin-left:auto;
			margin-right:auto;
			width:280px;
			max-height:350px;
			border:0px;
		}
    
 #blogArea .row .thumbnail img{
 			width:280px;
     height:150px;
 					
 } 
  
 #blogArea .row .thumbnail p{
	 height:60px;
 }
 
#blogArea{
	width:95%;
	margin-left:auto;
	margin-right:auto;
	min-height:440px;
}

#blogGall{
	border-bottom:3px solid #EDF0F2;
	margin:0px 0px 5px 0px;
	}
 
.classic{
	cursor:pointer;
	} 
	
.noCursor{
	cursor:none;
	}	

.carousel-caption{
	width:30%;
	min-width:212px;
	max-width:600px;
	height:400px;
	top:8%;
	left:8%;
	z-index:0;
	}	
	
.crslTitle{
	min-width:212px;
	color:#FA9608;
	text-shadow:1px 2px 3px gray;
	font-size:50px;
	overflow: hidden;
  text-overflow:ellipsis;
	display: inline-block;	
	}	


.crslDesc{
	max-width:212px;
	color:black;
	text-shadow:1px 1px 1px white;
	font-size:18px;
	overflow: hidden;
    text-overflow:ellipsis;
	display:inline-block;	
	}	
	
#quoteArea{
	width:100%;
	margin:5px 0px 100px 0px;
	}

#quoteArea h1{
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	text-align:center;
	}
	
#quoteArea h3{
    font-family: "Trebuchet MS", Helvetica, sans-serif;
	text-align: center;
	font-weight: 100;
	font-size: 20px;
	color: #848484;
	}

#quoteArea h2{
	font-family: "Trebuchet MS",Helvetica,sans-serif;
	text-align: center;
	font-weight: bold;
	}
	
.quoteContainer{
	width:90%;
	margin-left:auto;
	margin-right:auto;
	}
	
#mapArea{
	width:100%;
	min-height:400px;
	position:relative; 
	}	
	
#mapLogo{
	width:100%; 
	height:400px; 
	background-image:url(Images/blogImages/cmaa6.jpg); 
	background-position:center; 
	background-repeat:no-repeat; 
	background-size:cover;
	padding: 2% 10% 0px 60%;
	overflow:hidden;
	position:absolute;
	z-index: 3;
	top: 0px;
	}
	
#mainMap{
	width:100%;
	margin-left:auto;
	margin-right:auto;
	position:relative;
	z-index:1;
	}	
	
#googleMap{
	width:100%;
	height:400px;
	}
		
#mapArea #mapLogo #addressMap{
	/*min-width:180px;
	max-width:300px;
	min-height:50px;
	position: relative;
	left: 70%;
	margin: 0px;
	top: 50px;*/
	opacity: 0.8;
	background-color: #FF4533;
	width: 25%;
	min-width: 212px;
	max-width: 320px;
	min-height: 80px;
	z-index: 0;
	position: relative;
	max-height: 350px;
	text-overflow: ellipsis;
	padding:15px;
	color:#FFF;
	cursor:pointer;
	}
	
#mapArea #mapLogo #addressMap:hover{
	opacity:1;
	box-shadow:3px 3px 3px #666666;
	}
		
#addressMap .mapTitle{
	font-family:"Arial Black", Gadget, sans-serif;
	font-weight:bold;
	font-size: 21px;
	text-align: left;
	text-overflow:ellipsis;
	font-weight:bold;
	margin-bottom:10px;
	}
	
#addressMap .mapContent{
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-weight:bold;
	font-size: 15px;
	text-align: left;
	text-overflow:ellipsis;
	font-weight:normal;
	}

#footer{
	width:100%;
	min-height:150px;
	background: rgba(13,14,28,1);
	background: -moz-linear-gradient(top, rgba(13,14,28,1) 0%, rgba(13,14,28,1) 1%, rgba(19,19,37,1) 25%, rgba(17,17,34,1) 50%, rgba(13,14,28,1) 71%, rgba(19,24,37,1) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(13,14,28,1)), color-stop(1%, rgba(13,14,28,1)), color-stop(25%, rgba(19,19,37,1)), color-stop(50%, rgba(17,17,34,1)), color-stop(71%, rgba(13,14,28,1)), color-stop(100%, rgba(19,24,37,1)));
	background: -webkit-linear-gradient(top, rgba(13,14,28,1) 0%, rgba(13,14,28,1) 1%, rgba(19,19,37,1) 25%, rgba(17,17,34,1) 50%, rgba(13,14,28,1) 71%, rgba(19,24,37,1) 100%);
	background: -o-linear-gradient(top, rgba(13,14,28,1) 0%, rgba(13,14,28,1) 1%, rgba(19,19,37,1) 25%, rgba(17,17,34,1) 50%, rgba(13,14,28,1) 71%, rgba(19,24,37,1) 100%);
	background: -ms-linear-gradient(top, rgba(13,14,28,1) 0%, rgba(13,14,28,1) 1%, rgba(19,19,37,1) 25%, rgba(17,17,34,1) 50%, rgba(13,14,28,1) 71%, rgba(19,24,37,1) 100%);
	background: linear-gradient(to bottom, rgba(13,14,28,1) 0%, rgba(13,14,28,1) 1%, rgba(19,19,37,1) 25%, rgba(17,17,34,1) 50%, rgba(13,14,28,1) 71%, rgba(19,24,37,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0d0e1c', endColorstr='#131825', GradientType=0 );	
	padding-top:20px;
	}
	
#footer .logoFoot{
	width:50px;
	height:25px;
	margin-left:auto;
	margin-right:auto;
	background-image:url(Images/webImage/lfiLogo.png);
	background-repeat:no-repeat;
	background-size:contain;
	background-position:center;
	cursor:pointer;
	}
	
#footer .logoFoot:hover{			
	text-decoration: none;
	background-color: #EEE;
	border-radius: 4px;
	}


#footer .footContainer{
	width:100%;
	margin-left:auto;
	margin-right:auto;
	padding:0px 15%;
	}

#footer .footContainer .footwrap{
	max-width:200px;
	margin-top:10px;
	margin-right:60px;
	margin-bottom:10px;
	display: inline-table;
	}
		
#footer .footContainer .footwrap .footTitle{
	text-transform: uppercase;
	color:#FA9608;
	font-family: "Arial Black",Gadget,sans-serif;
	font-weight: bolder;
	font-size: 11px;;
	}
	
#footer .footContainer .footwrap .footContent{
	margin-top:5px;
	}
		
#footer .footContainer .footwrap .footContent div{
	color:#C7C7C7;
	cursor:pointer;
	margin-bottom:10px;
	font-size:12px;
	}
	
#footer .footContainer .footwrap .footContent div:hover{
	text-decoration:underline;
	}	

#socialMedia{
	width:150px;
	margin-top:10px;
	margin-left:70px;
	margin-right:0px;
	margin-bottom:10px;
	display: inline-table;
	}
	
.socialButtons{
	width:140px;
	height:35px;
	background-color:#999;
	margin-bottom: 20px;
	border-radius:5px;
	cursor:pointer;
	}
		
.socialButtons:hover{
	background-color:gray;
	box-shadow:2px 2px 2px #FFF;
	}

.gmailglyp{
	width: 50px;
	height:35px;
	float:left;
	background: url('Images/webImage/email.png')no-repeat scroll 0px 0px transparent;
	background-position: center;
	}
	
.fbglyp{
	width: 50px;
	height:35px;
	float:left;
	background: url('Images/webImage/facebook.png')no-repeat scroll 0px 0px transparent;
	background-position: center;
	}

.title{
	padding-top: 7px;
	font-size:12px;
	text-align:center;
	width:115px;
	color:white;
	}
	
.footA{
	min-width:300px;
	max-width:70%;
	margin-left:auto;
	margin-right:auto;
	display:inline-table;
}
	
.footB{
	min-width:300px;
	max-width:30%;
	margin-left:auto;
	margin-right:auto;
	display:inline-table;
} 		


	
.logContainer{
	margin-top:10%;
	width:100%;
	background:white;
	position:absolute;
	}
	
.logWrapper{
	width:20%;
	min-width:274px;
	min-height:272px;
	padding:2px;
	margin-left:auto;
	margin-right:auto;
	background:gray;
	}

/**************************Login Fade Panel Configuration*********************************************/	
#invaLog{
	color:red;
	width:100px;
	position:relative;
	left:50%;
	}	
	
.checkbox {		
	text-align: center;
	}
	
.checkbox input[type="checkbox"]{
	margin-left: -20px;
	}


@media (max-width:600px){
	
	.crslTitle{
		min-width:212px;
		color:#FA9608;
		text-shadow:1px 2px 3px gray;
		font-size:28px;
		overflow: hidden;
	  text-overflow:ellipsis;
		display: inline-block;	
		}	
	
	.crslDesc{
		max-width:212px;
		color:black;
		text-shadow:1px 1px 1px white;
		font-size:16px;
		overflow: hidden;
	   text-overflow:ellipsis;
		display:inline-block;	
		}	
}
    </style>


</head>

<body>
        <div id="ovrallWrap">
                    <div id="topLink">
                         <?php include "nav.php";?>
                    </div><!--/#topLink-->
                    
                    <div class="rtcleSect row" >              
					
                    <div>
                    lala
                 <?php    require_once('Connections/local.php');
				 
				 $result = mysqli_query($con,"SELECT `usersID` FROM `users` WHERE `UserName` = 'Hwoarang'");
	
			     $row=mysqli_fetch_assoc($result);
						
						echo $row['usersID'];
	                 ?>
                     </div>
                    </div><!--/.rtcleSect row-->
                     
                
                    <div id="footer">
                    		<?php include "footer.php";?> 
                    </div><!--/#footer-->
                               
                    <div id="rticle1"  class="modal fade">
                         <?php include "fadeArticles.php";?>         
                    </div><!-- /#rticle .modal -->
                                    
                    <div id="loginPanel"  class="modal fade">
                         <?php include "admin.php";?>         
                   </div><!-- /#loginPanel .modal -->
                   
                   <div id="signupPanel"  class="modal fade">
                         <?php include "signUp.php";?>         
                   </div><!-- /#loginPanel .modal -->
                                     
                        
        </div><!--/#ovrallWrap-->
</body>
</html>
