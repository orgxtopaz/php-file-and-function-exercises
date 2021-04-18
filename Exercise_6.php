<?php 

if(isset($_POST['submit'])){

function calcPrime($numinput){

for($x=2; $x<$numinput; $x++)
{
   if($numinput %$x ==0)
       {
        return 0;
       }
 }
return 1;

}

$numinput = $_POST['value'];

$inputcalculate=calcPrime($numinput);

if ($inputcalculate==0){
echo "<br>";
echo "<b>The input number which is : ".$numinput." is <h1 style='color:red'>not a Prime Number</h1></b>";

}
else
echo "<b>The input number which is : ".$numinput." is a <h1 style='color:green'>Prime Number</h1></b>";

}


?>

<form method="post" >
<input type="number" name="value" >
<button type="submit" name="submit">SUBMIT</button>
</form>