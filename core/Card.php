<?php


namespace core;


class Card
{
    protected $family;
    protected $value;

    public function __construct($cardValue, $cardFamily)
    {
        $this->family = $cardFamily;
        $this->value = $cardValue;
    }
}