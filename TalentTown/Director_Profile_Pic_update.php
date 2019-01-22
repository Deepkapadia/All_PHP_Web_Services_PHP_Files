<?php

    $con=new MySQLi("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    $img = $_POST["dimage"];
    
    define('UPLOAD_DIR', 'Director_Images/');

    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . uniqid() . '.png';
    $success = file_put_contents($file, $data);
    print $success ? $file : 'Unable to save the file.';
    



    
    $qu="update Director_Registertbl set dimage='$file' where did='$did'";

    $con->query($qu);
    
    echo "success";
    
?>

