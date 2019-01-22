<?php
    
    $con = new mysqli("localhost","root","","TalentTown");
    
    
    $uid = $_POST["uid"];
    $photo_desc = $_POST["photo_desc"];
    $img = $_POST["photos"];

    
    define('UPLOAD_DIR', 'Users_Media/Photos/');

    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . uniqid() . '.png';
    $success = file_put_contents($file, $data);
    print $success ? $file : 'Unable to save the file.';
    
    
    $query = "insert into User_Media_Photo(uid,photo_desc,photos) values ('$uid','$photo_desc','$file')";
    
    $con->query($query);
    
    if($query){
        print("Inserted");
    }else{
        print("Not Inserted");
    }
    
    
?>
