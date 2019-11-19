<?php

include('../db/connectionI.php');
if(isset($_POST['admin']))
{
	// username and password sent from form 
	$myusername=$_POST['UserName']; 
	$mypassword=$_POST['Password']; 
	if($myusername=="admin" and $mypassword="admin")
	{
		session_start();
		$_SESSION['type']="admin";
		header("location:../dashboard/dashboard.php");
	}
	else
	{
	header("location:login.php?a=error");
	}
}
if(isset($_POST['staff']))
{
	// username and password sent from form 
	$myusername=$_POST['UserName']; 
	$mypassword=$_POST['Password']; 
	$result=mysqli_query($con,"SELECT * FROM tbl_teacher WHERE username='$myusername' and password='$mypassword'");
	$num_rows=mysqli_num_rows($result);
	if($num_rows==1)
	{
		$row=mysqli_fetch_array($result);
		session_start();
		$_SESSION['type']="teacher";
		$_SESSION['teacher_id']=$row['id'];
		$_SESSION['teacher_name']=$row['teacher_name'];
		header("location:../../teacher/dashboard/dashboard.php");
	}
else
	{	
	header("location:login.php?a=error");
	}
}


if(isset($_POST['student']))
{
	// username and password sent from form 
	$myusername=$_POST['UserName']; 
	$mypassword=$_POST['Password']; 
	$result=mysqli_query($con,"SELECT * FROM tbl_student WHERE student_username='$myusername' and student_password='$mypassword'");
	$num_rows=mysqli_num_rows($result);
	if($num_rows==1)
	{
		$row=mysqli_fetch_array($result);
		session_start();
		$_SESSION['type']="student";
		$_SESSION['userid']=$row['id'];
		$_SESSION['student_name']=$row['student_name'];
		header("location:../../student/dashboard/dashboard.php");
	}
else
	{	
		header("location:login.php?a=error");
	}
}
?>
 
 



