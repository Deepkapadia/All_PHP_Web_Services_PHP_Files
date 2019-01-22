<?php
    
    $con = new mysqli("localhost","root","","TalentTown");
    
    
    $uid = $_POST["uid"];
    $video_desc = $_POST["video_desc"];
    $img = $_POST["videos"];

    
    define('UPLOAD_DIR', 'Users_Media/Videos/');

    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . uniqid() . '.mp4';
    $success = file_put_contents($file, $data);
    print $success ? $file : 'Unable to save the file.';
    
    
    $query = "insert into User_Media_Video(uid,video_desc,videos) values ('$uid','$video_desc','$file')";
    
    $con->query($query);
    
    if($query){
        print("Inserted");
    }else{
        print("Not Inserted");
    }
    
    
?>
