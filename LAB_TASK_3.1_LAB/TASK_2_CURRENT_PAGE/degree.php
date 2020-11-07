
<html>
<head>
    <title>DEGREE</title>
</head>
<body>

    <form method="post" action="degree.php">

        <fieldset style="font-family:Calibri;width:220px;height:100px">

            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="BSc"> BSc
            <input type="checkbox" name="degree[]" value="MSc"> MSc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>

    </form>

</body>
</html>

<?php

if(isset($_REQUEST['submit']))
{
  if(empty($_POST['degree']))
{
  echo "Select First"; 
}
else
{
  $degree = $_POST['degree'];
  for($i = 0; $i < count($degree); $i++)
{
  echo $degree[$i]."<br>";     
}    
}
   
}

?>
