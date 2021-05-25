<?php

require_once 'core/init.php';
 class Apple extends Fruit
{
   public  $wormy;


   public function __construct()
   {
       if(rand(10000,10099999)/5 %  0 ){
           $this->wormy = false;
       }else{
           $this->wormy = true;
       }
       $this->volume = rand(0,5);
   }
 }