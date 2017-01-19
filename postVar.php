<?php

   
    

 $home = array  ("dwayne", "jay", "mike", "joe");

//print_r($home);


 $i =0;

$isTrue = false;

    
while ($i < sizeof($home)) {
    
    if($home[$i] == $_POST['username']) {
    
            $isTrue = true;
            
        }
       
          $i++;
    }

    if ($isTrue) {
        
        echo "Welcome " . $_POST['username'];
    }else {
        
     echo   "sorry wrong person";
    }
     
  
    

?>

<p>  please enter a whole number</p>


<form method="post">

    <input name="username" type="text">
    
    <input type="submit" value="Go">

</form>