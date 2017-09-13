<?php
$file=fopen("file3.txt", "a");
$txt=$_POST["txt3"];
fwrite($file, $txt);
fwrite($file, "\n");
echo $txt;
fclose($file);
?>