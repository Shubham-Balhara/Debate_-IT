<?php
include 'db_connection.php';
$conn=opencon();
$name=$_POST['username'];
$user=$_POST['inname'];
$mob=$_POST['mobile'];
$gen=$_POST['gender'];
$pass=$_POST['pass1'];
$pass1=$_POST['pass2'];
if ($pass===$pass1) {
		$sql="INSERT INTO logindata(name,user,mobile,gender,password) VALUES('$name','$user','$mob','$gen','$pass')";
if ($conn->query($sql)===true) {
	echo "Registration success";
	echo "<script type='text/javascript'>location.href = 'home.html';</script>";
}
else{
	echo "failed";
}
}
else{
	echo "Password didn't match";
}

$conn->close();
?>