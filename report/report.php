
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


<script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status  =0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
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
	  
	  
	  <div class='col-md-12'>
      <div class='form-group'><label>subject</label><br> 
	  <select name='subject_id' class='form-control' id='subject_id' required="required" >
	  <option value=''>--select subject--</option>
<?php

$data=mysqli_query($con,"SELECT * FROM tbl_subject");
while($row=mysqli_fetch_array($data))
{
	echo " <option value='$row[id]'>$row[subject_name]</option>"; 
}
?>
	</select>
	  </div></div>
      

	
<div class='col-md-12'>              
<div class='form-group'>
	  <input type='submit' value='Check Attendance' name='submit' class='form-control btn-success'>
 </div></div>
	  </form>
      <br>
      <input type="button" value="Print Report" onclick="printPage('block1');" class='form-control btn-danger'></input>
      
<div id="block1">
<?php
if(isset($_POST['submit']))
{
	$subject_id=$_POST['subject_id'];
	$student=$_POST['student'];
	$data2=mysqli_query($con,"SELECT COUNT(attendance_date) AS ccount FROM tbl_attendance WHERE subject_id='$subject_id'");
	$row2=mysqli_fetch_array($data2);
	$total_days=$row2['ccount'];
	$data3=mysqli_query($con,"SELECT * FROM tbl_subject WHERE id='$subject_id'");
	$row3=mysqli_fetch_array($data3);
	$batch=$row3['batch'];
	echo "<h3 align='center' style='text-decoration: underline;'>Total Working Hours : $total_days</h3>";
	echo "<h3 align='center' style='text-decoration: underline;'>Batch No : $batch</h3><hr>";
	$data4=mysqli_query($con,"SELECT * FROM tbl_student WHERE batch='$batch'");
	while($row4=mysqli_fetch_array($data4))
	{
	
	$data5=mysqli_query($con,"SELECT COUNT(attendance_date) AS acount FROM tbl_attendance WHERE subject_id='$subject_id' AND student='$row4[id]'");
	$row5=mysqli_fetch_array($data5);
	$pdays=$row5['acount'];
	
	
	$per=round((($pdays/$total_days)*100),2);
	echo "<h4>Student Name: $row4[student_name]</h4>";
	echo "<h4>Total Present Hours : $pdays</h4>";
	echo "<h4>Percentage: $per %</h4><hr>";
	
	
	}
	
	
}
?>





















<?php
mysqli_free_result($result);

echo "</div></div>



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