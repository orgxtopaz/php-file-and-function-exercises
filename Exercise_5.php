<?php

if(isset($_POST['submit'])){

function calcFactorial(){

$factorial = 1; 


$numinput = $_POST['value'];

if($numinput<=0){
    echo (abs($numinput));

}else{

    for ($x=$numinput; $x>=1; $x--)   
    {  
    $factorial = $x * $factorial;  
    }  

    echo "The factorial of the given number: ".$numinput. " is".$factorial;

}

    
}

calcFactorial();





}





?>


<form method="post" >
<input type="number" name="value" >
<button type="submit" name="submit">SUBMIT</button>
</form>