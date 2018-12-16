<?php
$theme = @$_POST["theme"];
$package = @$_POST["package"];
$venue = @$_POST["venue"];
mysql_connect("localhost","root","") or die('Error:'.mysql_error());
mysql_select_db("charity system");
$query = "select * from event where theme='$theme' and package='$package'";/*this part yang akan validate date and address...cnt have two events on same date n address*/
	$result = mysql_query($query);
	if (mysql_num_rows($result)!=1){ //to check whther date n address tu dah exist ke belum
$query2 = "insert into event (theme,package,venue) VALUES ('".$theme."', '".$package."' , '".$venue."')";
	if (!mysql_query($query2))
			die( 'invalid query:' .mysql_error());
	else
	{
		echo '<script language="javascript" type="text/javascript">';
		echo 'alert("Event have been created succesfully!");';
		echo 'window.location="admin.php";';
		echo '</script>';
	}
	}
	else
	{
		?>
		<script type=text/javascript>
		alert("Venue and Date cannot overlap with other events! Event creation failed! Please try again!");
		window.location.assign('admin.php');
		</script>
		<?php
	}
?>
