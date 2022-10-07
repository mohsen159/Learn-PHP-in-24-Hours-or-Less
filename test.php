<?php

$var = 10 ; 


function foo() {
    global $var  ; 
    $var = 13 ;
}

#foo($var) ; 
#$v = & foo($var) ; 
///foo();

#print_r($GLOBALS) ; 
echo $GLOBALS['_SERVER']['argv'][0] ; 
echo "\n"  . $var ;




?>