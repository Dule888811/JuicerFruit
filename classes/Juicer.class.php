<?php

require_once 'core/init.php';
class Juicer implements JuicerInterface
{
    public $strainer;
    public $fruitBowls;
    private static $_volume = null;

    public function __construct(Strainer $strainer,FruitBowls $fruitBowls)
    {
        $this->strainer = $strainer;
        $this->fruitBowls = $fruitBowls;
    }

    public static function getVolume()
    {
        if(is_null(self::$_volume)){
            self::$_volume = 20;
        }
        return self::$_volume;
    }



}