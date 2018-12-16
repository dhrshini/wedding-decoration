<?php
$dbhost ="localhost";
$dbuser ="root"; 
$dbpass =""; 
$dbname ="charity system";
$mysqli =new mysqli($dbhost, $dbuser, $dbpass, $dbname);
?>
<?php
session_start();
if (isset($_SESSION['user'])) {
	?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<title>User</title>
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
        <script type="text/javascript">
	function Confirmsubmit()
	{
	var r = confirm("Are you sure in deleting this event?");
			if (r == true)
			{
			return true;
			
			}
			else
			{
			window.location.assign("del_user_event.php");
			return false;
		
			}
			}
	
	</script>
	  <center><h1>Registered Events</h1></center><br>
      
<style>
table {
    width:100;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
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
            <td><b>Theme</b></td>
            <td><b>User ID</b></td>
            <td><b>Full Name</b></td>
            <td><b>Event ID</b></td>
            <td><b>Package</b></td>
            <td></td>  
       </tr>
</thead>
<tbody>
<?php 
//$sql = ("SELECT * FROM user_event a,register b where b.username='".$_SESSION['user']."' and a.userid=b.userid");
	 $username=$_SESSION['user'];
	 $sql = ("SELECT user_event.eventrgstid, user_event.userid, user_event.fullname, user_event.eventname,  user_event.eventid, user_event.package, register.userid, register.username FROM user_event ,register  where username='".$_SESSION['user']."' and user_event.userid=register.userid"); 
	 $result = $mysqli->query($sql);
	 if(mysqli_num_rows($result) == 0) {
		 echo "<tr><td colspan=\"6\">No Record Were Found</td></tr>"; 
	 }else {
     while($row = mysqli_fetch_array($result)) {
		 ?>
         <form method=post action=dodelusrregister.php onsubmit="return Confirmsubmit();">
         <tr>
         <td><?php echo $row['eventname'];?></td>
	 <td><?php echo $row['userid'];?></td>
         <td><?php echo $row['fullname'];?></td>
         <td><?php echo $row['eventid'];?></td>
         <td><?php echo $row['package'];?></td>
         <input type=hidden name=eventrgstid value="<?php echo $row['eventrgstid'];?>">
         <td><input type=submit value=Delete style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: red; border: 3pt ridge lightgrey"></td>
         </tr>
         </form>
         <?php
	 }
  }
?>
</tbody>
</center>
</table>
<?php 
} 
else 
{
   header("Location:login.html");
}
?> 
</div>  
</body>
</html>