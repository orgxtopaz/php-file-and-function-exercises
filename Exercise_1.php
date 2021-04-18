<?php


function existThenOpen($filename){

    if(file_exists($filename)){    
        
        // echo file_get_contents($filename);


       $lines = file($filename);//file in to an array
       echo $lines[8]; //line 9

      

    }
}

existThenOpen("helloworld.txt");



?>


