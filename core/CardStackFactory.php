<?php


namespace core;


class CardStackFactory
{
    private $cardStack = array();

    public function __construct()
    {
        for($family = 1; $family <= 4; $family++){
            for ($value = 1; $value <= 13; $value++) {
                if($value === 1){
                    $card = new AsCard($value, $family);
                } else {
                    $card = new Card($value, $family);
                }
                array_push($this->cardStack, $card);
            }
        }
    }

    public function getCardStack(){
        return $this->cardStack;
    }
}