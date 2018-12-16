<?php
$username = @$_POST["username"];
$password = @$_POST["password"];
$fullname = @$_POST["fullname"];
$icno = @$_POST["icno"];
$address = @$_POST["address"];
$state = @$_POST["state"];
$email = @$_POST["email"];
$mobileno = @$_POST["mobileno"];
$theme = @$_POST["theme"];
mysql_connect("localhost","root","") or die ('Error:' .mysql_error()); //database connection
mysql_select_db("charity system");
$query = "select * from register where username= '$username'";/*this part yang akan validate username where kalau ada username yang dah exist that user cant use it anymore*/
	 $result = mysql_query($query);
	 if (mysql_num_rows($result)!=1){//a //!1 tat means data x exist
$query2 = "insert into register (username, password, fullname, icno, address, state, email, mobileno, theme) VALUES ('".$username."', '".$password."' , '".$fullname."', '".$icno."', '".$address."', '".$state."', '".$email."', '".$mobileno."','".$theme."')";
	if (!mysql_query($query2))
			die( 'invalid query:' .mysql_error());
	else
	{
		echo '<script language="javascript" type="text/javascript">';
		echo 'alert("You have registered succesfully!!!! Please login to continue the service");';
		echo 'window.location="login.html";';
		echo '</script>';

	}
	}//a
	else
	{
		?>
		<script type=text/javascript>
		alert("Username already exist! Registration failed! Please try again");
		window.location.assign('register.html');
		</script>
		<?php
	}
?>
