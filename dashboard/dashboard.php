<?php
error_reporting(0);
$status=$_REQUEST['status'];
if ($status == "logout")
{
    session_start();
    session_unset();
    session_destroy();
	header("location:../login/login.php");
}
?>
<?php
include("../common/menu.php");
	
?>


    <style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
</style>

<style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#FFECF4;
padding:10px;	
}


#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#F36;
padding:10px;	
}
.table
{
margin-bottom:10px;
background:#E6F4FF;	
}
.sep
{
height:30px;
background:#666;	
}
</style>
       


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                                             
                            </div>
                            <div class="content all-icons">
                                <div class="row">
                                                            
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../student/select.php">    <div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="STUDENT">
                                    </div></a>
                                  </div>
                                  
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../teacher/select.php">    <div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="TEACHER">
                                    </div></a>
                                  </div>
                                  
                                
                                                            
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../subject/select.php">    <div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="SUBJECT">
                                    </div></a></div>
                                 
                                   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../leave/select.php">    <div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="LEAVE">
                                    </div></a>
                                  </div>
                                 
                                   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../batch/select.php">    <div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="BATCH">
                                    </div></a>
                                  </div>
                                        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../leave/select.php">    <div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="DISCUSSION FORUM">
                                    </div></a>
                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../fingerprint/select.php">    <div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="FINGERPRINT">
                                    </div></a>
                                </div>
                                <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../event/select.php">    <div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="EVENTS">
                                    </div></a>
                                </div>

<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../report/report.php"><div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="ATTENDANCE REPORT">
                                 </div></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                   
                </nav>
                <p class="copyright pull-right">
                   
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	

</html>
