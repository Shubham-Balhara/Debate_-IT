<?php
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "sbalhara";
 $dbpass = "12345678";
 $db = "data1";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>