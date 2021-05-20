<?php

interface FruitBowlsInterface
{
    public function addFruit(Fruit $fruit);

    public function countFruit();

    public function getCapacity();

    public function getRestOfSpace();
}