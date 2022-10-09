<?php   


// ths best way to make this work ass creat ass it look if we provide some 
// session data protection so cool things and keep uncritpon()
//work safe  and clean  

class hashing {
    private $init ; 
    function __construct($init) { 
     $this->init = $init ; 
    }
    function encritpon ($text , $param )
    {
        $u = $text ; 
        for($a = 0 ; $a < strlen( $text ) ; $a++ )
        {
            $u = ($u + $param) /124 ;  
        }
        return $u ;
    }
    function uncritpon ($text , $param )
    {
        $u = $text ; 
        for($a = 0 ; $a < strlen( $text ) ; $a++ )
        {
            $u = ($u /124) - $param  ;  
        }
        return $u ;
    }
}
$hash = new hashing( 'HELLO ' );

echo $hash->encritpon("shit out" , "n") . " \n";

echo $hash->uncritpon($hash->encritpon("shit out" , "n") , "n");

?>