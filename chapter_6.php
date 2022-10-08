<?php  

#The Advanced Concepts of Object-Oriented Programming


#The Overloading Capabilities of OOP 
#__get and __set functions are implemented here to provide access
class advens {

    private $element  = array("a"=>"b", "c"=>"d", "e"=>"q") ; 

    function __get($name)
    {
        if(array_key_exists($name,$this->element))
        {
            return $this->element[$name];
        }
        else
        {
            return "shit happend here your key don't exist yet 0";
        }
    }
    function __set($name,$value)
    {
        if(array_key_exists($name,$this->element))    
        {
           return  $this->element[$name] = $value;
        }  
        else
        {
            echo "shit happend here your key don't exist yet  1";
        }

    }

}

/*$ob = new advens() ; 
$ob->am = 100  ; */

#__call function
class HiClass {
    function show( $var)
    {
        for($a = 0 ; $a < $var ; $a++) {
            echo $a  . "\n";

        }
        return $var;
    }

}
class HiDelegator {
     
    function __construct()
    {
        $this->sampleObject = new HiClass();
    }
    function __call ($sampleMethod, $sampleArguments) {

        try
        {
            return call_user_func_array(array ($this->sampleObject , $sampleMethod) ,
            $sampleArguments);
        }
        catch (TypeError $e)   {   return "ther is no fun called $sampleMethod";
        } 
       
    }
    private $sampleObject;
}

#$s = new HiDelegator(); 
#print $s->show(10);


#iterators
class humann {

    public $NAME = 'humann';
    public $DESCRIPTION = 'description';
}
/*$mohe = new humann();
foreach($mohe as $key => $value) {  
   echo  $key . ': ' . $value . "\n";
}*/

#The Design Patterns
//print_r($_SERVER['HTTP_USER_AGENT']); 
#The Singleton Pattern
/*
what i understand of this is ze can creat only on instens of a class in the hole program using 
getinstans and making the constractuer private  */
 
class Singleton {
    
    private $id = 12345  ; 
    private static $instans  = null; 
    private function __construct() {}
    private function __clone(){}  
    public function getinstans() {
        if(self::$instans == null){ 
            self::$instans = new Singleton();
        }
        return self::$instans;
    }
    public function log($message){  
        echo $message. " $this->id\n";
    }
}

$ob::log("shit") ; 
#The Factory Pattern
exit();

?>