<?php 
  
    $myfile = fopen("command/zigbee2mqtt-stop", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);

header("location:javascript://history.go(-1)");

?>
