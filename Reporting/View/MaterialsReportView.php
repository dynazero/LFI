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
<h1>Materials Report</h1>

<div id="Place01">
<table id="Template01" class="appmltable">
<tr>
  <th>Material Name</th>
  <th>Quantity</th>
  <th>Scale</th>
  <th>Weight</th>
  <th>Project Name</th>
  <th>Activated</th>
</tr>
<tr id="appml_row">
  <td>#MaterialName#</td>
  <td>#Quantity#</td>
  <td>#Scale#</td>
  <td>#Weight#</td>
  <td>#ProjectName#</td>
  <td>#Activated#</td>
</tr>
</table>	
</div>

<script src="../Controller/appml.js"></script>

<script>
var obj
obj=new AppML("../Controller/appml.php","../Model/Materials.xml");
obj.run("Place01","Template01");
</script>


<script>

</script>

<input class="no-print" type="button" id="print" value="Print" onClick="print();"/>
</center>
</body>
</html>
