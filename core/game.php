<?php


function gamblerTurn()
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

gamblerTurn();

