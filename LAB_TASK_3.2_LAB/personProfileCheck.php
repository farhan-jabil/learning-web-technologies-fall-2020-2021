<?php

if (isset($_REQUEST['name']) && !empty($_REQUEST["name"])) {
    $name = $_REQUEST["name"];

    if ($name == trim($name) && strpos($name, " ") !== false) {
        if (($name[0] >= 'a' && $name[0] <= 'z') || ($name[0] >= 'A' && $name[0] <= 'Z')) {
            for ($i = 0; $i < strlen($name); $i++) {
                if (($name[$i] >= 'a' && $name[$i] <= 'z') || ($name[$i] >= 'A' && $name[$i] <= 'Z') 
                || ($name[$i] == ' ') || ($name[$i] == '-') || ($name[$i] == '.')) {
                } 
                
                else {
                    echo("Enter valid name that contains a-z or A-Z or dot or dash") ."<br>";
                }
            }
            echo $name ."<br>";
        } 
        
        else {
            echo "Must be start with letter."."<br>";
        }
    } 
    
    else {
        echo "At least two words needed."."<br>";
    }
}

else {
    echo "Enter Valid Name."."<br>";
}





if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
    $email = $_REQUEST["email"];

    $email_pieces = explode("@", $email);
    if (count($email_pieces) == 2 &&
        $email_pieces[0] !== "" &&
        $email_pieces[1] !== "")
         {
        $domain = explode(".", $email_pieces[1]);
        if (count($domain) > 1) {                  
            foreach ($domain as $dom) {
                if ($dom == "") {
                    echo ("Invalid Email")."<br>";
                }
            }
            echo "Email :".$email."<br>";
        } else {
            echo "Invalid Email"."<br>";
        }
    } else {
        echo "Invalid Email"."<br>";
    }
} else {
    echo " Email must be filled"."<br>";
}




if (isset($_POST['gender']) && !empty($_POST['gender'])) {
    echo "Gender:".$_POST["gender"] ."<br>";

} 
else {
    echo "Must be select one"."<br>";
}


if($_POST['day']!=""||  $_POST['month']!="" || $_POST['year']!="")
{
if($_POST['day']>=1 && 31>= $_POST['day'] && $_POST['month']>=1 && 12>=$_POST['month'] && $_POST['year']>=1900&& 2016>=$_POST['year'])
	{
		if($_POST['month']!=2)
		{
			echo " Valid Date:".$_POST['day']."/".$_POST['month']."/".$_POST['year']."<br>";

		}
		

	}
	else
	{
		echo "Invalid Date."."<br>";
	}
}
else
{
	echo "Can not be empty"."<br>";
}



if (isset($_POST['bloodgroup']) && !empty($_POST['bloodgroup'])) {
    echo $_REQUEST['bloodgroup']."<br>" ;
} else {
    echo "Must be select one"."<br>";
}




if (isset($_POST['d1']) && !empty($_POST['d1'])) {


        
    $checkbox=$_POST["d1"];


    foreach ($checkbox as $value) {
 
 echo "Degree:". $value . "<br>";
}

     
 } else {
     echo "Must be select one"."<br>";
 }


 
 
 $b = $_POST['img'];



 if (isset($b) && !empty($b)) {
       
       
    echo "Valid Id"."<br>";
} 
else {
echo " Fill with a picture"."<br>";
}


?>