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
        return $this->cardStack;
    }

    public function pickACard(){
        $cardStackLength = sizeof($this->cardStack)-1;
        $randomNumber = rand (0, $cardStackLength);
        $cardPicked = $this->cardStack[$randomNumber];
        unset($this->cardStack[$randomNumber]);
        $this->cardStack = array_values($this->cardStack);
        return $cardPicked;
    }
}