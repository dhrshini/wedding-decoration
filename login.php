<?php //credit to fazal and syamil
	mysql_connect("localhost","root","") or die ('ERROR:' .mysql_error());
	mysql_select_db("charity system");
	if($_POST["a"] == 'admin') //if user select admin button
	{ //1
	$query = "SELECT * From admin WHERE username='".$_POST["username"]."'";
	$result = mysql_query($query);
	if(!$result)
		die("Invalid Query:".mysql_error());
	else
		if(mysql_num_rows($result)==0) //check database to see ada data ke x
		{
		?>
		<script type=text/javascript>
		alert("Username doesnt exist!");
		window.location="login.html";
		</script>
		<?php
		}
		else
		{
			$row = mysql_fetch_array($result, MYSQL_BOTH); //mysql both Specifies what type of array that should be produced (associative,numeric)
			if($row["password"]==$_POST["password"])
			{   
			    session_start();
				$_SESSION['user'] = $row['username'];
			    echo'<script>window.alert("Welcome to Admin`s page");window.location.href="admin.php";</script>';
			}
			?>
		    <script type=text/javascript>
			alert ("Wrong password entered. Please enter again.");
			window.location="login.html";
			</script>
			<?php
		}
		}//1
		else
		{//2	
				$query = "Select * from register where username='".@$_POST["username"]."'";
				$result = mysql_query($query);
				if(!$result)
					die("Invalid query: ".mysql_error());
				else
					if(mysql_num_rows($result)==0)
					{
						    ?>
						    <script type=text/javascript>
							alert ("Username doesnt exist");
							window.location="login.html";
						    </script>
							<?php								
					}
					else
					{							
						$row = mysql_fetch_array($result, MYSQL_BOTH);
						if($row["password"]==$_POST["password"])
						{
									session_start();
							$_SESSION["user"] = $_POST["username"];
							echo'<script>window.alert("Welcome to Customer`s page");window.location.href="user.php";                            </script>';
						}
						else
							?>
							<script type=text/javascript>
								alert ("Wrong password entered. Please enter again.");
								window.location="login.html";
							</script>
							<?php
					}
		}//2
?>