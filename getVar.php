<?php


// using get variable

print_r($_GET);

// check if word or number is positive and whole
if (is_numeric($_GET['number']) && $_GET['number']  > 0 && $_GET['number'] == round ($_GET['number'], 0 )) {
    
    
    $i = 2;
    
    $isPrime = true;
    
    
    while ( $i < $_GET['number']) {
        
        
        if ($_GET['number'] % $i == 0) {
            
             $isPrime = false;
            // number is not prime
        }
        
        $i++;
    }
    
    
    if ($isPrime ) {
        
        echo" <p>" . $i . " is a prime number </p>";
    }else {
        
        echo "<p>". $i . " is not prime number </p>";
    }
    // send error msg to info of correct msg to enter
} else if ($_GET) {
        
        echo "<p> this is not a whole number </p>";
    }



?>

<p>  please enter a whole number</p>


<form>

    <input name="number" type="text">
    
    <input type="submit" value="Go">





</form>