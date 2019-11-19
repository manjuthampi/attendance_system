<?php
$subject_id=$_REQUEST['subject_id'];
//$subject_id=7;
$link = mysql_connect('localhost','root',''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('attendance');
$query="SELECT batch FROM tbl_subject WHERE id ='$subject_id'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
setcookie("batch","$row[batch]", time() + (300), "/");

?>
<div class='form-group' id='batch'><label>BATCH</label><br>
<input type="text" value="<?php echo $row['batch'];?>" name="batch_id" id="batch" class="form-control" readonly="readonly" required="required">

