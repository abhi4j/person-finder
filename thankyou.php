
<?php
include("db.php");

$uname=$_REQUEST['uname'];
$where=$_REQUEST['whereabts'];
$pname=$_REQUEST['pname'];
$describe=$_REQUEST['appearance'];
$loc=$_REQUEST['location'];
$con=$_REQUEST['contact'];
//$state=$_REQUEST['state'];
$query=mysql_query("INSERT into information (serial,uname,whereabts,pname,appearance,location,contact)
VALUES ('','$uname','$where','$pname','$describe','$loc','$con')");
if($query){
header("location:thanx.php");
}

?>