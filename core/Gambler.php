<?php
namespace core;

class Gambler extends Player
{
    public function choose()
    {
        $drawnewcard = (string)readline('Voulez vous tirer une carte ? ( yes / no ) ');
        if ($drawnewcard === 'yes'){
            echo 'je tire une carte';
            $this->drawCard();
        } elseif ($drawnewcard === 'no'){
            echo 'tour de la banque';
        } else {
            echo "Veuillez répondre 'yes' ou 'no'";
            $this->choose();
        }
    }

}
