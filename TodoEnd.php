<?php
require("dbconnect.php");

$msgID=(int)$_GET['id'];
if ($msgID) {
	$sql = "update todo set status=3 where id=$msgID;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
}
echo "Message:$msgID completed.";
header("Location:TodoBoss.php?m=$content");
?>

