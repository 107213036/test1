<?php
require("dbconnect.php");
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$status=mysqli_real_escape_string($conn,$_POST['status']);

if ($msgID) { //if title is not empty
	$sql = "update todo set title='$title' AND content='$content' AND status ='$status' WHERE id=$msgID;;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Message update";
} else {
	echo "Message cannot be empty";
}

?>