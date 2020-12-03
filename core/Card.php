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

    /**
     * @return mixed
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
