<?php
	
    if (isset($_POST['degree']) && !empty($_POST['degree'])) 
    {
       $checkbox=$_POST["degree"];
       foreach ($checkbox as $value) 
        { 
	      echo $value . "<br>";
        }     
    } 
    else 
    {
        echo "Select at least one";
    }
		
?>