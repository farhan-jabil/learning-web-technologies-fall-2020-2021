"use strict"


// name
let student = ['farhan', '789', 'CS'];

function f1(){
	let data= document.getElementById('name').value;
	if(data == ''){
		document.getElementById('head').innerHTML = 'invalid data';		
    }
    else if(data.length <2){
		document.getElementById('head').innerHTML = 'input atleast two words ';	
	}
    else{
        document.getElementById('head').innerHTML = data;
        
    }
    
 
 


}

//emailllll  
function f2(){
	let data= document.getElementById('name').value;
	if(data == ''){
		document.getElementById('head').innerHTML = 'invalid data';		
	}else{
        document.getElementById('head').innerHTML = data;
        
    }
    
 

}

//gender

function f3(){
	let data= document.getElementById('name').value;
	if(data == ''){
		document.getElementById('head').innerHTML = 'Click at least on item';		
	}else{
        document.getElementById('head').innerHTML = data;
        
    }
    
 

}

//date of birth

function f4(){
	let data= document.getElementById('name').value;
	if(data == ''){
		document.getElementById('head').innerHTML = 'invalid data';		
	}else{
        document.getElementById('head').innerHTML = data;
        
    }


}