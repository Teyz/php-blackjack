<?php


namespace core;


class CardStack extends Card
{
    private $cardStack = [];

    public function __construct()
    {
        for ($i = 0; $i <= 9; $i++) {
            $this->cardStack[i] = rand(1, 13);
        }
    }

    public function shuffleCards(){
        shuffle($this->cardStack);
    }
}