<?php

#Chapter 2: The Control Structure
#include 'chapter1.php' ; 
$v = 10; 
/*

do {
      if ($v==9) {
          break 1;
          echo 'test ';  
      }
      echo $v . "\n" ; 

}while ($v++ < 10)   ; 


*/

/*foreach ($_SERVER as $key => $value) {
    echo $key ."\n" ;
}*/
#echo MAX ; 

#The Functions of PHP
$v = 10 ;
function print_me($t)
{
    global $v  ; 
    $v = 11433 ; 
    echo $t  . "\n"; 
}
function getvalue($key)
{
    return $GLOBALS[$key] ; 
}
//print_me("hoi")  ;
//echo getvalue('v') ; 
function & getadress ($key)
{
    return $GLOBALS[$key] ; 
}
/*$nothing = &getadress("v");
echo $v  ; 
$nothing = 100 ;  
echo  "\n". $v   */

function pass_by_ref( &$var)
{
    $var = $var + 10 ; 
}
/*echo $v  ; 
pass_by_ref($v) ; 
echo  "\n". $v
*/



?>