<?php
    
    if (isset($_POST['gender']) && !empty($_POST['gender'])) 
    {
        echo $_REQUEST["gender"] ;
    } 
    else 
    {
        echo "Select First";
    }
        
?>