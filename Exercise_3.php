

<?php


function checked(){


$filename= ("helloworld.txt");

if(file_exists($filename)){    

  
$str= ("h e l l o w o r l d .t x t    ");

$filenameArray=(explode(" ",$str));



$filenameLength =count($filenameArray);



$vowels= ("a e i o u");

$vowelsArray=(explode(" ",$vowels));



$vowelsLength =count($vowelsArray);

      
        // echo file_get_contents($filename);
$fp = fopen($filename, 'a');//opens file in append mode


$lines = file($filename);//file in to an array. 
       



$count=0;


for ($x = 0; $x <$vowelsLength ; $x++) {
    // echo "The number is: $x <br>";
  
    for ($z = 0; $z <$filenameLength ; $z++){



        if($vowelsArray[$x]==$filenameArray[$z]){

            $count+=1;
         }

    }
   

  }

  if ($count % 2 ==0){
      
    echo $lines[1];
    echo "<br>";
    echo "or";
    echo "<br>";
    echo $lines[3];

  }else{

    echo $lines[2];
    echo "<br>";
    echo "or";
    echo "<br>";
    echo $lines[4];

      
  }



}else{

  echo "No file exists";
}






}

checked();




  







   

?>







    




