<?php
$name="";
$email="";
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$conn=new mysqli("x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","xco79bayaya6123v","or42rxd019m8nruh","cdyq2s9qbjxwba6j");
	$cmd="INSERT into collect value('$name','$email');";
	if (mysqli_query($conn, $cmd))
	{
		echo "Successfully";
	}
	else
	{
		echo "Not Saved";
	}
}

?> 