<?php
const Love_All = "Love-All";
const Fifteen_All = "Fifteen-All";
const Thirty_All = "Thirty-All";
const Forty_All = "Forty-All";
const Deuce = "Deuce";
class TennisGame
{
    public string $score = '';
    public function getScore($playerFirst, $playSecond, $scoreFirst, $scoreSecond)
    {
        $tempScore = 0;

        if ($scoreFirst == $scoreSecond) {
            switch ($scoreFirst) {
                case 0:
                    $this->score = Love_All;
                    break;
                case 1:
                    $this->score = Fifteen_All;
                    break;
                case 2:
                    $this->score = Thirty_All;
                    break;
                case 3:
                    $this->score = Forty_All;
                    break;
                default:
                    $this->score = Deuce;
                    break;

            }
        } else if ($scoreFirst >= 4 || $scoreSecond >= 4) {
            $minusResult = $scoreFirst - $scoreSecond;
            if ($minusResult == 1) $this->score = "Advantage player1";
            else if ($minusResult == -1) $this->score = "Advantage player2";
            else if ($minusResult >= 2) $this->score = "Win for player1";
            else $this->score = "Win for player2";
        } else {
            for ($i = 1; $i < 3; $i++) {
                if ($i == 1) $tempScore = $scoreFirst;
                else {
                    $this->score .= "-";
                    $tempScore = $scoreSecond;
                }
                switch ($tempScore) {
                    case 0:
                        $this->score .= "Love";
                        break;
                    case 1:
                        $this->score .= "Fifteen";
                        break;
                    case 2:
                        $this->score .= "Thirty";
                        break;
                    case 3:
                        $this->score .= "Forty";
                        break;
                }
            }
        }
    }

    public function __toString(): string
    {
        return $this->score;
    }
}