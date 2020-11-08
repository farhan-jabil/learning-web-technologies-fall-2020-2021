<?php

    $a = $_POST['UserId'];
    $b = $_POST['img'];

    if (isset($a) && !empty($a) && ($a>-1)){

        echo "Valid Id"."<br>";

    }

    else 
    {
        echo "UserId cannot be empty and has to be a positive number"."<br>";
    }

    if (isset($b) && !empty($b)){
        echo "Picture Received";
    }
    else
    {
        echo "Enter Image";
    }

?>