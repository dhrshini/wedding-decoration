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
    <?php
    $username=$_SESSION['user'];
	$id=$_POST['eventid'];
     $sql = ("SELECT event.eventid, event.theme, event.package,  register.userid, register.fullname, register.username FROM event, register where eventid='$id' and username='".$_SESSION['user']."'" );
	 $result = $mysqli->query($sql);
	 if(mysqli_num_rows($result) == 0) {
		 echo "<tr><td colspan=\"6\">No Record Were Found</td></tr>"; 
	 }else 
	 {//a
     while($row = mysqli_fetch_array($result)) { //b
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
        <script type="text/javascript">
	function Confirmsubmit()
	{
	var r = confirm("Are you sure in registering to this package?");
			if (r == true)
			{
			return true;
			
			}
			else
			{
			window.location.assign("user_register_event.php");
			return false;
		
			}
			}
	
	</script>
   
   <center><h1>Register Event</h1></center>
    <form method="post" action="dousrregister.php" onsubmit="return Confirmsubmit();">
    <table cellpadding="2" width="58%" align="center">
    
    <tr>
    <td>Eventid</td>
    <td><input type="text" name="eventid" size="30" required placeholder="eventid"  value="<?php echo $row['eventid'] ;?>"    disabled><input type=hidden name="eventid" value="<?php echo $row['eventid'] ;?>" >
    </td>
    </tr>
    
    <tr>
    <td>Eventname</td>
    <td><input type="text" name="eventname" size="30"  value="<?php echo $row['theme'] ;?>" disabled>
    <input type=hidden name="eventname" value="<?php echo $row['theme'] ;?>" >
    </td>
    </tr>
    
    <tr>
    <td>Package</td>
    <td><input type="text" name="package" size="30"  value="<?php echo $row['package'] ;?>" disabled>
    <input type=hidden name="package" value="<?php echo $row['package'] ;?>" >
    </td>
    </tr>
    
    <tr>
    <td>Userid</td>
    <td><input type="text" name="userid" size="30" value="<?php echo $row['userid'] ;?>" disabled>
    <input type=hidden name="userid" value="<?php echo $row['userid'] ;?>" >
    </td>
    </tr>
    
    <tr>
    <td>Full Name</td>
    <td><input type="text" name="fullname" size="30" value="<?php echo $row['fullname'] ;?>" disabled>
    <input type=hidden name="fullname" value="<?php echo $row['fullname'] ;?>" >
    </td>
    </tr>

    <tr>
    <td><input type="submit" value="Register" name="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: green; border: 3pt ridge lightgrey"></td>
    </tr>
    </table>
    </form>
    </div>
    </div>
 <?php 
	 }//b
   }//a
} 
else
 {
   header("Location:  user.php");
}
?>
</body>
</html>
