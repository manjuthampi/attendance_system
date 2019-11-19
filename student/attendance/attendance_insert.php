<?php
$con=mysqli_connect("localhost","root","","attendance");
$check=mysqli_query($con,"SELECT * FROM tbl_attendance WHERE student='$_POST[student]' AND batch_id='$_POST[batch_id]' AND period='$_POST[period]' AND attendance_date='$_POST[attendance_date]'");
$count=mysqli_num_rows($check);
if($count>=1)
{	
	header("location:form.php?a=multiple");	
}
else
{
$sql="INSERT INTO tbl_attendance (student,teacher,subject_id,batch_id,period,attendance_date,attendance_time,attendance_status) VALUES ('$_POST[student]','$_POST[teacher]','$_POST[subject_id]','$_POST[batch_id]','$_POST[period]','$_POST[attendance_date]','$_POST[attendance_time]','present')";
if(mysqli_query($con,$sql))
{
setcookie("subject_id","$_POST[subject_id]", time() + (300), "/");
setcookie("batch_id","$_POST[batch_id]", time() + (300), "/");
setcookie("period","$_POST[period]", time() + (300), "/");	
header("location:form.php?a=1");
}
else
{	
//echo $sql;
	header("location:form.php?a=error");
}
}

?>
