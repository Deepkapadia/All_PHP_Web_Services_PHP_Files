<?php

    $con=new MySQLi("localhost","root","","TalentTown");
    
    $demail = $_POST["demail"];
    $dpass = $_POST["dpass"];
    

    
    $qu="update Director_Registertbl set dpass='$dpass' where demail='$demail'";

    $con->query($qu);
    
    echo "success";
    
?>

