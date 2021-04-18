<?php 

if(isset($_POST['submit'])){

function testLoyalty(){

$inputname = (strtoupper($_POST['value']));

$inputnameLength = strlen($inputname);

$occurences = ("EAN");
$occurencesLength = strlen($occurences);

$count=0;



for ($z = 0 ; $z < $occurencesLength ; $z++){

    for($x =0; $x < $inputnameLength ; $x++){
        if($occurences[$z]==$inputname[$x]){

            $count+=1;
            
        }
    }
}

$product = $count*$inputnameLength;


    if($count>3 && $product %6==0){
         echo "Loyal";
        

    }else{
        echo"Di sure";
        
        
    }



}
testLoyalty();   

}







?>



<form method="post" >
<input type="text" name="value">
<button type="submit" name="submit">SUBMIT</button>
</form>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

$(document).ready(function(){

   var occurences ="EAN";

   var inputnameUpcase = inputname.toUpperCase();


















       
    }



})




</script> -->