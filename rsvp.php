<?php 
$file = "list.txt"; 
$name = $_POST['name']+" "; 
$write = fopen("$file$ex","a");  
fwrite($write,$name); 
fclose($write);
header('Location: https://www.google.com');
exit;
?>
