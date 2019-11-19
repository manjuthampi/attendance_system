<?php

    session_start();
    $username=$_SESSION['username'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRM</title>
</head>
<body>
<table align="center"  border="5">
  <tr>
    <td>Welcome</td>
    <td><?php echo $username;?></td>
  </tr>
  <tr>
 
  <td><a href="ChangePassword.php">Change Password</a></td>
  <td><a href="Product.php">Product</a></td>
  <td><a href="ProductionDetails.php">Production Details</a></td>  
  </tr>
  </table>
</body>
</html>