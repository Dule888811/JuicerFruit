<?php

require_once 'core/init.php';
class FruitBowls implements FruitBowlsInterface
{
   private $_capacity;
   private $_fruits;


   public function addFruit(Fruit $fruit)
   {

    $counter = 0;
        foreach($fruit as $item)
        {
            if($_fruits = $this->_capacity)
            {
                break;
            }
            $counter++;
            $_fruits[] = $item;
            if($counter  % 9 == 0 )
            {
                if(Apple::$wormy == false)
                {
                    array_pop($_fruits);
                }
            }
        }
   }

   public function countFruit()
   {
       return $this->_fruits;
   }

   public function getCapacity()
   {
       return $this->_capacity;
   }

   public function getRestOfSpace()
   {
       return $this->_capacity - $this->_fruits;
   }
}