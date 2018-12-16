<?php
$eventid = @$_POST["eventid"];
$eventname = @$_POST["eventname"];
$userid = @$_POST["userid"];
$fullname = @$_POST["fullname"];
$package = @$_POST["package"];
    mysql_connect("localhost","root","") or die ('Error:' .mysql_error());
	mysql_select_db("charity system");
    $query = "select * from user_event where userid='$userid' and eventid='$eventid'"; /*this part yang akan validate username where kalau ada username yang dah exist that user takleh register*/
	$result = mysql_query($query);
	if (mysql_num_rows($result)==0){
	$query2 = "insert into user_event (eventid,eventname,userid,fullname,package) VALUES 
	('".$eventid."','".$eventname."','".$userid."', '".$fullname."','".$package."')";
	if (!mysql_query($query2))
			die( 'invalid query:' .mysql_error());
	else
	{
		echo '<script language="javascript" type="text/javascript">';
		echo 'alert("You have registered succesfully!");';
		echo 'window.location="user.php";';
		echo '</script>';
	}
	}
	else
	{
		?>
		<script type=text/javascript>
		alert("You can only register once!");
		window.location.assign('user.php');
		</script>
		<?php
	}	
?>



