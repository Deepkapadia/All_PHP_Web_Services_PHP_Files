<?php
	
    $con=new mysqli("localhost","root","","TalentTown");
    
    $uemail = $_POST["uemail"];
    $upass = $_POST ["upass"];
    
     $qu = mysqli_query($con,"select * from User_Registertbl where uemail = '$uemail' and upass = '$upass'");
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


