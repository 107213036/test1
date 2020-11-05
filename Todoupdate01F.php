<?php
session_start();
require("dbconnect.php");
?>

<h1>Alter Message</h1>

<form method="post" action="Todoupdate01.php">
    WORK ID: <input name="id" type="int" id="id" /> <br>
    
    Title: <input name="title" type="text" id="title" /> <br>

    Content: <input name="content" type="text" id="content" /> <br>

    Status: <input name="status" type="int" id="status" /> <br>
    <input type="submit" name="Submit" value="送出" />
</form>

