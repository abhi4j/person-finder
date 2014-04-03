<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>GIVER</title>
<script type="text/javascript">
function validate(){
if(document.form1.uname=="")
{
alert("Please enter your name");
return false;
document.form1.uname.focus();
}
if(document.form1.appearance=="")
{
alert("Please enter description of the person");
return false;
document.form1.appearance.focus();
}
if(document.form1.pname=="")
{
alert("Please enter the person's name");
return false;
document.form1.pname.focus();
}
if(document.form1.whereabts==" ")
{
alert("Please enter your current location");
return false;
document.form1.whereabts.focus();
}
if(document.form1.contact=="")
{
alert("Please enter the contact no.");
return false;
document.form1.contact.focus();
}

}
</script>
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

.style3 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	color: #CC3300;
}
.style4 {
	font-family: "Courier New", Courier, monospace;
	font-size: 36px;
	color: #CC3366;
	font-weight: bold;
}
body {
	background-color: #33CCFF;
}
.style6 {font-family: "Courier New", Courier, monospace; font-size: 18px; color: #CC3333; font-weight: bold; }
.style7 {
	font-size: 24px;
	color: #003399;
}
.style8 {
	font-size: 24px;
	color: #3300CC;
}
.style9 {
	font-size: 24px;
	color: #333399;
}

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

<h2 class="style3">You are applauded coz you are here.This interface is dedicated for the people who are on the disaster site and want to give information about somebody who are with them.</h2> </br>

<h1 class="style2">
<center>
	<form name="f3" action="index.php">
	<input type="submit" value="HOME">
	</form>
  <p>Please fill the below form in order to provide information</p>
  <p>&nbsp;  </p>
</center></h1>
<center>
<form name="form1" method="get" action="thankyou.php">
<table border="0" cellpadding="2" class="style3">
<tr><td>YOUR NAME</td>
<td><input type="text" name="uname" /></tr>
<tr>
<td>WHERE  ARE YOU CURRENTLY?</td>
<td><input type="text" name="whereabts" /></td>
</tr>
<tr>
<td>NAME OF PERSON</td>
<td><input type="text" name="pname" ></td>
</tr>
<tr>
<td>State</td>
<td>
<select name="state" id="state">
<option value="Maharashtra"s>Maharashtra</option>
<option  value="Gujarat">Gujarat</option>
<option  value="West Bengal">West Bengal</option>
</select></td>

</tr>
<tr>
<td>DESCRIBE HIS/HER APPEARANCE</td>
<td><textarea name="appearance"></textarea></td>
</tr>
<tr>
<td>HIS/HER LOCATION</td>
<td><input type="text" name="location" /></td>
</tr>
<tr>
<td>CONTACT</td>
<td><input type="text" name="contact" /></td>
</tr>
</table>
<input type="submit" value="submit">
</form>
</center>
</body> 
</html>
