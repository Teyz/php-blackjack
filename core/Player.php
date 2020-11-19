<?php

namespace core;

abstract class Player
{
    protected $points;
    protected $cards;
    protected $nbCards;
    protected $pickACard;
    static $staticCardStack;
    static $countPoints;

    public function __construct()
    {
        $this->points = 0;
        $this->cards = array();
        $this->nbCards = 0;
        $cardStack = new CardStack();
        $this->cardStack = $cardStack->getCardStack();
        $this->pickACard = $cardStack->pickACard();
        $countPoints = new CountPoints();
        $this->staticCardStack = $cardStack->getCardStack();

    }

    public function drawCard(){

        $pickedCard[] = $this->pickACard;
        return $this->cards = $pickedCard;
    }
}
