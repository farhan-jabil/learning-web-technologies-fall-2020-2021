<?php
	
	if (isset($_REQUEST['name']) && !empty($_REQUEST["name"])) 
	{
		$name = $_REQUEST["name"];
		if ($name == trim($name) && strpos($name, " ") !== false) 
		{
			if (($name[0] >= 'a' && $name[0] <= 'z') || ($name[0] >= 'A' && $name[0] <= 'Z')) 
			{
				for ($i = 0; $i < strlen($name); $i++) 
				{
					if (($name[$i] >= 'a' && $name[$i] <= 'z') || ($name[$i] >= 'A' && $name[$i] <= 'Z') 
					|| ($name[$i] == ' ') || ($name[$i] == '-') || ($name[$i] == '.')) {
					} 				
					else
					{
						echo("Enter valid name that contains a-z or A-Z or dot or dash");
					}
				}
				
				echo $name;
			
			} 		
			else 
			{
				echo "Must start with a letter";
			}
		} 		
		else 
		{
			echo "At least two words needed";
		}
	}
	else 
	{
		echo "Fill with a valid name";
	}
	
?>
