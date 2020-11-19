<?php

namespace core;

abstract class Player
{
    protected $points;
    protected $cards;
    protected $nbCards;
    protected $cardStack;

    public function __construct()
    {
        $this->points = 0;
        $this->cards = array();
        $this->nbCards = 0;
        $cardStack = new CardStack();
        $this->cardStack = $cardStack->getCardStack();
    }

    public function drawCard(){

    }
}
