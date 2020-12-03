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
        $this->countPoints = new CountPoints();
        $this->cardStack = $cardStack->getCardStack();
        $this->pickACard = $cardStack->pickACard();
        $countPoints = new CountPoints();
        $this->staticCardStack = $cardStack->getCardStack();

    }

    public function drawCard(){

    }

    public function getPoints(){
        return $this->countPoints->CountPoints($this->cards);
    }

    public function getFirstRoundsCards(){
        for($i = 0; $i <= 1; $i++){
            array_push($this->cards, $this->cardStack->pickACard());
        }
        $pickedCard[] = $this->pickACard;
        return $this->cards = $pickedCard;
    }
}
