<?php

   class  foo 
   {
   function __destruct()
   {
       #echo " object destroyd sorry !" ; 
   }
   private $type = "shit" ;  
   function setype($type)
   {
       return  $this->type  = $type ; 
   }
   function getype()
   {
       return $this->type ; 
   }
   protected   function  echo ()
   {
       echo "hellllo my dick "; 
   }
   // static proberty 
   static $value = "hot day"  ; 
   public function jsutprint ()
   {
        echo self::$value . " you see " ; 
   }
   static function printhere ()
   {
       self::here() ; 
   }
   static function here ()
   {
      echo "shit nothing " ; 
   }
   function __construct($value )
   {
       $this->type = $value ; 
   }
   }
   
   class foo1 
   {

   }
   $kqmel = new foo('dick'); 

   #$kqmel->setype("nothinbg") ;  
   #$cloine = clone $kqmel ; 
   #$cloine->setype("nothing gg "); 
   #echo $kqmel->getype() ; 
   #echo $kqmel->getype();
   #echo foo::$value ; 
   #foo::here() ;
   #$kqmel->printhere() ; 

   #Polymorphism
   

   /*$foo1 = new foo1(); 
   if ($foo1 instanceof('foo'))
      
   {
    echo "foo" ; 

   }
   else
   {
    echo "foo1" ; 
   }
   */
   class amimal {
    static $n ; 
    
    static function FunctionName( $var )
    {
        return $var . "\t" ; 
    }
   }
   class humman extends amimal {
     static function call ($val)
     {
        echo  self::FunctionName($val) . 'world' ; 
     }
   }
   humman::call("mohssen"); 
   exit();
?>