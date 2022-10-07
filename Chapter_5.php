<?php

#how to handel exaption 

try {

    /// wtf i do here 
    //TODO: THIS TEXT IS A SHIT 
     echo 100/0 ; 
} catch (DivisionByZeroError $e)  {
     echo $e->getCode();
}

?>