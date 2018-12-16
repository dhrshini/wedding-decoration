<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
session_start();
if (isset($_SESSION['user'])) {//a
?>
<div id="header">
		<h1><a>Wedding Bells <span><hr width="67%"> Creative, elegant, professional design!<hr width="67%"> </span></a></h1>
		<ul id="navigation"><br><br>
        
			<li>
				<a href="admineventform.php">
  <img src="images/create-128.png" alt="create" title="Create Event" style="width:40px;height:40px;border:3;">
</a><!--https://www.iconfinder.com-->
			</li>
			<li>
				<a href="vieweventparticipant.php">
  <img src="images/view-128.png" alt="view" title="View Customers" style="width:40px;height:40px;border:3;">
</a>
			</li>
			<li>
				<a href="updateevent.php">
  <img src="images/update-128.png" alt="update" title="Update Event" style="width:40px;height:40px;border:3;">
</a>
			</li>
			<li>
				<a href="delevent.php">
  <img src="images/delete-128.png" alt="delete" title="Delete Event" style="width:40px;height:40px;border:3;">
</a>
			</li>
			<li>
				<a href="viewvolunteer.php">
  <img src="images/view-128.png" alt="view" title="View Customers" style="width:40px;height:40px;border:3;">
</a>
			</li>
            <li>
				<a href="logout.php">
  <img src="images/logout-128.png" alt="logout" title="Logout" style="width:40px;height:40px;border:3;">
</a><!--https://www.iconfinder.com-->
			</li>
		</ul>
	</div>
    
	<!--<div id="body"><br>-->
        <br><br>
        <MARQUEE BEHAVIOR=SLIDE BGCOLOR="#bb0d15">Welcome to Admin's Homepage!</MARQUEE><br><br>
       
	<!--</div>-->
	<div id="footer">
		<div>
			<span>Dharshini Creation, Jalan Ampang, KL</span>
			<p>
				&copy; 2018 by Dharshini Vijayanathan. All rights reserved.
		</div>
		<div id="connect">
			<a href="https://www.facebook.com" id="facebook" target="_blank">Facebook</a>
			<a href="https://twitter.com" id="twitter" target="_blank">Twitter</a>
			<a href="https://www.google.com" id="googleplus" target="_blank">Google&#43;</a>
		</div>
	</div>
<?php
} //a
else 
{
   header("Location:  login.html");
}
?>
</body>
</html>