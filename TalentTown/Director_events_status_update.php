<?php

    $con=new MySQLi("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    $eid = $_POST["eid"];
    $uid = $_POST["uid"];
    $d_status = $_POST["d_status"];
    

    
    $qu="update Applied_Events set d_status='$d_status' where did = '$did' and eid = '$eid' and uid = '$uid'";

    $con->query($qu);
    
    echo "success";
    
?>

