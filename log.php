<?php
include 'db_connection.php';
$conn=opencon();
$dbname=$_POST["user"];
$dbpass=$_POST["pass"];
$sql = "SELECT user,password from logindata";
$result = $conn->query($sql);
$t=0;
$array = array();
$arrayp= array();
$z=0;
while($row = $result->fetch_assoc()) {
         $array[$t] = $row["user"];
         $arrayp[$t] = $row["password"]  ;
         $t++;}
while ($t--) {
	if ($array[$t]==$dbname&&$arrayp[$t]==$dbpass) {
		echo '<div style="background-color:blue;padding:5px"><center><h2 >Logged In Successfully</h2></center></div>';
		echo "<script type='text/javascript'>location.href = 'home.html';</script>";
		$z=1;
	}
}
if ($z==0) {
	echo '<div style="background-color:blue;padding:5px"><center><h2 >Logged Failed.</h2></center></div>';
		echo "<script type='text/javascript'>location.href = 'index.html';</script>";
}
$conn->close();
?>