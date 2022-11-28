<?php
    extract($_REQUEST);
    $file=fopen("information.txt","w");
    fwrite($file,"Name: ");
    fwrite($file, $name ."\n");
    fwrite($file,"Email: ");
    fwrite($file, $mail ."\n");
    fwrite($file,"Phone Number: ");
    fwrite($file, $phone ."\n");
    fclose($file);
    header("location: Web.html");
 ?>