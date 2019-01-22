<?php

    $con=new MySQLi("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    $dcat_status = $_POST["dcat_status"];
    

    
    $qu="update Director_Registertbl set dcat_status='$dcat_status' where did='$did'";

    $con->query($qu);
    
    echo "success";
    
?>

