
<html>
<head>
    <title>DATE OF BIRTH</title>
</head>
<body>
    
    <form method="post" action="dob.php">
          
        <fieldset style="font-family:Calibri;width:200px;height:120px">
            
            <legend><b>DATE OF BIRTH</b></legend>
            <pre><font size="4">  dd     mm    yyyy  </font></pre>
            <input type="tel" name="day" size="2"><b> /</b>
            <input type="tel" name="month" size="2"><b> /</b>
            <input type="tel" name="year" size="4">
            <hr>  
            <input type="submit" name="submit" value="Submit">
        </fieldset>
        
    </form>
    
</body>
</html>

<?php

if(isset($_REQUEST['submit']))
{
    if($_REQUEST['day']=="" or $_REQUEST['month']=="" or $_REQUEST['year']=="")
    {
        echo "Fill all fields"; 
    }
    else
    { 
        echo $_REQUEST['day']."/".$_REQUEST['month']."/".$_REQUEST['year']; 
    }
    
}

?>
