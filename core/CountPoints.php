<?php


namespace core;


class CountPoints
{
    public static function calculPoints($cardStack){
        $totalPoint=0;
        $sizeCardStack = sizeof($cardStack) -1;
        for($i = 0; $i <= $sizeCardStack; $i++){
            if(get_class($cardStack[$i]) === "Card"){
                if($cardStack[$i]->getValue() >=10){
                    $totalPoint += 10;
                } else {
                    $totalPoint += $cardStack[$i]->getValue();
                }
            } else{
                if($totalPoint >= 0 && $totalPoint<=10){
                    $totalPoint += 11;
                } else {
                    $totalPoint += 1;
                }
            }
        }
    }

}