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
if (isset($_SESSION['user'])) {
?>
	<div id="header">
		<h1><a>Wedding Bells <span><hr width="67%"> Creative, elegant, professional design!<hr width="67%"> </span></a></h1>
	</div>
    
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
			window.location.assign("admineventform.php");
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
        </script> <!--http://www.computerhope.com/issues/ch000317.htm-->
        
        <center><h1>Create Event Form</h1></center>
        <form action="adminform.php" method="post" name ="adminform" onsubmit="return Confirmsubmit();">
        <table cellpadding="2" width="58%" align="center">

<tr>
<td colspan="2">
<center></center>
</td>
</tr>

<tr>
<td>Theme</td>
<td>
<input type="radio" name="theme" value="Malay" size="10">Malay
<input type="radio" name="theme" value="Chinese" size="10">Chinese
<input type="radio" name="theme" value="Indian" size="10">Indian</td>
</tr>

<tr>
<td>Package</td>
<td>
<input type="radio" name="package" value="A (RM 20000)" size="10">A (RM 20000)
<input type="radio" name="package" value="B (RM 10000)" size="10">B (RM 10000)
<input type="radio" name="package" value="C (RM 5000) " size="10">C (RM 5000)
</td>
</tr>

<tr>
<td>Venue</td>
<td>
<input type="radio" name="venue" value="A" size="10">A
<input type="radio" name="venue" value="B" size="10">B
<input type="radio" name="venue" value="C" size="10">C
</td>
</tr>




<tr>
<td><input type="reset" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: red; border: 3pt ridge lightgrey"></td>
<td colspan="2"><input type="submit" value="Create" name="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: green; border: 3pt ridge lightgrey"></td>
</tr>
</table>
</form>

<td><center>test</center></td>
		</div>
	</div>
	
     <?php
}else {
   header("Location:  login.html");
}
?>
</body>
</html>