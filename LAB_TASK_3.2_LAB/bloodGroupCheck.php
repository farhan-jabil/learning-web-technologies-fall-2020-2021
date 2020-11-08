  
<?php

    if (isset($_POST['bloodGroup']) && !empty($_POST['bloodGroup'])) 
    {
        echo $_REQUEST["bloodGroup"] ;
    } 
    else 
    {
        echo "Select a group";
    }
	
?>