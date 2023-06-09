<?php

namespace App\Card;

class CardGraphic
{
    protected $deckGraphics = [
        "h1" => "♥️A", "h2" => "♥️2", "h3" => "♥️3", "h4" => "♥️4", "h5" => "♥️5", "h6" => "♥️6", "h7" => "♥️7", "h8" => "♥️8", "h9" => "♥️9", "h10" => "♥️10", "h11" => "♥️J", "h12" => "♥️Q", "h13" => "♥️K",
        "s1" => "♠️A", "s2" => "♠️2", "s3" => "♠️3", "s4" => "♠️4", "s5" => "♠️5", "s6" => "♠️6", "s7" => "♠️7", "s8" => "♠️8", "s9" => "♠️9", "s10" => "♠️10", "s11" => "♠️J", "s12" => "♠️Q", "s13" => "♠️K",
        "d1" => "♦️A", "d2" => "♦️2", "d3" => "♦️3", "d4" => "♦️4", "d5" => "♦️5", "d6" => "♦️6", "d7" => "♦️7", "d8" => "♦️8", "d9" => "♦️9", "d10" => "♦️10", "d11" => "♦️J", "d12" => "♦️Q", "d13" => "♦️K",
        "c1" => "♣️A", "c2" => "♣️2", "c3" => "♣️3", "c4" => "♣️4", "c5" => "♣️5", "c6" => "♣️6", "c7" => "♣️7", "c8" => "♣️8", "c9" => "♣️9", "c10" => "♣️10", "c11" => "♣️J", "c12" => "♣️Q", "c13" => "♣️K",
    ];

    // Return the deckGraphics array
    public function getCardGraphics(): array
    {
        return $this->deckGraphics;
    }

    public function __construct()
    {
        // const
    }

}
