<?php

require_once 'vendor/autoload.php';

/*$test = new \core\CardStack();
dump($test->getCardStack());
dump($test->pickACard());
dump($test->getCardStack());*/


$player = new \core\Gambler();
dump($player->drawCard());
