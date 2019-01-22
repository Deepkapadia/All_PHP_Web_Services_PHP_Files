<?php
    
    $con = new mysqli("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    $category = $_POST["category"];
    $subcategory = $_POST["subcategory"];
    $cat_expr = $_POST["cat_expr"];
    $cat_desc = $_POST["cat_desc"];
    
    $query = "insert into Director_Catdetails(did,category,subcategory,cat_expr,cat_desc) values ('$did','$category','$subcategory','$cat_expr','$cat_desc')";
    
    $con->query($query);
    
    if($query){
        print("Inserted");
    }else{
        print("Not Inserted");
    }
    
    
?>
