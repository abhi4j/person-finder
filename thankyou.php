
<?php
include("db.php");

$uname=$_REQUEST['uname'];
$where=$_REQUEST['whereabts'];
$pname=$_REQUEST['pname'];
$describe=$_REQUEST['appearance'];
$loc=$_REQUEST['location'];
$con=$_REQUEST['contact'];
$image=$_REQUEST['image'];


$query=mysql_query("INSERT into information (serial,uname,whereabts,pname,appearance,location,contact,photo)
VALUES ('','$uname','$where','$pname','$describe','$loc','$con','images/$image')");


$squery=mysql_query("SELECT * FROM noresult where searchname='$pname';");
	while ($rows=mysql_fetch_array($squery)) {
		$smail=$rows['email'];
		$sname=$rows['searchname'];
		$syname=$rows['yourname'];

		#sending email from php

		$to=$smail;
		$subject="Information regarding".$sname;
		$message=wordwrap("Information regarding ".$sname." is now available on our website.Visit person-finder");
		$header="From:support@personfinder.com \r\n";
		$retval=mail($to, $subject, $message,$header);

		$aquery=mysql_query("DELETE FROM noresult WHERE searchname='$sname' AND email='$semail'");

		}


if($query){
header("location:thanx.php");
}


?>