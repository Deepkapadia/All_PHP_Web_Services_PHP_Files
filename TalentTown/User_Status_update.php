<?php

    $con=new MySQLi("localhost","root","","TalentTown");
    
    $uid = $_POST["uid"];
    $ucat_status = $_POST["ucat_status"];
    

    
    $qu="update User_Registertbl set ucat_status='$ucat_status' where uid='$uid'";

    $con->query($qu);
    
    echo "success";
    
?>

