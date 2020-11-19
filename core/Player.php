<?php

namespace core;

abstract class Player
{
    protected $points;
    protected $cards;
    protected $nbCards;
    protected $cardStack;
    protected $pickACard;

    public function __construct()
    {
        $this->points = 0;
        $this->cards = array();
        $this->nbCards = 0;
        $cardStack = new CardStack();
        $this->cardStack = $cardStack->getCardStack();
        $this->pickACard = $cardStack->pickACard();
    }

    public function drawCard(){
        $pickedCard = $this->pickACard;
        /*$this->points = $pickedCard->value;*/
        return $pickedCard->getValue();
    }
}
