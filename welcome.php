<?php
// Create connection
$con=mysqli_connect("localhost","root","","mysql");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//When it's a new user - we will add the new users.
if ($_POST["usertype"] == "new")
{
	echo "<h1>Welcome To The Lobby Area ".$_POST["name"]."</h1>";
	$sql="INSERT INTO users (Name, Username, Password) VALUES ('$_POST[name]','$_POST[username]','$_POST[password]')";
	if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  	}
	echo "1 record added";
}

//when it's a old user - we will just load his credentials.
if ($_POST["usertype"] == "old")
{
	$sql="SELECT * FROM users where username = '$_POST[username]'";
	$result = mysqli_query($con,$sql);
	$num_rows = mysqli_num_rows($result);

	if ($num_rows == 0)
	{
		echo "No Such User";
	}
	else
	{
		$row = mysqli_fetch_array($result);
		$name = $row['Name'];
		$password = $row['Password'];
		
		if ($password == $_POST["password"])
		{
			echo "<h1>Welcome To The Lobby Area ".$name."</h1>";
		}
		else
		{
			echo "Bad Password";
		}
	}


}


mysqli_close($con);


?>
