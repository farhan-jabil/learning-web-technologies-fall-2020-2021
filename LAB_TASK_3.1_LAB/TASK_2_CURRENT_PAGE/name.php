
<html>
<head>
    <title>NAME</title>
</head>
<body>
    
    <form method="post" action="name.php">
        
    <fieldset style="font-family:Calibri;width:200px;height:100px">

        <legend><b>NAME</b></legend>
        <input type="text" name="Name"> <hr>
        <input type="submit" name="submit" value="Submit">
            
    </fieldset>  
        
    </form>
    
</body>
</html>

<?php

if(isset($_REQUEST['submit']))
{
    if($_POST['Name']=="")
    {
      echo "No Input"; 
    }
    else
    {
      echo $_POST['Name'];
    }
     
}

?>
