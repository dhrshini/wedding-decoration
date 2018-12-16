<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
session_start();
if (isset($_SESSION['user'])) {
?>

	<div id="header">
		<h1><a>Wedding Bells <span><hr width="67%"> Creative, elegant, professional design!<hr width="67%"></span></a></h1>
	</div>
<?php
$dbhost ="localhost";
$dbuser ="root"; 
$dbpass =""; 
$dbname ="charity system";
$mysqli =new mysqli($dbhost, $dbuser, $dbpass, $dbname); //a
?>
  <?php
include('config.php'); //b

$id=$_POST['eventid']; /*to update selected event*/

$result = $mysqli->query("SELECT * FROM event where eventid='$id'"); //a
while($row = mysqli_fetch_array($result))

{

$eventname=$row['eventname']; //b
$address=$row['address'];
$time=$row['time'];
$date=$row['date'];
}
?>
<div id="body">
<script type="text/javascript">
	function Confirmsubmit()
	{
	var r = confirm("Are you sure?");
			if (r == true)
			{
			return true;
			
			}
			else
			{
			window.location.assign("updateevent.php");
			return false;
		
			}
			}
	
	</script>
		<div class="content">
        <p id="myP"><img src="images/back-128.png" type="button" title="Back" alt="reset" style="width:40px;height:40px;         border:3;"onClick="history.go(-1);return true;" onmouseover="myFunction();"></p>
        
        <script>
        function myFunction() {
        document.getElementById("myP").style.cursor = "pointer";
        }
        </script>
        <center><h1>Update Event Form</h1></center>
        <form action="doupd.php" method="post" name ="adminform" onsubmit="return Confirmsubmit();">
<input type="hidden" name="eventid" value="<?php echo $id; ?>">
<table align="center">


<tr>
<td>Event Name</td>
<td><input type="text" name="eventname" size="30" minlength="5"  autofocus required placeholder="eventname" 
pattern="^[A-Za-z ]+$" title="Space and Letters ONLY" value="<?php echo $eventname ;?>"disabled><input type=hidden name="eventname" value="<?php echo $post['eventname'] ;?>"></td> <!--Miss Nashrah 10/1-->
</tr>

<tr>
<td>Address</td>
<td><input type="text" name="address" size="30" minlength="5" required placeholder="address"value="<?php echo $address ;?>"disabled><input type=hidden name="address" value="<?php echo $post['address'] ;?>"></td>
</tr>

<tr>
<td>Date</td>
<td><input type="date" name="date" size="30" min="2017-01-31" max="2018-12-31" required placeholder="date" value="<?php echo $date ;?>"disabled><input type=hidden name="date" value="<?php echo $post['date'] ;?>"></td>
</tr>

<tr>
<td>Time</td>
<td><input type="time" name="time" size="30" required placeholder="time" pattern="^([0-1][0-9]|2[0-3]):([0-5][0-9])$" 
value="<?php echo $time ;?>"></td>
</tr>

<tr>
<td colspan="2"><input type="submit" value="Update" name="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: yellow; border: 3pt ridge lightgrey"></td>
</tr>
</table>
</form>
		</div>
	</div>
<?php
} else {
   header("Location:  login.html");
}
?>
</body>
</html>
