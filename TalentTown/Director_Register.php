<?php
    
    $con = new mysqli("localhost","root","","TalentTown");
    
    $dname = $_POST["dname"];
    $demail = $_POST["demail"];
    $dpass = $_POST["dpass"];
    $dmno = $_POST["dmno"];
    $dage = $_POST["dage"];
    $dgender= $_POST["dgender"];
    $dcity= $_POST["dcity"];
    $dcat_status = $_POST["dcat_status"];
    $img = $_POST["dimage"];
    
    define('UPLOAD_DIR', 'Director_Images/');

    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . uniqid() . '.png';
    $success = file_put_contents($file, $data);
    print $success ? $file : 'Unable to save the file.';
    
    
    $query = "insert into Director_Registertbl(dname,demail,dpass,dmno,dage,dgender,dcity,dimage,dcat_status) values ('$dname','$demail','$dpass','$dmno','$dage','$dgender','$dcity','$file','$dcat_status')";
    
    $con->query($query);
    
    if($query){
        print("Inserted");
    }else{
        print("Not Inserted");
    }
    
    
?>
