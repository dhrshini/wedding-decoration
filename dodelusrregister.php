<?php 
mysql_connect("localhost","root","") or die ('Error:' .mysql_error());
mysql_select_db("charity system");
$query="Delete from user_event  WHERE eventrgstid='".$_POST['eventrgstid']."' ";
$result= mysql_query($query);
if(!$result)
{
    	echo '<script language="javascript" type="text/javascript">';
		echo 'alert("Delete failed! Please try again");';
		echo 'window.location="del_user_event.php";';
        echo '</script>';	
}
else
{
   echo '<script language="javascript" type="text/javascript">';
		echo 'alert("Event have been deleted succesfully!");';
		echo 'window.location="user.php";';
		echo '</script>';
}
?>