<?php
include("../connection.php");
include("table.php");
$id=$_REQUEST['id'];

mysqli_query($con,"UPDATE $table SET status='$_POST[status]' WHERE id='$id'") or die("error".mysql_error());


header("location:select.php");
?>
