<?php
	
    $con = new mysqli("localhost","id5417193_talenttownofficial","officialtalenttown...","id5417193_talenttown");
    
    $uid = $_POST["uid"];
    
    

    // SELECT Director_Registertbl.dname,Director_Registertbl.dimage,Events.eid,Events.category,Events.event_title,Events.last_date,Events.event_desc,Events.event_img,Applied_Events.u_status,Applied_Events.d_status FROM Applied_Events,Events,Director_Registertbl WHERE Applied_Events.did = Director_Registertbl.did and Applied_Events.eid = Events.eid and Applied_Events.uid = 1


     $qu = mysqli_query($con,"SELECT Director_Registertbl.dname,Director_Registertbl.dimage,Events.eid,Events.category,Events.event_title,Events.last_date,Events.event_desc,Events.event_img,Applied_Events.u_status,Applied_Events.d_status FROM Applied_Events,Events,Director_Registertbl where Applied_Events.did = Director_Registertbl.did and Applied_Events.eid = Events.eid and Applied_Events.uid = '$uid'");

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


