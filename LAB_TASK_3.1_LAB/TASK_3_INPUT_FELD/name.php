<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		
		if($name == ""){
			echo "Fill name";
		}else{
			$data = $name;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>NAME</title>
</head>
<body>	
    	
    <form method="post" action="name.php">
        
        <fieldset style="font-family:Calibri;width:200px;height:100px">
            
         <legend><b>Name</b></legend>
         
         <input type="text" name="name" value="<?=$data?>"> <hr>
        <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
		
</body>
</html>

