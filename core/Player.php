<?php

namespace core;

abstract class Player
{
    protected $points;
    protected $cards;
    protected $nbCards;
    static $staticCardStack;
    static $countPoints;

    public function __construct()
    {
        $this->points = 0;
        $this->cards = array();
        $this->nbCards = 0;
        $cardStack = new CardStack();
        $countPoints = new CountPoints();
        $this->staticCardStack = $cardStack->getCardStack();
    }

    public function drawCard(){

    }
}