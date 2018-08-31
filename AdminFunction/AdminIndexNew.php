<?php
/*	
error_reporting(0);
 require_once("../Connections/local.php");
 if(!isset($_SESSION)){session_start();}
 if(isset($_SESSION['usersID'])){
 $userID = $_SESSION['usersID'];
 $usersID = $_SESSION['usersID'];
 }else {
	 echo "UnAuthroized Loggin";
  header('Location: NiceTry.html');
 }
 
// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}*/
 ?>

<!doctype html>
<head>
<meta charset="utf-8">
<link rel="icon" href="../Images/webImage/lfiLogo.png" sizes="any" type="image/svg+xml"/><title>LFI Construction</title>
<script src="../jquery-1.11.1.js"></script>
<script src="../bootstrap/bootstrap.js"></script>
<link href="../bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet"/>


<style>


html, body {
	width:100%;
	margin:0px;
	overflow-x:hidden;
	overflow-y:hidden;
	}
	
#projectAdmin .modal-dialog{
min-width:700px;
		
}

h3{
	text-transform:capitalize;
	}


.innerList{
	font-size:12px;
	margin-left:5px;
}

.innerList li a{
	cursor:pointer;
	text-decoration:none; 
	}

.innerList li a:hover{
	color:#FFA500;
	}

.leftMid{	
	width:230px;
	height:600px;
	overflow:auto;
	border-right:1px solid #CCC;
	/*background-color:blue*/;
	position:relative;
	display:inline-block;
	}	
	
.rightMid{
	width:60%;
	height:500px;	
	position:absolute;	
	overflow:auto;
	top:0%;
	left:0px;
	margin-left:250px;
	margin-top:50px;	
	
	}	


.rightMid > .menuClass{
	width:100%;
	
	}

#mainMid{
	min-width:1360px;
	height:100%;
	
}

.headerLogo{
	margin-top:5px;
	margin-left:5px;
	width:60px;
	height:40px;	
}

#projectAdmin .modal-content{
	min-width:500px;
	
}



	.notifbox{
	 width:20px;
	 height:20px;
	 position:absolute;
	 border-radius:10px;
	 z-index:50;
	 background-color:orange;
	 text-align:center;
	 }


#adminNav{
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
	position:relative;	
}
.headWrapper{
	min-width: 400px;
	
}

.glyphiconWrapper{
	width:30px;
	height:30px;
	padding:10px;
}

.btn, .glyphiconWrapper span{
	padding:8px;
	border-radius:3px;
	cursor:pointer;
	margin: 10px;
}
	
.glyphiconWrapper span:hover{
	color:orange;
	border-color:orange;
}
	
.list-group{
	max-width:200px;
}

.dropdown-menu a.list-group-item:hover{
	background-color:#006;
	color:orange;
}

.dropdown-menu a.list-group-item:active{
	background-color:#999;
	color:white;
}

.dropdown-menu{
	top: 7%;
	left:2%;
    border: 3px solid rgba(0, 0, 0, 0.15);
}

.greetings{
	color:orange;	
	display: inline-block;
	font-weight: 900;
	font-family: "Arial Black",Gadget,sans-serif;
	text-transform: capitalize;
	cursor:default;
}

.greetings span{
	color:white;	
	text-decoration:underline;
	display: inline-block;
	font-weight: 900;
	font-family: "Arial Black",Gadget,sans-serif;
	text-transform: capitalize;
	cursor:default;
}

.modal-dialog{
	margin-left:auto;
	margin-right:auto;
	}

.sideQuote{
	color:orange;	
	position: relative;
	float:right;
	top:18px;
	margin-right: 5px;
	text-align: right;
	cursor:default;
}

.modal-content{
	border:none;	
}

.projectContainer{
	max-width:290px;
	height:auto;
	margin-left:auto;
	margin-right: auto;
	text-align: center;
}

.projectArchive{
	min-width:300px;
	margin-left:auto;
	margin-right: auto;
	text-align:none;
	}
	
.projectArchive:hover{
	overflow:visible;
}

.tableContainer{
	max-width:580px;
 	margin-left:auto;
 	margin-right:auto;
	}

.mtableContainer{
	max-width:580px;
 	margin-left:auto;
 	margin-right:auto;
	}

.tableWrapper{
	max-width:580px;
	}

.mtableWrapper{
	max-width:580px;
	}

.thead{
	width:550px;
	background-color:Gray;
	color:white;
	font-weight: bold;
	}        

.mthead{
	width:550px;
	background-color:Gray;
	color:white;
	font-weight: bold;
	}  

.thead div{
	width:auto;
	margin:5%;	
	display:inline;
	}

.mthead div{
	width:auto;
	margin:3%;	
	display:inline;
	}

.tbody{
	background-color:transparent;
	}

.mtbody{
	background-color:transparent;
	}
	
.multipleBody{
	background-color:transparent;
	width:550px;
	margin:0px;	
	}

.mmultipleBody{
	background-color:transparent;
	width:550px;
	margin:0px;	
	}

.multipleBody:nth-child(even){	
	background-color:#C4C4C4;	
	}

.mmultipleBody:nth-child(even){	
	background-color:#C4C4C4;	
	}

.multipleBody .divA{
	width:130px;
	display:inline-table;
	position:relative;
	left:0px;
	text-align:center;
	}		
	
.multipleBody .divAWrap1{
	z-index:20;
	width:140px;
	height:20px;
	position:absolute;
	overflow:hidden;
	cursor:pointer;
}

.multipleBody .divAWrap1:hover{
	width:auto;
	height:40px;
	overflow:visible;
	background:#FFB13D;
	position:absolute;
	z-index:100;
}


.multipleBody .divAWrap2{
	position:relative;
	margin-left:140px;
}

.mmultipleBody .mdivA{
	width:130px;
	display:inline-block;
	position:relative;
	left:1;
	text-align:center;
	}	

.multipleBody .divB{
	width:70px;
	display:inline;
	position:relative;
	left:45px;
	text-align:center;
	}	

.mmultipleBody .mdivB{
	min-width:80px;
	display:inline-block;
	position:relative;
	left:2%;
	text-align:center;
	}	

.multipleBody .divC{
	width:130px;
	display:inline;
	position:relative;
	left:110px;		
	text-align:center;
	}	

.mmultipleBody .mdivC{
	min-width:80px;
	display:inline-block;
	position:relative;
	left:9%;
	text-align:center;
	}	

.multipleBody .divD{
	max-width:120px;
	position:relative;
	display:inline-block;
	left:200px;
	text-align:center;
	}	
		
.mmultipleBody .mdivD{
	min-width:80px;
	display:inline-block;
	position:relative;
	left:7%;
	text-align:center;
	}	

.mmultipleBody .mdivE{
	min-width:80px;
	display:inline-block;
	position:relative;
	left:7%;
	text-align:center;
	}	



#homeGall .caption h3{
	height:29px;	
}

#galleryArchive button{
	
	display:block !important;	
}


#galleryArchive .btnEdt{
 width:100px;
 height:35px;;
}

#galleryArchive .btnEdt .btn-default{
	width:100px;
	height:35px;
}

#galleryArchive{
	width:100%;
	margin-left:auto;
	margin-right:auto;
	min-height:250px;
	background-color:none;
	
}

#galleryArchive h2{
	text-align: center;
	color:black;
	width: 300px;	
	margin-left:auto;
	margin-right:auto;
	}

#galleryArchive h2 span{
	position:relative;
	top:5px;
	cursor:pointer;
	}
	
#galleryArchive h6{
	text-align: center;
	width:130px;	
	margin-left:auto;
	margin-right:auto;
	}

#galleryArchive .item{
	margin-right:0px;
	}
          
#galleryArchive .adjuster1{
		width:100px;
		position:absolute;
		top:40%; 	
		left:5px; 
		height:50px;
		margin-left:2%;
	}	
#galleryArchive .adjuster2{
	width:100px;
		position:absolute;
		top:40%; 	 
		right:5px;
		height:50px;
		margin-right:2%;
	}		


#galleryArchive .row .thumbnail{
			margin-left:auto;
			margin-right:auto;
			width:230px;
			height:200px;
			max-height:350px;
			border:0px;
		}
    
#galleryArchive .row .thumbnail img{
	 float:left;
 	 width:100px;
   height:80px; 					
 } 
  
#galleryArchive .row .thumbnail h3{
	text-decoration:underline;
	font-size:12px;
	overflow:hidden;
	 width:150px;
	 height:50px;
 }



#galleryArchive .row .thumbnail p{
	 height:20px;
 }
 
#gallArc{
border-bottom:3px solid #EDF0F2;
	margin:0px 0px 5px 0px;
	} 
 
#infoArea{
	width:100%;
	margin-left:auto;
	margin-right:auto;
	min-height:150px;
	background-color:gray;
}

.infoWrapper{
	max-width: 85%;
	min-height: 248px;
	text-overflow: ellipsis;
	margin-left: auto;
	margin-right: auto;
}

.infoContainerA{
	margin-left:50px;
	min-width:150px;
	min-height:138px;
	text-overflow:ellipsis;
	display:inline;	
	left:40px;
	position:relative;
}

.infoContainerA h2{
color:#FFA500;
	text-decoration:underline;
	cursor:default;
}
.infoContainerA h4{
color:#FFA505;
cursor:default;
}

.infoContainerB{
	margin-left:50px;
	min-width:150px;
	min-height:138px;
	text-overflow:ellipsis;
	display:inline;	
	left:40px;
	position:relative
	
}

.infoContainerB h2{
color:#FFA500;
	text-decoration:underline;
	cursor:default;
}
.infoContainerB h4{
color:#FFA505;
cursor:default;
}

.infoSeparator{
	height:90px;
	max-width:190px;
	display:inline-table;
	margin-left:20px;
	margin-top:10px;	
}


.inseparator{
	display:inline-block;
}

#articleArea{
	width:95%;
	margin-left:auto;
	margin-right:auto;
	min-height:250px;
	background-color:none;
	
}

#articleArea h2{
	text-align: center;
	color:black;
	width: 300px;	
	margin-left:auto;
	margin-right:auto;
	}

#articleArea h2 span{
	position:relative;
	top:5px;
	cursor:pointer;
	}
	
#articleArea h6{
	text-align: center;
	width:130px;	
	margin-left:auto;
	margin-right:auto;
	}

#articleArea .item{
	margin-right:0px;
	}
          
#articleArea .adjuster1{
		width:100px;
		position:absolute;
		top:40%; 	
		left:5px; 
		height:50px;
		margin-left:2%;
	}	
#articleArea .adjuster2{
	width:100px;
		position:absolute;
		top:40%; 	 
		right:5px;
		height:50px;
		margin-right:2%;
	}		


#articleArea .row .thumbnail{
			margin-left:auto;
			margin-right:auto;
			width:280px;
			max-height:350px;
			border:0px;
		}
    
#articleArea .row .thumbnail img{
 	 width:280px;
     height:150px;
 					
 } 
  
#articleArea .row .thumbnail p{
	 height:60px;
 }
 
#homertcle{
	border-bottom:3px solid #EDF0F2;
	margin:0px 0px 5px 0px;
	}
 
 
/**********************************************************************************************/


#homeGallArea{
	width:95%;
	margin-left:auto;
	margin-right:auto;
	min-height:450px;
}

#homeGallArea h2{
	text-align: center;
	color:black;
	width: 300px;	
	margin-left:auto;
	margin-right:auto;
	}

#homeGallArea h2 span{
	position:relative;
	top:5px;
	cursor:pointer;
	}
	
#homeGallArea h6{
	text-align: center;
	width:130px;	
	margin-left:auto;
	margin-right:auto;
	}

#homeGallArea .item{
	margin-right:0px;
	}
          
#homeGallArea .adjuster1{
		width:100px;
		position:absolute;
		top:40%; 	
		left:5px; 
		height:50px;
		margin-left:2%;
	}	
#homeGallArea .adjuster2{
	width:100px;
		position:absolute;
		top:40%; 	 
		right:5px;
		height:50px;
		margin-right:2%;
	}		


#homeGallArea .row .thumbnail{
			margin-left:auto;
			margin-right:auto;
			width:280px;
			max-height:350px;
			border:0px;
		}
    
 #homeGallArea .row .thumbnail img{
 	 width:280px;
     height:150px;
 					
 } 
  
 #homeGallArea .row .thumbnail p{
	 height:60px;
 }
 
#homeGall{
	border-bottom:3px solid #EDF0F2;
	margin:0px 0px 5px 0px;
	}
 

 
/**********************************************************************************************/

.fade{
	overflow:auto;
	}


.modal-dialog{
	min-width:370px;
	}
	
#blogArea h2{
	color:#000;
	text-align: center;
	width:230px;	
	margin-left:auto;
	margin-right:auto;
	}


#blogArea .caption .h3control{
	width:250px;
	height:60px;
    white-space: nowrap; 
	}

#blogArea .caption h3{
	font-size:19px;
	width:250px;
	height:60px;
	
	}

#blogArea h2 span{
	position:relative;
	top:5px;
	cursor:pointer;
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
	min-height:450px;
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

.tableCover{
	overflow:auto;
	}	

 .fileMove{
    margin-left:50px;
    
    }	
	
		
@media(max-width:400px){
	.innerList{
	width:150px;
	font-size:10px;
	margin-left:0px;
	position:absolute;
	background:#0E0F1E;
	z-index: 45;
	padding:10px;
	}
	
	 .fileMove{
    margin-left:0px;
    
    }
	
	.innerList >li > a{
	width:100px;
	color:white; 
	}
	
	
	.titleHolder{
		display:none;		
	}
	
	.leftMid{
		width:70px;
	height:607px;
	overflow:visible;
	border-right:1px solid #CCC;
	/*background-color:blue*/;
		
	}

	.rightMidContainer{
		width:260px;
		height:500px;
		overflow-x:auto;
		overflow-y:auto;
	}
	
	.rightMid{
	width:75%;
	height:565px;	
	position:absolute;	
	overflow-y:auto;
	overflow-x:auto;
	top:0%;
	left:0px;
	margin-left:70px;
	margin-top:50px;
		
		
	}
	
	.leftMid > ul > li img{
		width:30px !important;
		height:30px !important;	
		
	}
	
	.sideQuote{
		display:block;
		position:absolute;
		left:70px;
		top:30px;
		font-size:10px;
		min-width:115px;
		
	}
	
	.projectContainer{
	width:300px;
	margin-left:auto;
	margin-right: auto;
	text-align: left;
	
	}
	
	
	#editMSG{
	width:100px;
	margin-right:10px;		
	}
	
	.textEmp{
		width:130px;
		}
		
}
 

@media(min-width:1000px){
	
	.rightMid{
	width:80%;
	height:600px;	
	position:absolute;	
	overflow:auto;
	top:0%;
	left:0px;
	margin-left:250px;
	margin-top:50px;	
	
	}	

	
	
}


 
</style>
<script>



  $(document).ready(function(e) {
	  
	 $("#projectList").hide();
	 $("#inventoryList").hide();
	 $("#customizeList").hide();
	 $("#useracctList").hide();
	 
	 $(".mainMenu2").hide();
	 $(".mainMenu3").hide();
	 $(".mainMenu4").hide();
	 $(".mainMenu5").hide();
	 $(".mainMenu6").hide();
	// $(".mainMenu7").hide();
	 $(".mainMenu8").hide();
	 $(".mainMenu9").hide();
	 $(".mainMenu10").hide();
	 $(".mainMenu11").hide();
	 $(".mainMenu12").hide();
	 $(".mainMenu13").hide();
	 $(".mainMenu14").hide();
	 $(".mainMenu15").hide();
	 
	 $(".selectionClass1").click(function(){
		 $(".mainMenu1").show();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		// $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 });
	 
	 $(".selectionClass2").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").show();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		// $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 });
		 
	 $(".selectionClass3").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").show();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		// $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 });
		 
	 $(".selectionClass4").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").show();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		 //$(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 });
		
	 $(".selectionClass5").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").show();
		 $(".mainMenu6").hide();
		 //$(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 });
		
	 $(".selectionClass6").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").show();
		/// $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 });
		
	/* $(".selectionClass7").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		 $(".mainMenu7").show();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 });*/
		
	 $(".selectionClass8").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		// $(".mainMenu7").hide();
		 $(".mainMenu8").show();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 });
		
	 $(".selectionClass9").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		// $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").show();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 });
		
	 $(".selectionClass10").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		// $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").show();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 });
		
	 $(".selectionClass11").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		// $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").show();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 });
		
	 $(".selectionClass12").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		 $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").show();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 
		 });
		 
	 $(".selectionClass13").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		 $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").show();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").hide();
		 
		 });
		
		$(".selectionClass14").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		 $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").show();
		 $(".mainMenu15").hide();		 
		 });
		 
		 $(".selectionClass15").click(function(){
		 $(".mainMenu1").hide();
		 $(".mainMenu2").hide();
		 $(".mainMenu3").hide();
		 $(".mainMenu4").hide();
		 $(".mainMenu5").hide();
		 $(".mainMenu6").hide();
		 $(".mainMenu7").hide();
		 $(".mainMenu8").hide();
		 $(".mainMenu9").hide();
		 $(".mainMenu10").hide();
		 $(".mainMenu11").hide();
		 $(".mainMenu12").hide();
		 $(".mainMenu13").hide();
		 $(".mainMenu14").hide();
		 $(".mainMenu15").show();		 
		 });
	 
	 $(".trialoB").hide();

$(".trialoA").hover(function(){
	
	$(this).children(".trialoB").toggle('fast')
	
	});
	 
	  
	  $(".projects").hover(function(){
		  $("#projectList").toggle('fast');		  
		  });
		  
	  $(".inventory").hover(function(){
		  $("#inventoryList").toggle('fast');		  
		  });  
	   
	  $(".customize").hover(function(){
		  $("#customizeList").toggle('fast');		  
		  });  

	  $(".usersAcct").hover(function(){
		  $("#useracctList").toggle('fast');		  
		  });	   	  
		  
		  
	  
	  
	  
	  $(".customizeMaterials").click(function(){
    $('#myTab a[href="#materialsTab"]').tab('show')
	 });
	 
	 	  $(".projectCategory").click(function(){
    $('#myTab a[href="#projectcatTab"]').tab('show')
	 });
	 
	 	  $(".projectBalance").click(function(){
    $('#myTab a[href="#projectbalTab"]').tab('show')
	 });
	 
	 	  $(".projectGallery").click(function(){
    $('#myTab a[href="#projectgalTab"]').tab('show')
	 });
	 
	 
	$('#dropID').click(function(){
		
		$('#userPros').hide();
	 
	});
	
	
	
	

$("form#personInfoEditor").submit(function(){
	
    var formData = new FormData($(this)[0]);
	 	
	 
    $.ajax({
        url: 'phpscripts/Parse_EditAcctInfo.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data);
			reload(this);
			
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});




	
});


</script>

</head>

<body>


<?php $userID = $userID;
	$result = mysqli_query($con,"SELECT * FROM `users` WHERE `usersID` = $userID"); 
			$row = mysqli_fetch_array($result);
			
			$Role = $row['Role'];
			$loginName = $row['FirstName']; ?>
            
	   <div id="adminNav">
		<div class="headWrapper"> 
          <img class="headerLogo" src="../Images/webImage/lfiLogo.png" />
          <div class="greetings">Welcome <span><?php echo $loginName; ?></span></div>
        
          <div class="sideQuote">LFI Incorporated © 2014</div>
        </div>
       </div><!--/#adminNav-->
       
       <div id="mainMid"> 
        <div class="leftMid">
        	<ul class="nav nav-sidebar">
          
           <!-- <li><a class="aboutUs" href="#"><img class="sidebarLogos" src="images/blue-pencil-psd-icon.jpg" style="width:50px; height:50px;"/>About Us <span class="badge">42</span> </a> </li> -->
            
          <?php  if($Role == 1){ ?> 
          
          
            <!--Admin Selection Class-->
            <li><a class="selectionClass1" href="#"><img class="sidebarLogos" src="../Images/myFolder/homerRES.png" style="width:50px; height:50px;"/><span class="titleHolder"> Home </span></a> </li>
        
         <?php  $resultProjA = mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 0 AND `users`.Activated = 0 AND `project`.View = 0");
		  
		  $rowProjA = mysqli_num_rows($resultProjA);
		  
		  $resultProjB = mysqli_query($con,"SELECT * FROM `project` JOIN `users` ON `project`.userID = `users`.usersID WHERE `project`.Activated = 0 AND `users`.Activated = 1 AND `project`.View = 1");
	
	 	  $rowProjB = mysqli_num_rows($resultProjB);
		  
		  $rowProjTotal = $rowProjA + $rowProjB;
		  
		  if($rowProjTotal != 0){
			  
			$rowProjBadgeCode = "<span class='badge'>$rowProjTotal</span>";
			  
			  }else{
				  
				  $rowProjBadgeCode = " ";
				  
				  }
		  
		   ?>
           
           
            <li class="projects"><a  href="#"><img class="sidebarLogos" src="../Images/myFolder/leaveManagementRES.png" style="width:50px; height:50px;"/><span class="titleHolder">Projects</span><?php echo $rowProjBadgeCode;  ?>  </a> 
            
            <ul id="projectList" class="innerList">
            	<li><a class="selectionClass2"> Project Add </a></li>
                <li><a class="selectionClass3">My Projects</a></li>
                <li><a class="selectionClass4">Materials Add</a></li>
            	<li><a class="selectionClass5">New User Project Proposal</a></li>
                <li><a class="selectionClass6">New Project Proposal</a></li>
                <li><a class="selectionClass7" href="Reporter.php" target="new">Generate Reports</a></li>
            </ul>
         
         </li>
          
          
            <li class="inventory"><a  href="#"><img class="sidebarLogos" src="../Images/myFolder/reportsRES.png" style="width:50px; height:50px;"/><span class="titleHolder">Inventory</span></a>  
             <ul id="inventoryList" class="innerList">
            	<li><a class="selectionClass8">My Storage</a></li>   
                <li><a class="selectionClass14">Materials Logs</a></li>                
                <li><a class="selectionClass7" href="Reporter.php" target="new">Generate Reports</a></li>
            </ul>
          </li>
          
                        
            <li class="customize"><a  href="#"><img class="sidebarLogos" src="../Images/myFolder/TimeapproveRES.png" style="width:50px; height:50px;"/><span class="titleHolder">Customize</span></a> 
            <ul id="customizeList" class="innerList">
            	<li><a class="selectionClass9">Materials Customize</a></li>                
                <li><a class="selectionClass10">Project Category</a></li>
                <li><a class="selectionClass11">Edit HomePage Image Gallery</a></li>
                <li><a class="selectionClass15">Company Information</a></li>
            </ul>
          </li> 
           
             
            <li class="usersAcct"><a href="#"><img class="sidebarLogos" src="../Images/myFolder/avatarRES.png" style="width:50px; height:50px;"/><span class="titleHolder">Users Acct.</span></a>          
             <ul id="useracctList" class="innerList">
            	<li><a class="selectionClass12">Create New User</a></li>                
                <li><a class="selectionClass13">User Management</a></li> 
                </ul>
                
                </li>
                <!--End of Admin Selection Class-->
                   <?php }else if($Role == 2){ ?> 
                    <!--Project Manager Class-->     
                                  
				    <li><a class="selectionClass1" href="#"><img class="sidebarLogos" src="../Images/myFolder/homerRES.png" style="width:50px; height:50px;"/><span class="titleHolder"> Home </span><?php echo $rowHomeBadgeCode; ?></a> </li>
                   
				   
                   <li><a class="selectionClass2" href="#"><img class="sidebarLogos" src="../Images/myFolder/leaveManagementRES.png" style="width:50px; height:50px;"/><span class="titleHolder">My Projects</span><?php echo $rowHomeBadgeCode; ?></a> </li>			   
				   
				    
                <!--End of Project Manager Selection Class-->
				   <?php }else if($Role == 3){ ?> 
				   <!--Client Class-->
				   
				   
				   
				   
				   
				   <!--End of Client Selection Class-->
				   <?php };?>            
            
          
           <li><a href="../../index.php">Log Out</a></li> 
          </ul>
        
        </div><!--/.leftMid-->
        
        <div class="rightMid"> 
        	<?php if($Role == 1){ ?> 
            <!--Admin Menu Class-->
            <div class="rightMidContainer"> 
            	<?php include('adminPageMenu.php');?>
            </div>                  
        	<!--End of Admin Menu Class-->
        <?php }else if($Role == 2){ ?>
			<!--Project Manager Menu Class-->
            <div class="rightMidContainer">             
           		 <?php include('projectmanagerPageMenu.php');?>      
			</div>                  
        	<!--End of Project Manager Menu Class-->
			
		<?php	}else if($Role == 3){ ?>
			<!--client Menu Class-->
            <div class="rightMidContainer"> 
			
			</div>                  
        	<!--End of client Menu Class-->
            
		<?php	}?>
        
        
                
        </div>
         
         
       </div><!--/#mainMid-->
       
        
</body>