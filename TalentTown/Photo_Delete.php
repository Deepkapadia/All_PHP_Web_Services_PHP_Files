<?php

    $con=new mysqli("localhost","root","","TalentTown");
    
    $uid = $_POST["uid"];
    $photos = $_POST["photos"];
    
    $qu="delete from User_Media_Photo where uid='$uid' and photos='$photos'";

    $con->query($qu);
    
    echo "success";
    
?>

