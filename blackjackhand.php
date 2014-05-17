<?php

$hand = array('A-H', '5-D', 'K-C', 'A-S', '4-H');

function getTotal($hand)
{
    $total = 0;

    // loop through hand and calculate total value
    // use "explode" function to separate card suit and value
    // aces count as 11 unless you are over 21 and then they count as 1
    // K, Q, and J count as 10
    // numeric cards count as their value


    foreach ($hand as $card)
    {
        explode('-', $card);
        
        
        switch ($card) {
            case ($card[0] == "A"):
                $total += 11;
                if ($total > 21); {
                    $total -= 10;
                } break;
            case ($card[0] == "K"):
                $total += 10;
                break;
            case ($card[0] == "Q"):
                $total += 10;
                break;
            case ($card[0] == "J"):
                $total += 10;
                break;
            default:
                $total += ($card[0]);
                break;
        }
    }

    return $total;
    if ($total == 21) {
        
    }
}

echo getTotal($hand) . PHP_EOL;