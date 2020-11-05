<?php
session_start();
require("dbconnect.php");
$id = (int)$_GET['id'];
$sql = "select * from todo where id = $id;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
$rs=mysqli_fetch_assoc($result);
if (! $rs) {
	echo "no data found";
	exit(0);
}
?>

<h1>Alter Message</h1>

<form method="post" action="Todoupdate02.php">
    <input name='id' type="hidden" value='<?php echo $id?>'/> <br>
    
    Title: <input name="title" type="text" id="title" value="<?php $rs['title']?>"/> <br>

    Content: <input name="content" type="text" id="content" value="<?php echo $rs['content']?>"/> <br>

    Status: <input type="radio" name="status" value="0"> 未完成
            <input type="radio" name="status" value="1"> 完成<br>
    
    importance: 
    <input type="radio" name="importance" value="緊急"> 緊急
    <input type="radio" name="importance" value="重要"> 重要
    <input type="radio" name="importance" value="一般"> 一般
    
    <input type="submit" name="Submit" value="送出" />
</form>

