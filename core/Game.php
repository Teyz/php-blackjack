<?php

class Game{
    private $playerOne;
    private $playerTwo;
    private $isFirstRound;

    public function __construct()
    {
        $this->playerOne = new \core\Bank();
        $this->playerTwo = new \core\Gambler();
        $this->isFirstRound = true;
    }

    public function gamblerTurn()
    {
        $drawnewcard = (string)readline('Voulez vous tirer une carte ? ( yes / no ) ');
        if ($drawnewcard === 'yes'){
            echo 'je tire une carte';
            drewcard();
        } elseif ($drawnewcard === 'no'){
            echo 'tour de la banque';
        } else {
            echo "Veuillez répondre 'yes' ou 'no'";
            gamblerTurn();
        }
    }

    public function game(){
        if($this->isFirstRound){
            $this->playerOne->getFirstRoundsCards();
            $this->playerTwo->getFirstRoundsCards();
            $this->isFirstRound = false;
        }
    }
}



