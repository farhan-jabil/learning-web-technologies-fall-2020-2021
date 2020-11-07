
<html>
<head>
    <title>HTML Form -Blood Group</title>
</head>
<body>

    <form method="post" action="bloodGroup.php">
        
        <fieldset style="font-family:Calibri;width:200px;height:100px">
            
            <legend><b>BLOOD GROUP</b></legend>

            <select name="bloodGroup">
            	
            	<option value="Select One"selected>Select</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select>
			<hr>
   
       <input  type="submit" name="submit" value="Submit">
        </fieldset>
        <br>  
        
    </form>
    
</body>
</html>

<?php

if(isset($_REQUEST['submit']))
{
  echo $_REQUEST['bloodGroup'];   
}

?>
