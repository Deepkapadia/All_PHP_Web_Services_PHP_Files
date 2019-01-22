<?php

    $con=new mysqli("localhost","root","","TalentTown");
    
    $uid = $_POST["uid"];
    $videos = $_POST["videos"];
    
    $qu="delete from User_Media_Video where uid='$uid' and videos='$videos'";

    $con->query($qu);
    
    echo "success";
    
?>

