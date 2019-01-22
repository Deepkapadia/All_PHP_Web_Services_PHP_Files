<?php
	
    $con=new mysqli("localhost","root","","TalentTown");
    
    $did = $_POST["did"];
    
    
     $qu = mysqli_query($con,"select * from Director_Media_Video where did = '$did'");
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


