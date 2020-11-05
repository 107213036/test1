<?php
require("dbconnect.php");

$msgID=(int)$_POST['id'];
if ($msgID) {
	$sql = "delete from todo where id=$msgID;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
}
echo "Message:$msgID deleted.";
?>

