<?php //credit to fazal
  session_start();
  if (isset($_SESSION['user'])&&($_POST["action"]== "display")){
	
	mysql_connect("localhost","root","") or die ('Error:' .mysql_error());
	mysql_select_db("charity system");
			
				
			
				$userid = @$_POST["userid"];
				$query = ("SELECT * FROM register where userid='".$_POST["userid"]."'");
				$result =mysql_query($query);
				$row=mysql_fetch_array($result, MYSQL_BOTH);
				
				
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
 <center><h1>Customer Details</h1></center>
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
 <thead>
         <tr>    
            <td><b>Name</b></td>
            <td><b>IC No</b></td>
            <td><b>Address</b></td>
            <td><b>State</b></td>
            <td><b>Email</b></td>
            <td><b>Mobile No</b></td>
        </tr>  
 </thead>     
 <tbody>
 <td><?php echo $row['fullname']; ?> </td>
 <td><?php echo $row['icno']; ?>  </td>
 <td><?php echo $row['address']; ?>  </td>
 <td><?php echo $row['state']; ?> </td>
 <td><?php echo $row['email']; ?> </td>
 <td><?php echo $row['mobileno']; ?>  </td>
 </tbody>
 </table>
<?php
} else {
   header("Location: login.html");
}
?>

</div>       
</body>
</html>

