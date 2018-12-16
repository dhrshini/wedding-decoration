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
	//echo 'connect successfully';
	//select which db
	$db_selected = mysql_select_db($db,$link);
	if(!$db_selected)
	{
		die ('Cannot use database:' .mysql_error());
	}
}
$query="Delete from event, user_event 
        using event, user_event 
		WHERE event.eventid=user_event.eventid and 
		user_event.eventid ='".$_POST['eventid']."'"; /*Miss Nashrah 13/1*/	
/*$query="Delete from event WHERE eventid ='".$_POST['eventid']."'"; (old coding)*/
$result= mysql_query($query);
if(!$result)
{
    	echo '<script language="javascript" type="text/javascript">';
		echo 'alert("Delete failed! Please try again");';
		echo 'window.location="delevent.php";';
                echo '</script>';	
}
else
{
   echo '<script language="javascript" type="text/javascript">';
		echo 'alert("Event have been deleted succesfully!");';
		echo 'window.location="admin.php";';
		echo '</script>';
}
?>
