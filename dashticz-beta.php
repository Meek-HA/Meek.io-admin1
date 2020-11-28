<?php 
  
    $myfile = fopen("command/dashticz-beta", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);

header("location:javascript://history.go(-1)");

?>