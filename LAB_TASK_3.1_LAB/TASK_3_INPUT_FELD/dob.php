<?php

$date = "";

if(isset($_REQUEST['submit']))
{
    if($_REQUEST['day']=="" or $_REQUEST['month']=="" or $_REQUEST['year']=="")
    {
        $date = "Enter all values";  
    }
    else
    {
        $date = strval($_REQUEST['day'])."/".strval($_REQUEST['month'])."/".strval($_REQUEST['year']);
    }
} 
else
{
    $date = "";
}

?>

<head>
    <title>DATE OF BIRTH</title>
</head>
<body>
    
    <form method="post" action="dob.php">
        
        <fieldset style="font-family:Calibri;width:220px;height:180px">
            
          <legend><b>DATE OF BIRTH</b></legend>
          <pre><font size="4">  dd    mm      yyyy</font></pre>
          <input type="tel" name="day" size="2"><b> /</b>
          <input type="tel" name="month" size="2"><b> /</b>
          <input type="tel" name="year" size="4"><br><br>
          <input type="text" name="date" value="<?=$date?>">
          <hr>
                
          <input type="submit" name="submit" value="Submit">
        </fieldset>
        
    </form>
    
</body>
</html>