<?php

    $con=new MySQLi("localhost","root","","TalentTown");
    
    $uemail = $_POST["uemail"];
    $upass = $_POST["upass"];
    

    
    $qu="update User_Registertbl set upass='$upass' where uemail='$uemail'";

    $con->query($qu);
    
    echo "success";
    
?>

