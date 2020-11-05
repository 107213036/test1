<?php
require("dbconnect.php");
$msgID=(int)$_POST['id'];
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
if ($msgID) {
    $sql = "update todo set title= '$title',content= '$content',status= '$status' where id=$msgID;";
    mysqli_query($conn,$sql) or die("MySQL query error");
    header("Location:Todolist.php");
    //$sql = "update todo set content= '$content' where id=$msgID;";
    //mysqli_query($conn,$sql) or die("MySQL query error");
    //$sql = "update todo set status= '$status' where id=$msgID;";
    //mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
}
echo "Message:$msgID alerted.";
?>