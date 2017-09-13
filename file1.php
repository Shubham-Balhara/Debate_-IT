<?php
$file=fopen("file1.txt", "a");
$txt=$_POST["txt1"];
fwrite($file, $txt);
fwrite($file, "\n");
echo $txt;
fclose($file);
?>