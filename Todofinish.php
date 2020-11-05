<?php
session_start();
require("dbconnect.php");
if (isset($_GET['m'])){
    $temp=$_GET['m'];
    $content="<font color='red' font size='10px'>$temp</font>";
    }else{
    $content="mor!";
}
$sql = "select * from todo where status=3 ORDER BY FIELD( importance, '緊急', '重要', '一般');";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>已交辦的工作 !! </p>
<hr />
<hr>
<a href="TodoHome.php">Home</a><br>
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>title</td>
    <td>message</td>
    <td>importance</td>
    <td>status</td>
  </tr>
<?php
$i=0;
while (	$rs=mysqli_fetch_assoc($result)) {
	$i++;
	echo "<tr><td>" . $rs['id'] . "</td>";
	echo "<td>{$rs['title']}</td>";
	echo "<td>" , htmlspecialchars($rs['content']), "</td>";
    if($rs['importance']=="緊急"){
        echo "<td><font color='red'>".$rs['importance']."</font></td>";
    }
    elseif($rs['importance']=="重要"){
        echo "<td><font color='green'>".$rs['importance']."</font></td>";
    }
    else{
        echo "<td><font color='blue'>".$rs['importance']."</font></td>";
    }
    echo "<td>".$rs['status']."</td></tr>";
}

$sql = "select count(*) as c from todo where status = 1;";
$result=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($result);
echo "已完成數量{$rs['c']} ";
?>
</table>

</body>
</html>
