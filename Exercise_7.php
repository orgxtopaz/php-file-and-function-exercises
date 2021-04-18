<?php

if(isset($_POST['submit'])){

    function reverseHalf($nameinput){

    $nameLength = strlen($nameinput);
    



        
         if($nameLength % 2 == 0){

            $reverseHalf = strrev($nameinput);

            $divideString = $nameLength /2;
            echo substr($reverseHalf,0,$divideString);
            

         } else{
            echo  strrev($nameinput);
         }



    }   

$nameinput = $_POST['value'];
reverseHalf($nameinput);





}







?>


<form method="post" >
<input type="text" name="value" pattern="[A-Za-z]+" >
<button type="submit" name="submit">SUBMIT</button>
</form>