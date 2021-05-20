<?php

require_once 'core/init.php';
class Strainer implements StrainerInterface
{
    public $juice;

    public function SqueezingFruit(Fruit $fruit)
    {
        $counter = 0;
        foreach($fruit as $item)
        {
            $counter++;

            if($counter  % 9 == 0 )
            {
                if(Apple::$wormy == false)
                {
                    $this->juice = $this->juice + 0;
                }else{
                    $this->juice += $fruit->volume / 2;
                }
            }
        }
        return  $this->juice;
    }
}