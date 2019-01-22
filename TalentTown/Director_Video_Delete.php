<?php

    $con=new mysqli("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    $videos = $_POST["videos"];
    
    $qu="delete from Director_Media_Video where did='$did' and videos='$videos'";

    $con->query($qu);
    
    echo "success";
    
?>

