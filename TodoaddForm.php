<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>Add New work</h1>
<form method="post" action="TodoAdd.php">

      Title: <input name="title" type="text" id="title" /> <br>

      Content: <input name="content" type="text" id="content" /> <br>

      Status: <input type="radio" name="status" value="0"> 未完成
            <input type="radio" name="status" value="1"> 完成<br>
    
      importance: 
    <input type="radio" name="importance" value="緊急"> 緊急
    <input type="radio" name="importance" value="重要"> 重要
    <input type="radio" name="importance" value="一般"> 一般 <br>
      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
<a href="TodoBoss.php">BACK!</a>
</body>
</html>
