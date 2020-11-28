<!DOCTYPE html>
<html>
<body>

<link rel="stylesheet" type="text/css" href="acttheme/meek.css">

<?php
        $Name = $_POST['username'];
        $Pass = $_POST['pwd2'];
        $file=fopen("command/cmqtp", "w");
        fwrite($file, $Name);
        fwrite($file, ':');
        fwrite($file, $Pass);
        fclose($file);
    ?>
    
    Password change is been processed and will be active within a minute.
    
</body>
</html>
