<?php

require_once("main.php");

class makalahpresentasi extends main
{
    private $makalahpresentasi;

    public function setMakalahPresentasi($makalahpresentasi)
    {
        if ($makalahpresentasi > 85) {
            $this->setRating(5);
        } else if ($makalahpresentasi >= 70 && $makalahpresentasi <= 85) {
            $this->setRating(4);
        } else if ($makalahpresentasi >= 60 && $makalahpresentasi <= 69) {
            $this->setRating(3);
        } else if ($makalahpresentasi >= 50 && $makalahpresentasi <= 59) {
            $this->setRating(2);
        } else {
            $this->setRating(1);
        }
        $this->makalahpresentasi = $makalahpresentasi;
    }

    public function getMakalahPresentasi() {
        return $this->makalahpresentasi;
    }
}