<?php

    $con=new MySQLi("localhost","root","","TalentTown");
    
    $uid = $_POST["uid"];
    $img = $_POST["uimage"];
    
    define('UPLOAD_DIR', 'User_Images/');

    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . uniqid() . '.png';
    $success = file_put_contents($file, $data);
    print $success ? $file : 'Unable to save the file.';
    



    
    $qu="update User_Registertbl set uimage='$file' where uid='$uid'";

    $con->query($qu);
    
    echo "success";
    
?>

