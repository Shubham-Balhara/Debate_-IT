<?php
$file=fopen("file2.txt", "a");
$txt=$_POST["txt2"];
fwrite($file, $txt);
fwrite($file, "\n");
echo $txt;
fclose($file);
?>