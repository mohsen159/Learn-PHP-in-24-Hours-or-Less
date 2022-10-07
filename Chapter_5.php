<?php

#how to handel exaption 
  


  /*try 
  {
    $exp = throw new 
     Exception("Error Processing Request", 109);
     

  }
  catch (Exception $e)       {
    echo "Error: "  . $e->getCode() . "\n";   
  }  */
try {

    /// wtf i do here 
    //TODO: THIS TEXT IS A SHIT 
     echo 100/0 ; 
} catch (DivisionByZeroError $e)  {
     echo $e->getCode();
}

?>