<?php

$blood = "";
if(isset($_POST['submit']))
{
    $blood = $_REQUEST['bloodGroup'];
}
else
{
    $blood = "";
}

?>

<html>
<head>
    <title>BLOOD GROUP</title>
</head>
<body>
    
    <form method="post" action="bloodGroup.php">
        
        <fieldset style="font-family:Calibri;width:220px;height:110px"> 
            
            <legend><b>BLOOD GROUP</b></legend>
            <select name="bloodGroup">
                <option value="Select one"> </option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+" >O+</option>
				<option value="O-">O-</option>
			</select> 
            <br> <hr>
			<input type="text" name="blood" value="<?=$blood?>">
            <br><br>
			
            <input  type="submit" name="submit" value="Submit">
            
        </fieldset>
        <br>
        
    </form>
    
</body>
</html>