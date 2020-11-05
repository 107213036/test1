<?php
session_start();
require("dbconnect.php");
$content="nig!";
$sql = "select * from todo where status=1;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>工作表W2!!</title>
</head>

<body>

<p>my Todo  List(finish)!! </p>
<hr />
<div><?php echo $content ?></div>
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>title</td>
    <td>message</td>
    <td>status</td>
  </tr>

<?php
$i=0;
while (	$rs=mysqli_fetch_assoc($result)) {
    $i++;
    echo "<tr><td>" . $rs['id'] . "</td>";
    echo "<td>{$rs['title']}</td>";
    echo "<td>" , $rs['content'], "</td>";
    echo "<td>" . $rs['status'],"</td>";
}

$sql = "select count(*) as c from todo where status=1;";
$result=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($result);
echo "已完成 : {$rs['c']}   i=$i";
?>
</table>
<a href="Todolist.php">未完成</a>
<a href="Todorpt.php">取消完成</a>
</body>
</html>
