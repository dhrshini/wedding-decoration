<?php
mysql_connect("localhost","root","") or die('Error:'.mysql_error());
mysql_select_db("charity system");
$query="Update event SET time = '".$_POST['time']."' WHERE eventid='".$_POST['eventid']."' ";
$result= mysql_query($query);
if(!$result)
{
	?>
		<script type=text/javascript>
		alert("Update failed! Please try again!");
		window.location.assign('updevent.php');
		</script>
		<?php
}
else
{ 
 echo '<script language="javascript" type="text/javascript">';
		echo 'alert("Event have been updated succesfully!");';
		echo 'window.location="admin.php";';
		echo '</script>';
}
?>