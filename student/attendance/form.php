
<?php
include("../header_inner.php");

//$table="tbl_subject";
//$target_path = "uploads/";
$title="MARK ATTENDANCE";
error_reporting(0);
if($_REQUEST['a']=="multiple")
{
	echo "<script>alert('Attendance Already Marked!!!!')</script>";
}
if($_REQUEST['a']=="error")
{
	echo "<script>alert('Insert Faild!!!!')</script>";
}
if($_REQUEST['a']=="1")
{
	echo "<script>alert('Attendance Marked Sucessfully')</script>";
}
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
<script src="mfs100-9.0.2.6.js"></script>
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
if(isset($_COOKIE['batch']))
{
$query01 = "SELECT * FROM tbl_fingerprint WHERE user_type='student' and batch='$_COOKIE[batch]'";
}
else
{
	$query01 = "SELECT * FROM tbl_fingerprint WHERE user_type='student' and batch='$_COOKIE[batch]'";
}
$result01 = mysqli_query($conn, $query01); 
$count=mysqli_num_rows($result01);
if ($result01->num_rows >= 0)
{ 
  while($row01=mysqli_fetch_array($result01))
  {
    $fp = $row01["fingerprint"];
	$student=$row01["user"];
	//echo "hiiiii ". $student."<br>";
	?>
	
	
	
	
<div class="hide">
<textarea id="txtIsoTemplate" name="txtIsoTemplate" style="width: 100%; height:50px;" class="form-control"><?php echo $fp; ?></textarea>
<input type="text" name="student1" id="student1" value="<?php echo $student; ?>" >
<input type="text" name="count" id="count" value="<?php echo $count; ?>" >
</div>

	<script language="javascript" type="text/javascript">


        var quality = 60; //(1 to 100) (recommanded minimum 55)
        var timeout = 10; // seconds (minimum=10(recommanded), maximum=60, unlimited=0 )
        var flag = 0;

// Function used to match fingerprint using json object 

   function Match() {
            try {
				
			    var count = document.getElementById("count").value;
				 
				
				var i;
                for (i = 0; i < count; i++) 
				{
					var isotemplate = document.getElementsByName('txtIsoTemplate')[i].value;
					var student = document.getElementsByName('student1')[i].value;
				
				    
					var res = MatchFinger(quality, timeout, isotemplate);
				
                    if (res.httpStaus) {
					//alert("student="+student);
					
                    if (res.data.Status) {
					   //alert ("Count is : "+count);
					   //alert ("student id : "+student)
					   document.getElementById("students").value = +student;
                       alert("Finger matched");
					   break;
					   
                    }
                    else {
                        if (res.data.ErrorCode != "0") {
                            alert(res.data.ErrorDescription);
                        }
                        else {
							//alert ("student id : "+student);
							if(i<count-1)
							{
							var isotemplate = document.getElementsByName('txtIsoTemplate')[i].value;
							var res = MatchFinger(quality, timeout, isotemplate);
							
							}
							else
							{
							alert("Finger not matched");
							}
							
                        }
                    }
                }
					
                else {
                    //alert(res.err);
                }
            }
			}
			catch (e) {
              //  alert(e);
            }
            return false;

        } 
				

		</script>

	
	
	
<?php	

  }
  
}


//echo "<br><br>";
//echo json_encode($fp);
?>
  
  
  
  <script type="text/javascript" language="javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
function getbatch(strURL) {		
		
		var req = getXMLHTTP();
		//alert(strURL);
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('batch').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
	
	
</script>













</head>
<body>
<!--<style>
div
{
text-transform:capitalize;
margin-bottom:5px;	
}

</style>-->
<?php

include("data_validation.php");
include("../connection.php");


echo "<div class='col-sm-12'>";
echo "<h2>$title</h2>";
echo "<form action='attendance_insert.php' method='post' enctype='multipart/form-data' name='register_form' id='register_form'>";
?>
	  
	  
	  <div class='col-md-12'>
      <div class='form-group'><label>subject</label><br> 
	  <select name='subject_id' class='form-control' id='subject_id' onChange="getbatch('findbatch.php?subject_id='+this.value)" required="required" >
	  <option value=''>--select subject--</option>
<?php
if(isset($_COOKIE['subject_id']))
{
	$data=mysqli_query($con,"SELECT * FROM tbl_subject WHERE id='$_COOKIE[subject_id]'");
	$row=mysqli_fetch_array($data);
	echo " <option value='$row[id]' selected>$row[subject_name]</option>";
}
else
{
$data=mysqli_query($con,"SELECT * FROM tbl_subject WHERE teacher_name='$_SESSION[teacher_id]'");
while($row=mysqli_fetch_array($data))
{
	echo " <option value='$row[id]'>$row[subject_name]</option>"; 
}
}
?>
	</select>
	  </div></div>
	
	
<div class='col-md-12' id='batch'>
<div class='form-group' id='batch'><label>BATCH</label><br>
       
<?php 
if(isset($_COOKIE['batch_id']))
{
?>
<input type='text' name='batch_id' class='form-control' id='batch' value="<?php echo $_COOKIE['batch_id']; ?>" readonly>   
<?php
}
else
{
?>
<input type='text' name='batch_id' class='form-control' id='batch' required readonly>
      <?php } ?>
       </div>
</div>


<div class='col-md-12'>
      <div class='form-group'><label>period</label><br> 
	  <select name='period' class='form-control' id='period' required="required" >
	  <option value=''>--select period--</option>
      <?php 
if(isset($_COOKIE['period']))
{
?>
<option value="<?php echo $_COOKIE['period']; ?>" selected><?php echo $_COOKIE['period']; ?></option>
<?php }
else
{
	?>
       <option value='1'>1</option>
       <option value='2'>2</option>
       <option value='3'>3</option>
       <option value='4'>4</option>
       <option value='5'>5</option>
       <option value='6'>6</option>
       <option value='7'>7</option>
       <?php } ?>
	 </select>
	</div>
</div>
<div class='col-md-12'>
      <div class='form-group'><label>DATE</label><br> 
      <?php $date=date("Y-m-d"); ?>
	  <input name='attendance_date' class='form-control' value="<?php echo $date; ?>" readonly>
	  </div>
</div>

<div class='col-md-12'>
      <div class='form-group'><label>TIME</label><br> 
      <?php $time=date("H:i:s"); ?>
	  <input name='attendance_time' class='form-control' value="<?php echo $time; ?>" readonly>
	  </div>
</div>


<div class='col-md-12'>
<button type="input" onclick="return Match()"  class='form-control btn-danger' >Start Scanning</button>
	</div>

<div class='col-md-12' id='student'>
        
        <div class='form-group' id='batch'><label>STUDENT ID</label><br> 
	  <input type='text' name='student' class='form-control' id='students' required readonly>
      <input type='hidden' name='teacher' class='form-control' value="<?php echo $_SESSION['teacher_id']; ?>">
	   </div>
</div>
    
 <?php 
echo "<div class='col-md-12'>              
      <div class='form-group'>
	  <input type='submit' value='Mark Attendance' name='submit' class='form-control btn-success'>
      </div></div>
	  </form>";





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