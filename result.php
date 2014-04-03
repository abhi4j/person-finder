<?php
include("db.php");
$name=$_REQUEST['name'];
$cont=$_REQUEST['phone'];
$result=mysql_query("SELECT * FROM information WHERE pname='$name'");


?><!doctype html>
<head>
<title>Result</title>
<style type="text/css">

a:link {
	color: #F0F0F0;
}
.style2 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-style: italic;
	font-size: 36px;
	color: #CC3300;
}
body {
	background-color: #33CCFF;
}
.style7 {
	font-size: 24px;
	color: #003399;
}
.style14 {
	font-size: 36px;
	color: #CC0033;
}
.style3 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	color: #CC3300;
}
.style18 {color: #FFFFFF}
</style>


</head>

<body>
<table width="97%" border="2" cellspacing="5px" cellpadding="5px">
  <tr>
    <th width="17%" height="116" scope="col"><img src="images/helicopter.jpg" width="101%" height="172"/></th>
    <th width="83%" bordercolor="#FFFFFF" bgcolor="#00FFFF" scope="col" background="images/map.jpg"><h1 class="style2">PERSON FINDER</h1>
    <p class="style2 style7">Lets bring them back..TOGETHER..!! </p></th>
  </tr>
</table>
<center>
<form name="f5" action="seeker.php">
<input type ="submit"  value="GO BACK" />
</form>
<br />
<br />
<center><em><h1 class="style14">Following results match your search</h1></em>
<table border="2" align="center" cellpadding="5px" cellspacing="5px" class="style3">
<tr>
<th>Serial No. </th>
<th>Name</th>
<th>Description</th>
<th>Current Location</th>
<th>Contact</th>
</tr>
<?php
while($row=mysql_fetch_array($result))
{
?>
<tr>
<td><?=$row['serial']?></td>
<td><?=$row['pname']?></td>
<td><?=$row['appearance']?></td>
<td><?=$row['location']?></td>
<td><?=$row['contact']?></td>
<?php
}
?>
</table>
<center>
</body>
</html>