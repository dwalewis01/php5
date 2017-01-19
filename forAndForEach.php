<?php


// for each loop 
$family = array("rob", "kirsten","tommy", "Ralphie");


foreach ($family as $key => $value) {
    
    
    $family[$key] = $value . "Percival";
    
    echo "Array item "  . $key . " is ". $value.  "<br>";
}







// setup up for loop 
for ($i =10; $i >=0; $i= $i - 1){
    
    echo $i. "<br>";
    
}

echo "<br> ";


for ($i = 0; $i < 4; $i++ ) {
    
    
   echo $family[$i] . "<br>";
    
    
}


?>