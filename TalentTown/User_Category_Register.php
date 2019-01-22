<?php
    
    $con = new mysqli("localhost","root","","TalentTown");
    
    $uid = $_POST["uid"];
    $category = $_POST["category"];
    $subcategory = $_POST["subcategory"];
    $cat_expr = $_POST["cat_expr"];
    $cat_desc = $_POST["cat_desc"];
    
    $query = "insert into User_Catdetails(uid,category,subcategory,cat_expr,cat_desc) values ('$uid','$category','$subcategory','$cat_expr','$cat_desc')";
    
    $con->query($query);
    
    if($query){
        print("Inserted");
    }else{
        print("Not Inserted");
    }
    
    
?>