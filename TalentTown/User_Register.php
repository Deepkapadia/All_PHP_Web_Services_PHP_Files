<?php
    
    $con = new mysqli("localhost","root","","TalentTown");
    
    $uname = $_POST["uname"];
    $uemail = $_POST["uemail"];
    $upass = $_POST["upass"];
    $umno = $_POST["umno"];
    $uage = $_POST["uage"];
    $ugender = $_POST["ugender"];
    $ucity = $_POST["ucity"];
    $ucat_status = $_POST["ucat_status"];
    $img = $_POST["uimage"];

    
    define('UPLOAD_DIR', 'User_Images/');

    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . uniqid() . '.png';
    $success = file_put_contents($file, $data);
    print $success ? $file : 'Unable to save the file.';
    
    
    $query = "insert into User_Registertbl(uname,uemail,upass,umno,uage,ugender,ucity,uimage, ucat_status) values ('$uname','$uemail','$upass','$umno','$uage','$ugender','$ucity','$file','$ucat_status')";
    
    $con->query($query);
    
    if($query){
        print("Inserted");
    }else{
        print("Not Inserted");
    }
    
    
?>
