<?php
    
    $con = new mysqli("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    $uid = $_POST["uid"];
    $message = $_POST["message"];
       
    $query = "insert into Notification(did,uid,message) values ('$did','$uid','$message')";
    
    $con->query($query);
    
    if($query){
        print("Inserted");
    }else{
        print("Not Inserted");
    }
    
    
?>
