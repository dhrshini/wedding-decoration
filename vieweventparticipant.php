<?php
$dbhost ="localhost";
$dbuser ="root"; 
$dbpass =""; 
$dbname ="charity system";
$mysqli =new mysqli($dbhost, $dbuser, $dbpass, $dbname); //databse connection
?>
<?php
session_start();
if (isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="header">
		<h1><a>Wedding Bells <span><hr width="67%"> Creative, elegant, professional design!<hr width="67%"> </span></a></h1>
	</div>
		<div id="body">  
        <p id="myP"><img src="images/back-128.png" type="button" title="Back" alt="reset" style="width:40px;height:40px;         border:3;"onClick="history.go(-1);return true;" onmouseover="myFunction();"></p>
        
        <script>
        function myFunction() {
        document.getElementById("myP").style.cursor = "pointer";
        }
        </script>     
	  <center><h1>Booking's History</h1></center>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>

<table id="t01">
<center>
<thead>
        <tr>
            <td><b>No</b></td>
            <td><b>Theme</b></td>
            <td><b>User Id</b></td>
            <td><b>Full Name</b></td>
            <td><b>Event ID</b></td>
            <td><b>Package</b></td>
            
       </tr>
</thead>
<tbody>
<?php

	 $username=$_SESSION['user'];
     $sql = ("SELECT eventid,eventname,userid,fullname,eventid,package FROM user_event order by eventid ");
	 $result = $mysqli->query($sql);
	 $counter = 1;
	 if(mysqli_num_rows($result) == 0) {
		 echo "<tr><td colspan=\"6\">No Record Were Found</td></tr>"; 
	 }else {
     while($row = mysqli_fetch_array($result)) {
		 ?>
      <tr>
	  <td><?php echo "$counter"?></td>
          <td><?php echo $row['eventname'];?></td>
          <td><?php echo $row['userid'];?></td>
	  <td><?php echo $row['fullname'];?></td>
          <td><?php echo $row['eventid'];?></td>
	  <td><?php echo $row['package'];?></td>
	 
	  </tr>
      <?php
	  $counter++;
       }
    }
?>
</tbody>
</center>
</table>
</div>
<?php
} 
else 
{
   header("Location:  login.html");
}
?>
</body>
</html>