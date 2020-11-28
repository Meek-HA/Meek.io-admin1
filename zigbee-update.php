<?php 
  
    $myfile = fopen("command/zigbee-update", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);

header("location:javascript://history.go(-1)");

?>