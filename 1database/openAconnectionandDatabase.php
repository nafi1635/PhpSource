<?php
$name="root";
$pwd="";
$db="CEO";
$server="localhost";
$handle=mysql_connect($server,$name,$pwd);    //handle is just for return resource id
print "connection opened "."<br>";
$dbf=mysql_select_db($db,$handle);
if($dbf)
	print "found yar";
	mysql_close($handle);   //cosing resource id linker
else
	print "Not found";	
?>
