<?php
$dbhost ="localhost";
$dbuser ="root"; 
$dbpass =""; 
$dbname ="charity system";
$mysqli =new mysqli($dbhost, $dbuser, $dbpass, $dbname); //MySQLi Extension (MySQL Improved) is a driver used in the PHP to provide an interface with MySQL databases. (orang tengah)
?>
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
     <?php 
	 $username=$_SESSION['user'];
     $sql = ("SELECT * FROM `register`  WHERE username='".$username."' ") ;
	 $result = $mysqli->query($sql);
	 if(mysqli_num_rows($result) == 0) {
		 echo "<tr><td colspan=\"6\">No Record Were Found</td></tr>"; 
	 }else {//1
     while($post = mysqli_fetch_array($result)) { //2
	 ?>
	
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
	var r = confirm("Are you sure?");
			if (r == true)
			{
			return true;
			
			}
			else
			{
			window.location.assign("update_user_process.php");
			return false;
		
			}
			}
	
	</script>
    <center><h1>Edit Profile</h1></center>
    <form method="post" action="doupdprofile.php" onsubmit="return Confirmsubmit();">
    <table cellpadding="2" width="58%" align="center">
    
    
    
    <tr>
    <td>User Name</td>
    <td><input type="text" name="username" size="30" required placeholder="Username" value="<?php echo $post['username'];    ?>"disabled><input type=hidden name="username" value="<?php echo $post['username'] ;?>">
    </td>
    </tr>
    
    <tr>
    <td>Password</td>
    <td><input type="text" name="password" size="30" value="<?php echo $post['password'] ;?>" required 
    placeholder="Password"</td>
    </tr>
  
    <tr>
    <td>Address</td>
    <td><input type="text" name="address" size="30" minlength="10"  required placeholder="Address" 
    value="<?php echo $post['address'] ;?>"></td>
    </tr>
    
    <tr>
	<td>State</td>
	<td><select name="state" required>
	<option value=><?php echo $post['state'] ;?></option>
	<option value="Selangor">SELANGOR</option>
	<option value="Kedah">KEDAH</option>
	<option value="Kelantan">KELANTAN</option>
	<option value="Perak">PERAK</option>
	<option value="Terengganu">TERENGGANU</option>
	<option value="Negeri Sembilan">NEGERI 9</option>
	<option value="Johor">JOHOR</option>
	<option value="Pahang">PAHANG</option>
	<option value="Melaka">MELAKA</option>
	<option value="Perlis">PERLIS</option>
	<option value="Penang">PENANG</option>
	<option value="Sabah">SABAH</option>
	<option value="Sarawak">SARAWAK</option>
	<option value="Wilayah Persekutuan">WILAYAH PERSEKUTUAN</option>
	</select></td>
    </tr>
    
    <tr>
    <td>Email</td>
    <td><input type="email" name="email" size="30" value="<?php echo $post['email'] ;?>" required placeholder="Email"       title="XXXX@XXX.XXX"></td>
    </tr>
    
    <tr>
    <td>Mobile No</td>
    <td><input type="int" name="mobileno" size="30" value="<?php echo $post['mobileno'] ;?>" required placeholder="Mobile Number" pattern="^\d{10}$" title="Enter your mobile number without - & alphabets"></td>
    </tr><!--http://www.w3resource.com/javascript/form/phone-no-validation.php--></td>
    </tr>
    
    <tr>
    <td><input type="submit" value="Update" name="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: yellow; border: 3pt ridge lightgrey"></td>
    </tr>
    </table>
    </form>
    </div>
<?php     
     }//2
  }	//1
} 
else 
{
   header("Location:  user.php");
}
?>

</body>
</html>