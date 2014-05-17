<?php

$hand = array( '5-D', 'K-C', 'A-S', 'A-H', '4-H');

function getTotal($hand)
{
    $total = 0;
    $aceCount = 0;
    // loop through hand and calculate total value
    // use "explode" function to separate card suit and value
    // aces count as 11 unless you are over 21 and then they count as 1
    // K, Q, and J count as 10
    // numeric cards count as their value

    
    

    foreach ($hand as $card)
    {
        explode('-', $card);
        
        // set value of cards, rather than do addition
        switch ($card) {
            case ($card[0] == "A"):
                $aceCount += 1;
                $cardValue = 11;
                if ($total > 21) {
                    if ($aceCount == 1) {
                        $total -+ 10;
                    } elseif ($aceCount >= 2) {
                        $total = $total - $aceCount * 10;
                    }
                }
                break;
            case ($card[0] == "K" || $card[0] == 'Q' || $card[0] == 'J'):
                $cardValue = 10;
                break;
            default:
                $cardValue = ($card[0]);
                break;
        }

        $total += $cardValue;
        
    }

    return $total;

    

}

echo getTotal($hand) . PHP_EOL;