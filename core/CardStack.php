<?php


namespace core;


class CardStack
{
    private $cardStack;

    public function __construct()
    {
        $cardStackFactory = new CardStackFactory();
        $this->cardStack = $cardStackFactory->getCardStack();
        shuffle($this->cardStack);
    }

    public function getCardStack(){
        dump($this->cardStack);
    }
}