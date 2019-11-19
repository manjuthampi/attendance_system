
<?php
include("../header_inner.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="jquery-1.8.2.js"></script>
  <style>
  .error
  {
	  color:#F00 !important;
  }
  .hide
{
display:none;	
}
  </style>
  
  
  <script>
history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
</script>




<?php 

$conn = mysqli_connect("localhost","root","","attendance");

?>

</head>
<body>
<?php
include("data_validation.php");
include("../connection.php");


echo "<div class='col-sm-12'>";
echo "<h2>ATTENDANCE REPORT</h2>";
echo "<form method='post' name='register_form' id='register_form'>";
?>
	  
	  
	  <div class='col-md-6'>
      <div class='form-group'><label>subject</label><br> 
	  <select name='subject_id' class='form-control' id='subject_id' required="required" >
	  <option value=''>--select subject--</option>
<?php

$data=mysqli_query($con,"SELECT * FROM tbl_subject WHERE teacher_name='$_SESSION[teacher_id]'");
while($row=mysqli_fetch_array($data))
{
	echo " <option value='$row[id]'>$row[subject_name]</option>"; 
}
?>
	</select>
	  </div></div>
      
      
      <div class='col-md-6'>
      <div class='form-group'><label>student</label><br> 
	  <select name='student' class='form-control' required="required" >
	  <option value=''>--select student--</option>
<?php

$data1=mysqli_query($con,"SELECT * FROM tbl_student");
while($row1=mysqli_fetch_array($data1))
{
	echo " <option value='$row1[id]'>$row1[student_name]</option>"; 
}
?>
	</select>
	  </div></div>
	
<div class='col-md-12'>              
<div class='form-group'>
	  <input type='submit' value='Check Attendance' name='submit' class='form-control btn-success'>
 </div></div>
	  </form>

<?php
if(isset($_POST['submit']))
{
	$subject_id=$_POST['subject_id'];
	$student=$_POST['student'];
	$data2=mysqli_query($con,"SELECT COUNT(attendance_date) AS ccount FROM tbl_attendance WHERE subject_id='$subject_id'");
	$row2=mysqli_fetch_array($data2);
	$total_days=$row2['ccount'];
	echo "<h4>Total Working Days : $total_days</h4>";
	$data3=mysqli_query($con,"SELECT COUNT(attendance_date) AS acount FROM tbl_attendance WHERE subject_id='$subject_id' AND student='$student'");
	$row3=mysqli_fetch_array($data3);
	$pdays=$row3['acount'];
	echo "<h4>Total Present : $pdays</h4>";
	
	
}
?>





















<?php
mysqli_free_result($result);

echo "</div>



<div class='clearfix'></div>


";






mysqli_close($con);

include("../footer_inner.php");


?>
   <div id="sample">
 <!-- <script type="text/javascript" src="nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>-->