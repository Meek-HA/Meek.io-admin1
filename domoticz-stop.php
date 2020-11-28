<?php 
  
    $myfile = fopen("command/domoticz-stop", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);

header("location:javascript://history.go(-1)");

?>