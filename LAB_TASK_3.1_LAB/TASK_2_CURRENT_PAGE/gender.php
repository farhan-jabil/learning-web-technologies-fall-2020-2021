
<html>
<head>
     <title>GENDER</title>
</head>
<body>
    
    <form method="post" action="gender.php">
        
        <fieldset style="font-family:Calibri;width:220px;height:90px">
            <legend><b>GENDER</b></legend>
            <input type="radio" name="gender" value="Male" > Male 
		    <input type="radio" name="gender" value="Female"> Female
		    <input type="radio" name="gender" value="Other" > Other <hr>  
            <input type="submit" name="submit" value="Submit">
        </fieldset>
        
    </form>
    
</body>
</html>

<?php

if(isset($_REQUEST['submit']))
{
  if (isset($_POST['gender'])) 

    {echo $_POST['gender'];}
            
else
{
  echo "Select First.";
}
  
}

?>
