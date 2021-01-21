<?php

require_once("main.php");

class wawancara extends main
{
    private $wawancara;

    public function setWawancara($wawancara)
    {
        if ($wawancara > 85) {
            $this->setRating(5);
        } else if ($wawancara >= 70 && $wawancara <= 85) {
            $this->setRating(4);
        } else if ($wawancara >= 60 && $wawancara <= 69) {
            $this->setRating(3);
        } else if ($wawancara >= 50 && $wawancara <= 59) {
            $this->setRating(2);
        } else {
            $this->setRating(1);
        }
        $this->wawancara = $wawancara;
    }

    public function getWawancara() {
        return $this->wawancara;
    }
}