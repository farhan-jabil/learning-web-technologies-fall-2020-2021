
<?php

if(empty($_POST['degree']))
{
    echo "Select First";
}
else
{
   $degree = $_POST['degree'];
   for($i = 0; $i < count($degree); $i++)
    {
        echo $degree[$i]."<br>"; 
    }    
}

?>