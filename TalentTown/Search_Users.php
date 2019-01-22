<?php
	
    $con = new mysqli("localhost","id5417193_talenttownofficial","officialtalenttown...","id5417193_talenttown");
    
    
     $qu = mysqli_query($con,"SELECT User_Registertbl.uname,User_Registertbl.uimage,User_Catdetails.category from User_Registertbl,User_Catdetails where User_Registertbl.uid = User_Catdetails.uid");

     	// uid = '$uid'");
    if(mysqli_num_rows($qu) == 0){
        $row = array();
        
        print_r(json_encode($row));
    }
    else
    {
        
        
        while($row = mysqli_fetch_assoc($qu))
        {
            $pp[]  = $row;
            
        }
        echo json_encode($pp);

        
    }
    

    
?>


