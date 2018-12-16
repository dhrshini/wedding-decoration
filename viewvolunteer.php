<?php
session_start();
if (isset($_SESSION['user'])) {
?>
    <form action="viewvolunteer2.php" method="post" >
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
<center><h1>Customers</h1></center>
<style>
table {
    width:200;
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
            <td><b>User ID</b></td>
            <td><b>Username</b></td>
        </tr>    
</thead>
<tbody>
<tr>



<?php
			mysql_connect("localhost","root","") or die ('Error:' .mysql_error());
			mysql_select_db("charity system");
			
			$query = "select * from register order by userid";
			$result = mysql_query($query);
			$counter=0;
				if(mysql_num_rows($result) == 0)
					echo"not record found in the database";
				
				else
				{
					while($row=mysql_fetch_array($result,MYSQL_BOTH)){//a
					$counter++;
				
					
				
?>

<td><?php echo "$counter"?></td>
<td><input type="radio" name="userid" value="<?php echo $row['userid']; ?>" required><?php echo $row['userid']; ?></td>
<td><?php echo $row['username'];?></td>
</tr>

<?php
					}//a
				}							
?>	

<td></td><td></td><td><input type=submit value=Display name=action style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: green; border: 3pt ridge lightgrey"></td> <!--value=Display bcs when clicked it will execute the display coding-->
<input type=hidden name=action value=display >
</tbody>
</center>
</table>
</form>
<?php
} 
else 
{
   header("Location:  login.html");
}
?>
</div>       
</body>
</html>