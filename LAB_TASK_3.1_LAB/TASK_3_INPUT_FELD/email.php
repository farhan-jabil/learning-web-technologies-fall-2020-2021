<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['Email'];
		
		if($name == ""){
			echo "Fill Email";
		}else{
			$data = $name;
		}
	}
?>


<head>
    <title>EMAIL</title>
</head>
<body>
    
    <form method="post" action="email.php">
        
        <fieldset style="font-family:Calibri;width:200px;height:100px"> 
            
          <legend><b>EMAIL</b></legend>
          <input type="email" name="Email" value="<?=$data?>">
          <button title="hint:Sample@example.com" style="font-family:Times New Roman;color:blue; font-size: 11px;"><b>i</b></button>
          <hr>
          <input  type="submit" name="submit" value="Submit">
            
        </fieldset>  
        
    </form>
    
</body>
</html>
