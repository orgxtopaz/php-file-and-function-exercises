<?php


function existThenOpen($filename){

    if(file_exists($filename)){    



        
        // echo file_get_contents($filename);

       $fp = fopen($filename, 'a');//opens file in append mode

       $lines = file($filename);//file in to an array

       $lines[8] = "Appended Already!" .$lines[8] ; // append /insert content to line 9.

       
           
       file_put_contents($filename, join('', $lines). PHP_EOL);  


       echo $lines[8];
     

    }
}

existThenOpen("helloworld.txt");


       //----------- DUPLICATE THE  ALL CONTENT INSIDE THE FILE -----------------------//

     //    file_put_contents($filename, $lines, FILE_APPEND | LOCK_EX);  
    
    
    
           //----------- REPLACE SPECIFIC LINE  CONTENT INSIDE THE FILE -----------------------//

                        // $lines[8] . $lines[8] = 'xxx' ; 
?>


