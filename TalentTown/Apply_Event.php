<?php
    
    $con = new mysqli("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    $uid = $_POST["uid"];
    $eid = $_POST["eid"];
    $u_status = $_POST["u_status"];
    $d_status = $_POST["d_status"];
    
    
    $query = "insert into Applied_Events(did,uid,eid,u_status,d_status) values ('$did','$uid','$eid','$u_status','$d_status')";
    
    $con->query($query);
    
    if($query){
        print("Inserted");
    }else{
        print("Not Inserted");
    }
    
    
?>
