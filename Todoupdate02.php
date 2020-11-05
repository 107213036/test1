<?php
require("dbconnect.php");
$id=(int)$_POST['id'];
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$importance=mysqli_real_escape_string($conn,$_POST['importance']);
if ($id) {
    $sql = "update todo set title= '$title',content= '$content',status= '$status',importance='$importance' where id=$id;";
    mysqli_query($conn,$sql) or die("MySQL query error");
    $content="MESSAGE update!";
}
header("Location:TodoBoss.php?m=$content");
?>