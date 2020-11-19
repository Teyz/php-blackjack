<?php

namespace core;

abstract class Player
{
    protected $points;
    protected $cards;
    protected $nbCards;

    public function __construct()
    {
        $this->points = 0;
        $this->cards = array();
        $this->nbCards = 0;
    }

    public function drawCard(){

    }
}