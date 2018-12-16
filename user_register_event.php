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
        
  <center><h1>Event</h1></center>
<style>
table {
    width:100;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
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
            <td><b>Package</b></td>
            <td><b>Venue</b></td>
            <td></td> 
       </tr>
</thead>
<?php
	 $username=$_SESSION['user'];
     $sql = ("SELECT * FROM `event` ") ;
	 $result = $mysqli->query($sql);
	  $counter=1;
	 if(mysqli_num_rows($result) == 0) {
		 echo "<tr><td colspan=\"6\">No Record Were Found</td></tr>"; 
	 }else {
     while($row = mysqli_fetch_array($result)) {
	 ?> 
	 <form method=post action=registerusr.php>
     <tr>
     <td><?php echo "$counter"?></td>
	 <td><?php echo $row['theme'];?> </td>
	 <td><?php echo $row['package'];?></td>
	 <td><?php echo $row['venue']; ?></td>
<input type=hidden name=eventid value="<?php echo $row['eventid'];?>">
<td><input type=submit value=Register style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: green; border: 3pt ridge lightgrey"></td></tr></form>
<?php
$counter++;
     }
  }
?>
</center>
</table>

<?php
} else {
   header("Location:  user.php");
}
?> 
</div>   
</body>
</html>