<?php

class Game{
    private $playerOne;
    private $playerTwo;
    private $isFirstRound;
    private $isFinished;

    public function __construct()
    {
        $this->playerOne = new \core\Bank();
        $this->playerTwo = new \core\Gambler();
        $this->isFirstRound = true;
    }

    public function game(){
        if($this->isFirstRound){
            $this->playerOne->getFirstRoundsCards();
            $this->playerTwo->getFirstRoundsCards();
            $this->isFirstRound = false;
        }
        while(!$this->isFinished){
            $this->playerTwo->choose();
        }
    }
}



