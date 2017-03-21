<?php 
$file = "list.txt"; 
$name = $_POST['name']; 
$write = fopen("$file","a");  
fwrite($write,$name); 
fclose($write);
exit;
?>
