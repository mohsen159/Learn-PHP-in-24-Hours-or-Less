<?php
$var = 10 ; 
/*

function foo() {
    global $var  ; 
    $var = 13 ;
}

#foo($var) ; 
#$v = & foo($var) ; 
///foo();

#print_r($GLOBALS) ; 
#echo $GLOBALS['_SERVER']['argv'][0] ; 
#echo "\n"  . $var ;
#echo phpversion()   ; 

*/

try {
$exp =  new Exception("my custom error and horrer " , 12345 );
   throw $exp;
} 
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage()  . " code " . $e->getCode();
  }


exit();
?>