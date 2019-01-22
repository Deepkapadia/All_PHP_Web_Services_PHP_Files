<?php
    
    $con = new mysqli("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    $category = $_POST["category"];
    $subcategory = $_POST["subcategory"];
    $event_title = $_POST["event_title"];
    $last_date = $_POST["last_date"];
    $event_desc = $_POST["event_desc"];
    $img = $_POST["event_img"];
    
    define('UPLOAD_DIR', 'Event_Images/');

    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . uniqid() . '.png';
    $success = file_put_contents($file, $data);
    print $success ? $file : 'Unable to save the file.';
    
    
    $query = "insert into Events(did,category,subcategory,event_title,last_date,event_desc,event_img) values ('$did','$category','$subcategory','$event_title','$last_date','$event_desc','$file')";
    
    $con->query($query);
    
    if($query){
        print("Inserted");
    }else{
        print("Not Inserted");
    }
    
    
?>
