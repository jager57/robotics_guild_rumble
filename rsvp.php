<?php 
$file = "list.txt"; 
$name = $_POST['name']+" "; 
$write = fopen("$file","a");  
fwrite($write,$name); 
fclose($write);
header('Location: https://jager57.github.io/robotics_guild_rumble');
exit;
?>
