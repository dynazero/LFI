<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Controller/appml.css">
<style>
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
</head> 

<body>
<center>
<h1>Project Reports</h1>

<div id="Place01">
<table id="Template01" class="appmltable">
<tr>
  <th>User Name</th>
  <th>Project Name</th>
  <th>Project Activated</th>
  <th>Category of Project</th>
  
  <th>File Location</th>
</tr>
<tr id="appml_row">
  <td>#UserName#</td>
  <td>#ProjectName#</td>
  <td>#Activated#</td>
  <td>#CategoryName#</td>
  
  <td>#filePath#</td>
</tr>
</table>	
</div>

<script src="../Controller/appml.js"></script>

<script>
var obj
obj=new AppML("../Controller/appml.php","../Model/Projects.xml");
obj.run("Place01","Template01");
</script>


<script>

</script>

<input class="no-print" type="button" id="print" value="Print" onClick="print();"/>
</center>
</body>
</html>
