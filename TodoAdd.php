<?php
require("dbconnect.php");
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$importance=mysqli_real_escape_string($conn,$_POST['importance']);
if ($title) { //if title is not empty
	$sql = "insert into todo (title, content, status,importance) values ('$title', '$content','$status','$importance');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$content="MESSAGE new!";
    header("Location:TodoBoss.php?m=$content");
} else {
	echo "Message title cannot be empty";
}

?>