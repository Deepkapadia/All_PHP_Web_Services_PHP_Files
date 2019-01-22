<?php
    
    $con = new mysqli("localhost","root","","TalentTown");
    
    
    $did = $_POST["did"];
    $video_desc = $_POST["video_desc"];
    $img = $_POST["videos"];

    
    define('UPLOAD_DIR', 'Directors_Media/Videos/');

    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . uniqid() . '.mp4';
    $success = file_put_contents($file, $data);
    print $success ? $file : 'Unable to save the file.';
    
    
    $query = "insert into Director_Media_Video(did,video_desc,videos) values ('$did','$video_desc','$file')";
    
    $con->query($query);
    
    if($query){
        print("Inserted");
    }else{
        print("Not Inserted");
    }
    
    
?>
