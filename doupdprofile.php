<?php
require ("config2.php");
//connect to MySQL
$link = mysql_connect ($host,$username,$password);
if (!$link)
{
	die ('Could not connect:' .mysql_error());
}
else
{
	//select which db
	$db_selected = mysql_select_db($db,$link);
	if(!$db_selected)
	{
		die ('Cannot use database:' .mysql_error());
	}
}
$query="Update register set password = '".$_POST['password']."',address = '".$_POST['address']."',state = '".$_POST['state']."',email = '".$_POST['email']."',mobileno = '".$_POST['mobileno']."' WHERE username='".$_POST['username']."'"; 
$result= mysql_query($query);
if(!$result)
{
    	echo '<script language="javascript" type="text/javascript">';
		echo 'alert("Update failed! Please try again");';
		echo 'window.location="update_user_process.php";';
        echo '</script>';	
}
else
{
   echo '<script language="javascript" type="text/javascript">';
		echo 'alert("Profile have been updated succesfully!");';
		echo 'window.location="user.php";';
		echo '</script>';
}
?>