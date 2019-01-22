<?php

    $con=new mysqli("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    $photos = $_POST["photos"];
    
    $qu="delete from Director_Media_Photo where did='$did' and photos='$photos'";

    $con->query($qu);
    
    echo "success";
    
?>

