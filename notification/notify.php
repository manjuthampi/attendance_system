<?php include("../header_inner.php");?>
<link rel="stylesheet" type="text/css" href="datatables.min.css">
 
		<script type="text/javascript" src="datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>

<style>
.hiddentd
{
display:inline-block;
    width:180px;
    white-space: nowrap;
    overflow:hidden !important;
   
}
</style>
<div class="">
<div class="clearfix"></div>
<table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0"  role="grid" aria-describedby="example_info" >
<?php
include("../connection.php");
date_default_timezone_set("Asia/Kolkata");
$current_hour=date("H");
//checking 4 PM
if($current_hour>=16)
{
 	$result1 = mysqli_query($con,"SELECT * FROM tbl_student");
	while($row1 = mysqli_fetch_array($result1))
		{
		$student=$row1['id'];
		$student_name=$row1['student_name'];
		$batch=$row1['batch'];
		$parent_mob=$row1['parent_mob'];
		$date=date("Y-m-d");
		$result2 = mysqli_query($con,"SELECT * FROM tbl_attendance WHERE attendance_date='$date' AND notify_status='no'");
		$count1=mysqli_num_rows($result2);
		if($count1==0)
		{
		?>
			<script>
				window.location.href = "../dashboard/dashboard.php?a=already";
			</script>
			
		<?php 
		}
		else
		{
		$result3 = mysqli_query($con,"SELECT * FROM tbl_attendance WHERE student='$student' AND batch_id='$batch' AND attendance_date='$date'");
		$count2=mysqli_num_rows($result3);
		if($count2<5)
		{
			/*
			echo"<h2><u>DETAILS</u></h2>";
			echo"student id: ".$student."<br>";
			echo"student name: ".$student_name."<br>";
			echo"parent no: ".$parent_mob."<br>";
			echo"batch: ".$batch."<br>";
			echo"count of periods: ".$count;
			*/
			if($count2==0)
			{
				$message="Dear Parent, Your child $student_name(id: $student) of batch no: $batch has not attended any periods on $date.";
			}
			else
			{
				$message="Dear Parent, Your child $student_name(id: $student) of batch no: $batch only attended $count2 periods on $date.";
			}
			//echo $message;
			$username ="manjuthampi2015@gmail.com"; 
			$password ="manju97";
			session_start();
			$mob_number=$parent_mob; // Sender ID 
			$approved_senderid="PROMOTIONAL"; //Approved Template 
			$enc_msg= rawurlencode($message); 
			// Encoded message //Create API URL 
			// sending sms
	$fullapiurl="http://smsc.biz/httpapi/send?username=$username&password=$password&sender_id=PROMOTIONAL&route=P&phonenumber=$mob_number&message=$enc_msg"; 
			//Call API 
			$ch = curl_init($fullapiurl); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			$result3 = curl_exec($ch); 
			//echo $result3 ; 
			// For Report or Code Check 
			curl_close($ch);
			//echo "SMS Request Sent - Message id - $result3 $mob";
			
		}
		/*
		else
		{
			echo"<h2><u>FULL ATTENDANCE</u></h2>";
			echo"student id: ".$student."<br>";
			echo"student name: ".$student_name."<br>";
			
		}
		*/
		}
		}
			mysqli_query($con,"UPDATE tbl_attendance SET notify_status='yes' WHERE attendance_date='$date'");
			?>
			<script>
				window.location.href = "../dashboard/dashboard.php?a=notified";
			</script>
			
		<?php 
}
else
{
?>	
	<script>
		window.location.href = "../dashboard/dashboard.php?a=time";
	</script>
<?php	
}
		?>
<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$('#example')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>

<div class="clearfix"></div>
	
    </div> 