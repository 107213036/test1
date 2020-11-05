<?php
session_start();
require("dbconnect.php");
if (isset($_GET['m'])){
    $temp=$_GET['m'];
    $content="<font color='red' font size='10px'>$temp</font>";
    }else{
    $content="mor!";
}

$sql = "select * from todo where status=0 ORDER BY FIELD( importance, '緊急', '重要', '一般');";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>工作表W2</title>
</head>

<body>

<p>my Todo  List!! </p>
<hr />
<div><?php echo $content ?></div>
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>title</td>
    <td>message</td>
    <td>status</td>
    <td>importance</td>
    <td>ok</td>
    <td>alter</td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $rs['id'] . "</td>";
    echo "<td>{$rs['title']}</td>";
    echo "<td>" , $rs['content'], "</td>";
    echo "<td>" . $rs['status'],"</td>";
    echo "<td>" . $rs['importance'],"</td>";
    echo "<td>"."<a href='TodoSet.php?id={$rs['id']}'>OK</a>". "</td>";
    echo "<td>"."<a href='Todoupdate02F.php?id={$rs['id']}'>Alter</a>". "</td></tr>";
}

?>
</table>
<a href="TodoAddForm.php">Add Task</a>
</br>
<a href="TodoDone.php">已經完成</a>
</body>
</html>
