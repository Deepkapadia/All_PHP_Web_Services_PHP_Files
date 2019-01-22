<?php

    $con=new MySQLi("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    $eid = $_POST["eid"];
    $uid = $_POST["uid"];
    $u_status = $_POST["u_status"];
    

    
    $qu="update Applied_Events set u_status='$u_status' where did = '$did' and eid = '$eid' and uid = '$uid'";

    $con->query($qu);
    
    echo "success";
    
?>

